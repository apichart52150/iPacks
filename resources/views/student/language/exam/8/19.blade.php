<style>
    .form-control {
        border: none;
        border-bottom: 1px solid #ccc;
        display: inline-block;
        height: auto;
        width: 140px;
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
    $Q=["q1" => "The diagrams show the development of the television set over the last fifty years or so. It is clear that there have been significant changes in",
    "q2" => "and performance, with the state-of-the-art television offering many different services. To begin with physical aspects, the black and white analogue television set of the 1960s was quite large and had a shape like a",
    "q3" => "It weighed forty-five kilograms and was,",
    "q4" => ", difficult to move around. Much of this",
    "q5" => "came from the wooden cabinet which housed the component parts. In sharp contrast, the modern day high definition, digital ‘smart’ television set has a flat",
    "q6" => "and weighs just ten kilograms, which is considerably",
    "q7" => "han the oldfashioned model. In",
    "q8" => "of screen size, the old-fashioned set had a 12-inch screen while the ‘smart’ TV had a large 51-inch screen, giving a much larger picture. The picture is also much clearer than the older style TV because of the high",
    "q9" => "capability. Apart from the picture quality, the ‘smart’ TV also presents programs with a much better",
    "q10" => "quality because of the built-in stereo",
    "q11" => "and the fact that it can be connected to an auxiliary speaker system with hometheatre capability. By contrast, the television set of the 1960s had just a built-in mono speaker with no home-theatre capacity. As well as producing a clearer picture and better sound, the ‘smart’ TV ",
    "q12" => "offers a wide range of other facilities, including built-in",
    "q13" => "connectivity. As a result, the viewer can log on to the internet in much the same way as with a computer. Movies can be downloaded and viewed using the home-theatre capacity. By",
    "q14" => "the old-fashioned TV set can be used only as a television, with no additional applications. In terms of cost, both sets have the same price at one thousand, two hundred dollars each (relative to today’s cost of",
    "q15" => "). The reason for this is that the original prototype was an",
    "q16" => "in technology and the relatively high price reflected the research and",
    "q17" => "costs invested in it. Nowadays advanced technology gadgets are manufactured in mass quantities resulting in reduced prices (",
];
$end = " of scale).";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The pictures below show how the television set has changed over time.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <a href="{{ asset('public/img_lang/gap2/gap2_19.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap2/gap2_19.jpg') }}" class="img-fluid" alt="work-thumbnail">
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
    answers[0]= ['Appearance'];
    answers[1] = ['cube', 'box'];
    answers[2] = ['therefore'];
    answers[3] = ['weight'];
    answers[4] = ['screen'];
    answers[5] = ['less'];
    answers[6] = ['terms', 'respect'];
    answers[7] = ['definition', 'resolution'];
    answers[8] = ['audio', 'sound'];
    answers[9] = ['speakers'];
    answers[10] = ['also'];
    answers[11] = ['5', 'five'];
    answers[12] = ['contrast'];
    answers[13] = ['living'];
    answers[14] = ['innovation', 'advancement'];
    answers[15] = ['development'];
    answers[16] = ['economies'];

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