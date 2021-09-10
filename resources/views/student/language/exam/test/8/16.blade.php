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
    $Q=["q1" => "The flow-chart shows the",
    "q2" => "involved in diamond processing, from extracting the ore to producing the diamond concentrate. The process consists of three",
    "q3" => "stages: crushing, cleaning and separation. Each stage is",
    "q4" => "out using a number of different machines. The first stage in the process is crushing, which itself",
    "q5" => "of three main stages. First of all, the iron ore is passed to the primary crusher,",
    "q6" => "the large rocks are crushed into smaller pieces of roughly 30 centimetres in diameter. These smaller pieces are then fed into the secondary crusher, which, in",
    "q7" => ", reduces the rocks to an even smaller size: 8 cm in diameter. The",
    "q8" => "stage in crushing involves the roller crusher, which breaks up the rocks into pieces not",
    "q9" => "3 centimetres, at the same time releasing the diamonds. During the next stage, cleaning, four machines are used to",
    "q10" => "various pieces of dirt from the diamond ore. The primary and the secondary scrubber remove dirt particles and reduce the size of the ore further. As their names imply, the de-gritter removes grit and the de-sander gets rid of",
    "q11" => ". The separation stage consists of three methods. In the first of these, heavy minerals, which surround the diamonds, are separated from the light minerals, and the",
    "q12" => "are discarded.",
];
$end = "this, magnets remove unwanted magnetic deposits, and finally the pure diamond ore is extracted using a grease table which separates the diamond concentrate from all the remaining pieces.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The diagram shows the process of diamond mining, from the raw material (ore) to the diamond concentrate. Write a description of the process showing how the ore is transformed into diamond concentrate.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant. </h5>
                        <img src="{{ asset('public/img_lang/gap2/gap2_16.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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
    answers[0]= ['stages'];
    answers[1] = ['distinct', 'different'];
    answers[2] = ['carried'];
    answers[3] = ['consists'];
    answers[4] = ['where'];
    answers[5] = ['turn'];
    answers[6] = ['final', 'last', 'third', 'next'];
    answers[7] = ['exceeding'];
    answers[8] = ['remove', 'clean'];
    answers[9] = ['sand'];
    answers[10] = ['latter'];
    answers[11] = ['following', 'after'];

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