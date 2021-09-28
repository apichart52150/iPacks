<style>
    .form-control {
        border: none;
        border-bottom: 1px solid #ccc;
        display: inline-block;
        height: auto;
        width: 135px;
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
    //$question -> input
    $Q=["q1" => "The map shows how Biggsville, a village not ",
    "q2" => "from London, has developed since 1868, when the village was first established. It can be seen that there is a ",
    "q3" => "between the growth of the village and the development of transportation infrastructure, namely, roads and",
    "q4" => "access. In its early stages, the village was built between two main roads and it continued to grow along these roads in a",
    "q5" => "direction. The construction of the railway in 1909 resulted in further growth in this direction. There was also",
    "q6" => "to the south of the railway and along the main road south of the railway station line",
    "q7" => "1922 and 1970. This trend continued until 1970 when a motorway was",
    "q8" => "to the east of the existing village, crossing both the railway line and one of the main roads. Over the next twenty-five years, the village increased in",
    "q9" => "as further accommodation was built along the motorway, mostly on the eastern side but also some to the west. To",
    "q10" => "up, the village developed to the south, west and east of the ",
];
$end = "location, in conjunction with the construction of transportation routes.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>Biggsville is a village near London whose population has increased steadily since the middle of the nineteenth century.</h5>
                        <h5>The map below shows the development of the village. Write a report to describe how the village developed over the four given periods of time.</h5>
                        <a href="{{ asset('public/img_lang/gap2/gap2_17.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap2/gap2_17.jpg') }}" class="img-fluid" alt="work-thumbnail">
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


@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answers</button>
@endsection

@section('js')
<script>
    // no space answer
    
    const answers = []
    answers[0]= ['far'];
    answers[1] = ['correlation', 'link'];
    answers[2] = ['railway'];
    answers[3] = ['south-westerly'];
    answers[4] = ['expansion', 'development', 'construction'];
    answers[5] = ['between'];
    answers[6] = ['built', 'constructed'];
    answers[7] = ['size'];
    answers[8] = ['sum'];
    answers[9] = ['original'];

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