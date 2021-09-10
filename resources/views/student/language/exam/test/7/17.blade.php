<style>
    .form-control {
        border: none;
        border-bottom: 1px solid #ccc;
        display: inline-block;
        height: auto;
        width: 120px;
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
    $Q=["q1" => "The diagrams",
    "q2" => "two kinds of bicycle, the penny-farthing, which was used around the year 1900, and the modern racing bike, which was used one hundred years later.",
    "q3" => ", it can be seen that there are a number of differences in appearance and performance between the two bicycles. To start with the physical aspect, the two bicycles are very different in appearance. First of all, the",
    "q4" => "striking difference is the size of the wheels. The penny-farthing has a very large wheel at the front. The rear wheel is much",
    "q5" => "than the front one. The wheels on the modern racing bike are both the",
    "q6" => "size. They are ",
    "q7" => "than the front wheel of the penny-farthing, but",
    "q8" => "than its rear wheel. The saddle on the penny-farthing is also quite high. It is located over the front wheel and sits around 2 metres off the ground. By contrast, the saddle on the modern racing bike is located above the",
    "q9" => "wheel and it is not as high",
    "q10" => "the saddle on the penny-farthing. With regard to performance features, the modern racing bike, as its name suggests, is designed for speed, whereas the penny-farthing is not. The racing bike has a number of gears connecting the pedals and the rear wheel. This means it can travel at",
    "q11" => "speeds than the penny-farthing. In terms of safety and comfort, the modern racing bike is much safer and",
    "q12" => "comfortable than the penny-farthing. The racing bike has brakes to help it stop,",
];
$end = "the penny-farthing does not have brakes. In addition, the rubber wheels of the racing bike give the cyclist a smoother ride, especially over rough roads.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5></h5>
                        <img src="{{ asset('public/img_lang/gap1/gap1_17.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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
    answers[0]= ['show', 'depict', 'illustrate'];
    answers[1] = ['Overall'];
    answers[2] = ['most'];
    answers[3] = ['smaller', 'littler'];
    answers[4] = ['same'];
    answers[5] = ['larger', 'bigger'];
    answers[6] = ['smaller', 'littler'];
    answers[7] = ['rear', 'back'];
    answers[8] = ['as'];
    answers[9] = ['faster', 'higher', 'greater'];
    answers[10] = ['more'];
    answers[11] = ['while', 'whereas', 'but'];

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