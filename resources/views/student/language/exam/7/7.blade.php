<style>
    .form-control {
        border: none;
        border-bottom: 1px solid #ccc;
        display: inline-block;
        height: auto;
        width: 130px;
        padding: 0 5px;
        margin: 10px 5px;
    }

    ul.questions li {
        margin: 20px 0;
        line-height: 2rem;
    }

    .input-con {
        display: inline-block;
        position: relative;
    }

    .ans-con {
        position: absolute;
        top: 50%;
        right: 5px;
        transform: translateY(-50%);
    }
</style>
@php
    $Q = ["q1" => "The diagrams show two kinds of vehicles from the beginning and the end of the twentieth century. The information in the tables gives details of size and performance of the two cars. Overall it is clear that there are significant differences",
    "q2" => "the two cars in both size and performance with regard to physical appearance, the Silver Spur is",
    "q3" => "than the Silver Ghost. The former is 3.9 metres long, while the",
    "q4" => "is 3.6 metres in",
    "q5" => ". The Silver Spur is also",
    "q6" => "than the Silver Ghost. At 1.9 tonnes, it weighs 0.3 tonnes more than the Silver Ghost. The engine size is the only feature which the two cars have in common. At 3.2 litres, the Silver Spur engine is the",
    "q7" => "size as the Silver Ghost engine. In spite of having the same size engine, the Silver Spur is much",
    "q8" => "than the Silver Ghost. It can travel at 220 kilometres per hour, which is 80 kilometres",
    "q9" => "than the Silver Ghost. In terms of fuel consumption, the Silver Ghost is",
    "q10" => "economical than the Silver Spur. The former can travel 22 kilometres on one gallon of fuel,",
    "q11" => "the latter can travel only 12 kilometres on one gallon. The greater size and performance of the Silver Spur comes at a cost. The Silver Spur is",
    "q12" => "expensive than the Silver Ghost. At 210,000 dollars it costs 30,000 dollars",
];
    $end = "than the Silver Ghost.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5></h5>
                        <a href="{{ asset('public/img_lang/gap1/gap1_7.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap1/gap1_7.jpg') }}" class="img-fluid" alt="work-thumbnail">
                            </a>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="border border-dark p-2">
                        @foreach ($Q as $Q)
                        <div class="line-hight d-inline w-auto mb-2 ">
                            {{ $Q }}
                            <!-- question -->
                        </div>
                        <div class="input-con">
                            <input type="text" class="form-control">
                        </div>
                        @endforeach
                        {{$end}}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answers</button>
@endsection

@section('js')
<script>

    
    const answers = []
    answers[0]= ['between'];
    answers[1] = ['longer', 'larger', 'bigger'];
    answers[2] = ['latter'];
    answers[3] = ['length', 'size'];
    answers[4] = ['heavier'];
    answers[5] = ['same','exact'];
    answers[6] = ['quicker','faster'];
    answers[7] = ['more','greater','faster'];
    answers[8] = ['more'];
    answers[9] = ['while','whereas','but'];
    answers[10] = ['more'];
    answers[11] = ['moRe'];

    let score = 0;

    $('#check-answer').click(checkAnswers) 

    function checkAnswers() {
        let icon;
        $(':text').each((idx, item) => {
            answers[idx] = answers[idx].toString().trim().toLowerCase().split(",")
            $(item).removeClass('border-success');
            $(item).removeClass('border-danger');
            
            if(jQuery.inArray($(item).val().toLowerCase(),  answers[idx]) != -1) {
                $(item).addClass('border border-success');
                score++
            } else {
                $(`<span class="text-success"><u>${answers[idx]}</u></span>`).insertAfter($(item));
                $(item).addClass('border border-danger');
            }
        })

        $('#check-answer').prop('disabled', true);
        
        let title = ""
        let text = "You got "+score + "/" + $(':text').length + " points."
        if (score == $(':text').length)
            title = "Congratulations!"
        else
            text = text + " Try again."

        Swal.fire({
            title: title,
            text: text,
            timer: 5000,
        }).then(() => {
            $(item).css({
                "font-weight": "bold",
                'color': '#2bc3a5'
            });
        });

    }
</script>
@stop