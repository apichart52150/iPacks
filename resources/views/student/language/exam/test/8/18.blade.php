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
    $Q=["q1" => "The diagrams show how the telephone has developed over the last two centuries since it was",
    "q2" => "in the nineteenth century. It is quite clear that it has been",
    "q3" => "quite dramatically in terms of both appearance and performance. If we start with the",
    "q4" => "appearance we can see that there are differences in size, shape and weight. The old-fashioned telephone is quite tall at thirty centimeters",
    "q5" => "to the smart phone which",
    "q6" => "just 12 centimetres in height and five centimetres in ",
    "q7" => "The shape is also different. The original phone is tall and slim and consists of 2 distinct parts:",
    "q8" => ", a mouthpiece for speaking into, and the earphone for",
    "q9" => "to the other person. By contrast, the one-piece smart phone has a flat, rectangular shape which fits into the hand. The",
    "q10" => " size means that the smart phone is much lighter than the original, oldfashioned phone: the former weighs just 250 grams, while the",
    "q11" => "has a weight of one kilogram, four times as much as the smart phone.",
    "q12" => "to performance aspects, the original phone was designed for speaking with people at a distance. In the same way, the smart phone is used for communicating with other people. It does, however, have far more applications than simply as a phone. The smart phone functions as a camera, a music player and can even be used for downloading and watching movies from the internet. In",
    "q13" => "the touch screen enables people to",
    "q14" => "numbers quickly, in contrast to the original version, which operated by finger dialing. Finally, the smart phone can send",
];
$end = "to people anywhere in the world, at the touch of a button, with a built-in keyboard for writing the message.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>'The pictures show the development of two telephones: the original phone a short time after its invention in the nineteenth century, and a modern-day state-of-the-art 'smart' phone Write a report to describe this development, making comparisons where necessary. '</h5>
                        <img src="{{ asset('public/img_lang/gap2/gap2_18.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
                        <img src="{{ asset('public/img_lang/gap2/gap2_18_2.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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
    answers[0]= ['invented'];
    answers[1] = ['transformed', 'developed', 'changed', 'improved'];
    answers[2] = ['physical'];
    answers[3] = ['compared'];
    answers[4] = ['is', 'measures'];
    answers[5] = ['width'];
    answers[6] = ['namely'];
    answers[7] = ['listening'];
    answers[8] = ['smaller', 'reduced'];
    answers[9] = ['latter'];
    answers[10] = ['Turning', 'Moving'];
    answers[11] = ['addition'];
    answers[12] = ['dial', 'access', 'reach'];
    answers[13] = ['emails', 'messages'];

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