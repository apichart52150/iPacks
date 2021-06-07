@section('css')
<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    .drag-container {
        margin-bottom: 25px;
    }

    .grid-5 {
        grid-template-columns: repeat(5, 1fr);
    }

    .answers-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 10px 0;
    }

    .answers-container p {
        font-size: 16px;
    }

    .dropbox {
        border: 2px dashed #ccc;
        border-radius: 5px;
        padding: 3px;
        width: 200px;
        height: 100%;
        min-height: 40px;
    }

    .dropbox .drag {margin: 0;
    }
</style>
@stop

<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
            Match the items on the top to the box on the right.
            </p>
            
            <div class="drag-container">
                <div class="d-grid grid-5" id="choices">
                    <div class="drag">bring up</div>
                    <div class="drag">fall out</div>
                    <div class="drag">leave out</div>
                    <div class="drag">keep on</div>
                    <div class="drag">look after</div>
                    <div class="drag">grow up</div>
                    <div class="drag">drop out</div>
                    <div class="drag">put forward</div>
                    <div class="drag">cut down on</div>
                    <div class="drag">take over</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="answers-container">
                        <p class="mb-0">assume control of something e.g. a company</p>
                        <div class="dropbox"></div>
                    </div>
                    <div class="answers-container">
                        <p class="mb-0">raise (children)</p>
                        <div class="dropbox"></div>
                    </div>
                    <div class="answers-container">
                        <p class="mb-0">continue</p>
                        <div class="dropbox"></div>
                    </div>
                    <div class="answers-container">
                        <p class="mb-0">stop doing something e.g. leave school</p>
                        <div class="dropbox"></div>
                    </div>
                    <div class="answers-container">
                        <p class="mb-0">argue; have a disagreement</p>
                        <div class="dropbox"></div>
                    </div>
                    <div class="answers-container">
                        <p class="mb-0">take care of</p>
                        <div class="dropbox"></div>
                    </div>
                    <div class="answers-container">
                        <p class="mb-0">reduce</p>
                        <div class="dropbox"></div>
                    </div>
                    <div class="answers-container">
                        <p class="mb-0">omit; not include</p>
                        <div class="dropbox"></div>
                    </div>
                    <div class="answers-container">
                        <p class="mb-0">become adult</p>
                        <div class="dropbox"></div>
                    </div>
                    <div class="answers-container">
                        <p class="mb-0">suggest; state a plan of action</p>
                        <div class="dropbox"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answer</button>
    <button id="show-answer" class="btn btn-success">Show Answer</button>
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script>
    const answers = [
        "bring up",
        "bring up",
        "keep on",
        "drop out",
        "fall out",
        "look after",
        "cut down on",
        "leave out",
        "grow up",
        "put forward",
    ];

    $("#show-answer").hide();

    $(".drag").draggable({
        revert: "invalid",
        cursor: "move",
        opacity: 0.7,
        zIndex: 100,
        containment: ".card-box",
        stop: function (event, ui) {
          if ($("#choices").children().length == 0) {
            $("#check-answer").prop("disabled", false);
          }
        },
    });

    $(".dropbox").droppable({
        accept: ".drag",
        tolerance: "touch",
        zIndex: 100,
        over: function (event, ui) {
            $(this).css("border-color", "#777");
        },
        out: function (event, ui) {
            $(this).css("border-color", "#ccc");
        },
        drop: function (event, ui) {
            if ($(this).children().length > 0) {
                var move = $(this).children().detach();
                $(ui.draggable).css({ top: 0, left: 0 }).parent().append(move);
            }
            $(this).css("border-color", "#ccc");
            $(this).append($(ui.draggable).css({ top: 0, left: 0 }));
        },
    });

    $('#check-answer').on('click', function() {

        let droppables = $(".dropbox");

        droppables.each((idx, item) => {
            if($(item).children().text().trim() == answers[idx]) {
                checkAnswer($(item).children(), 'correct');
            } else {
                checkAnswer($(item).children(), 'incorrect');
            }
        });

        $(".drag").draggable({
            disabled: true,
        });

        $("#show-answer").show();
        $("#check-answer").hide();
    });

    $('#show-answer').on('click', function() {

        $('.dropbox').each((idx, item) => {

            if($(item).children().length == 1) {
                if($(item).children().hasClass('color-danger')) {
                    if($(item).children().text(answers[idx])) {
                        $(item).children().removeClass('color-danger')
                    }
                }
            } else {
                $(item).append(`<div class="drag">${ answers[idx] }</div>`)
            }

            $('.drag-container .drag').remove();
        })
        $("#show-answer").hide();
    });

    function checkAnswer(ele, status) {
        let bgColor, icon;

        status == 'correct' ? (bgColor = 'color-success', icon = '<i class="fas fa-check"></i>') : (bgColor = 'color-danger', icon = '<i class="fas fa-times"></i>')


        ele.addClass(bgColor)
        ele.append(icon)
    }
</script>
@stop