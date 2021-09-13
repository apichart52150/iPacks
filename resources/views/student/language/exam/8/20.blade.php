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
    $Q=["q1" => "The life-cycle of a frog",
    "q2" => "of around 11 different stages or processes, and the diagrams illustrate the",
    "q3" => "from egg to tadpole and eventually adult frog. During the first stage of the cycle the female frog lays a large",
    "q4" => "of eggs, which are called ‘frogspawn’. These are surrounded by a protective gelatinous coating. After between one and three weeks, the embryos start to split and multiply.",
    "q5" => "as tadpoles, form inside the eggs. The tadpoles then break out of their protective eggs.",
    "q6" => "broken out of their eggs, the tadpoles attach themselves to long strands of weed for stability, staying there for about one week. After this, the tadpoles start swimming on their",
    "q7" => "They have oval bodies and long flattened tails, which allow them to swim quite fast. At the",
    "q8" => "time, tiny teeth develop which the tadpoles use to feed on algae. In the next stage, the hind legs start to emerge from its body at the 6 to 9 weeks mark. These hind legs then grow in length and, at the same time, the tail becomes",
    "q9" => "During the next stage, at the 9 to 12 weeks mark, the lungs develop and the front legs appear. Approximately three weeks later, when its skin becomes",
    "q10" => "and skin glands develop the tadpole starts to look ",
];
$end = "an adult frog. By week 16, the tadpole’s metamorphosis into an adult frog is complete, after which the adult frog finds a partner and mates. The cycle is then repeated.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The diagram below shows the life-cycle of a frog. The table explains what happens at each stage.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <a href="{{ asset('public/img_lang/gap2/gap2_20_1.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap2/gap2_20_1.jpg') }}" class="img-fluid" alt="work-thumbnail">
                        </a>
                        <a href="{{ asset('public/img_lang/gap2/gap2_20_2.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap2/gap2_20_2.jpg') }}" class="img-fluid" alt="work-thumbnail">
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
    answers[0]= ['consists'];
    answers[1] = ['change', 'metamorphosis', 'development'];
    answers[2] = ['number'];
    answers[3] = ['known'];
    answers[4] = ['Having'];
    answers[5] = ['own'];
    answers[6] = ['same'];
    answers[7] = ['shorter'];
    answers[8] = ['thicker'];
    answers[9] = ['like'];

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