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
$Q=["q1" => "The chart shows how people of different ages find out about the news. Overall, it can be seen that
newspapers are popular with all age groups except the young people aged under 20. For adolescents, the internet is the",
"q2" => "popular way of finding out what’s happening in the world. Half of all teenagers use the internet for this. The
other fifty percent rely on television and newspapers, with 30% and 20%",
"q3" => ". People aged between 20 and 40 use both newspapers and the television equally to access the news, at 40% each.
Only (3)",
"q4" => "of them use the internet for this.",
"q5" => "of the people in the 40 to 60 group prefer to read the news in newspapers while 40% choose to find out news on
television. Only",
"q6" => "of them use the internet. People in the oldest age group, the over 60s, prefer to watch the news on television.
This is ten percent",
"q7" => "than those who like to read newspapers. Only 5 per cent of the over 60s choose the internet to access news,
the",
"q8" => "of all the groups. To sum",
"q9" => ", it seems that the",
"q10" => "people get, the",
];
$end = "they like to use the internet for getting news.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The bar-chart below shows how four groups of people access the news.</h5>
                        <a href="{{ asset('public/img_lang/gap1/gap1_10.jpg') }}" class="image-popup"
                            title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap1/gap1_10.jpg') }}" class="img-fluid"
                                alt="work-thumbnail">
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
    answers[0]= ['most'];
    answers[1] = ['respectively'];
    answers[2] = ['20%','one-fifth'];
    answers[3] = ['Half'];
    answers[4] = ['10%','one-tenth'];
    answers[5] = ['more','greater', 'higher'];
    answers[6] = ['least'];
    answers[7] = ['up'];
    answers[8] = ['older'];
    answers[9] = ['less'];

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