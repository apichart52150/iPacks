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
$Q=["q1" => "The pictures show how a university developed between the years 2000 and 2010. Overall, it can be seen that
there were a number of changes in facilities provided by the university, namely sports facilities, shops and
accommodation. To begin",
"q2" => "the sports facilities, the large sports field",
"q3" => "the right-hand side",
"q4" => "the university building has disappeared and a new gymnasium has taken its place. The lake, which was next",
"q5" => "the sports field, has also disappeared.",
"q6" => "its place there are now some shops for the students to buy things. By 2010 the lecture theatre had not changed.
It was exactly the same",
"q7" => "it was before. The dormitory,",
"q8" => ", was much",
"q9" => " than it used to be. This means that many more students could live on the university campus. In order to
provide space",
"q10" => "the extra sleeping accommodation, the café was moved. It was now located",
];
$end = "the left of the shops.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The diagrams below show the development of a university over a ten-year period.</h5>
                        <a href="{{ asset('public/img_lang/gap1/gap1_16.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                                <img src="{{ asset('public/img_lang/gap1/gap1_16.jpg') }}" class="img-fluid" alt="work-thumbnail">
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
    answers[0]= ['with'];
    answers[1] = ['on'];
    answers[2] = ['of'];
    answers[3] = ['to'];
    answers[4] = ['in'];
    answers[5] = ['as'];
    answers[6] = ['however', 'though'];
    answers[7] = ['larger', 'bigger'];
    answers[8] = ['for'];
    answers[9] = ['to', 'on'];

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