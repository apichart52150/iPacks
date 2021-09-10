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
    $Q=["q1" => "The flow-chart describes the process of",
    "q2" => "rice. It can be seen that there are six major",
    "q3" => "in this process, which take place in the rice fields, the processing plant, and finally the retail shops where the processed rice is",
    "q4" => "The first stage is the preparation of the fields. In order to prepare the fields, the land must be",
    "q5" => "This means that the soil is turned to make planting easier. In the",
    "q6" => "ploughing was usually done using animals such as horses or buffalo, although nowadays ploughing is often done using a ",
    "q7" => "over the fields and fertilizer is added to help the seeds to grow strong. Once the seeds have formed leaves, the young plants are thinned out and transplanted into rows. After a period of a few months, the mature rice crop is",
    "q8" => "decade, it increased again to finish at 8,900 transplants in 2010. In Australia, 4,200 transplants",
    "q9" => "again either manually or by machine. After harvesting, the",
    "q10" => "are removed in the milling stage. Following this, the rice is",
];
$end = "usually in the sun, and then packed into sacks. Finally the packed rice can be sent to retail outlets, where it is sold.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The diagram shows how rice is cultivated. Summarize the information by selecting and reporting on the main features.</h5>
                        <img src="{{ asset('public/img_lang/gap2/gap2_15.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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
    answers[0]= ['cultivating', 'growing'];
    answers[1] = ['stages'];
    answers[2] = ['sold'];
    answers[3] = ['ploughed'];
    answers[4] = ['past'];
    answers[5] = ['tractor'];
    answers[6] = ['scattered', 'dispersed', 'sown'];
    answers[7] = ['harvested'];
    answers[8] = ['husks'];
    answers[9] = ['dried'];

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