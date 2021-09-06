<style>
    label {
        font-weight: normal;
    }
</style>

@php
    $q1 = "We tried to figure it out but without success. What does 'figure' mean'?";
    $q111 = array(
        'Shape or number',
        'A character or preson',
        'Find a solution',
    );
    $q2 = "Unlike his mother, who likes to donate to charity, he's quite a mean character. What is the meaning of 'mean'?";
    $q222 = array(
        'Average',
        'Not generous',
        'Cruel',
    );
    $q3 = "Please complete the form fully before submitting it. What does 'form' mean?";
    $q333 = array(
        'A shape',
        'Written document',
        'Class list',
    );
    $q4 = "While on holiday he contracted malaria. Whatr does 'contracted' mean?";
    $q444 = array(
        'Signed an agrement',
        "Asked someone to do something",
        'Caught',
    );
    $q5 = "The police conducted an enquiry into the mysterious disappearance of the woman. Whar does 'conducted' mean?";
    $q555 = array(
        'Directed an orchestra',
        'Carried out',
        'Behaved in a certain way',
    );
    $q6 = "A number of factors contribute to climate change. What does 'contribute' mean?";
    $q666 = array(
        'To be one of the reasons why something happens',
        'Give money to charity',
        'To write an article for a magazine',
    );
    $q7 = "Margins are quite tight in today's competitive market. What does 'margins' mean?";
    $q777 = array(
        'The space down the side of a page',
        'The difference between the win ner and second placed runner in a race',
        'The difference between what a product costs and the selling price: the profit',
    );
    $q8 = "Perhaps the greatest impact of globalization has been in the area of demographics. What does 'area' mean?";
    $q888 = array(
        'A part of a town or country',
        'The amount of space covered by a surface shape',
        'A particular field or subject',
    );
    $q9 = "Capital punishment is a subject of much debate. What does 'subject' mean?";
    $q999 = array(
        'Topic',
        'A person ruled by a king',
        'Something studied at school e.g. Maths',
    );
    $q10 = "Regular exercise promotes good health. What does 'promotes' mean?";
    $q1000 = array(
        "Gives someone a better job.",
        "Encourages someone to do something.",
        "Supports somthing to further its progress",
    );
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">Choose the best answer for each question from the given options.</p>
            <label>1. {{ $q1 }}</label>
            <div class="ml-2">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="1-1" name="q1" value="a">
                    <label class="custom-control-label" for="1-1">{{ $q111[0] }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="1-2" name="q1" value="b">
                    <label class="custom-control-label" for="1-2">{{  $q111[1]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="1-3" name="q1" value="c">
                    <label class="custom-control-label" for="1-3">{{  $q111[2]  }}</label>
                </div>
            </div>

            <label class="mt-3">2. {{ $q2 }}</label>
            <div class="ml-2">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="2-1" name="q2" value="a">
                    <label class="custom-control-label" for="2-1">{{  $q222[0]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="2-2" name="q2" value="b">
                    <label class="custom-control-label" for="2-2">{{  $q222[1]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="2-3" name="q2" value="c">
                    <label class="custom-control-label" for="2-3">{{  $q222[2]  }}</label>
                </div>
            </div>

            <label class="mt-3">3. {{ $q3 }}</label>
            <div class="ml-2">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="3-1" name="q3" value="a">
                    <label class="custom-control-label" for="3-1">{{  $q333[0]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="3-2" name="q3" value="b">
                    <label class="custom-control-label" for="3-2">{{  $q333[1]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="3-3" name="q3" value="c">
                    <label class="custom-control-label" for="3-3">{{  $q333[2]  }}</label>
                </div>
            </div>

            <label class="mt-3">4. {{ $q4 }}</label>
            <div class="ml-2">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="4-1" name="q4" value="a">
                    <label class="custom-control-label" for="4-1">{{  $q444[0]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="4-2" name="q4" value="b">
                    <label class="custom-control-label" for="4-2">{{  $q444[1]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="4-3" name="q4" value="c">
                    <label class="custom-control-label" for="4-3">{{  $q444[2]  }}</label>
                </div>
            </div>

            <label class="mt-3">5. {{ $q5 }}</label>
            <div class="ml-2">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="5-1" name="q5" value="a">
                    <label class="custom-control-label" for="5-1">{{  $q555[0]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="5-2" name="q5" value="b">
                    <label class="custom-control-label" for="5-2">{{  $q555[1]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="5-3" name="q5" value="c">
                    <label class="custom-control-label" for="5-3">{{  $q555[2]  }}</label>
                </div>
            </div>

            <label class="mt-3">6. {{ $q6 }}</label>
            <div class="ml-2">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="6-1" name="q6" value="a">
                    <label class="custom-control-label" for="6-1">{{  $q666[0]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="6-2" name="q6" value="b">
                    <label class="custom-control-label" for="6-2">{{  $q666[1]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="6-3" name="q6" value="c">
                    <label class="custom-control-label" for="6-3">{{  $q666[2]  }}</label>
                </div>
            </div>

            <label class="mt-3">7. {{ $q7 }}</label>
            <div class="ml-2">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="7-1" name="q7" value="a">
                    <label class="custom-control-label" for="7-1">{{  $q777[0]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="7-2" name="q7" value="b">
                    <label class="custom-control-label" for="7-2">{{  $q777[1]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="7-3" name="q7" value="c">
                    <label class="custom-control-label" for="7-3">{{  $q777[2]  }}</label>
                </div>
            </div>

            <label class="mt-3">8. {{ $q8 }}</label>
            <div class="ml-2">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="8-1" name="q8" value="a">
                    <label class="custom-control-label" for="8-1">{{  $q888[0]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="8-2" name="q8" value="b">
                    <label class="custom-control-label" for="8-2">{{  $q888[1]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="8-3" name="q8" value="c">
                    <label class="custom-control-label" for="8-3">{{  $q888[2]  }}</label>
                </div>
            </div>

            <label class="mt-3">9. {{ $q9 }}</label>
            <div class="ml-2">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="9-1" name="q9" value="a">
                    <label class="custom-control-label" for="9-1">{{  $q999[0]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="9-2" name="q9" value="b">
                    <label class="custom-control-label" for="9-2">{{  $q999[1]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="9-3" name="q9" value="c">
                    <label class="custom-control-label" for="9-3">{{  $q999[2]  }}</label>
                </div>
            </div>

            <label class="mt-3">10. {{ $q10 }}</label>
            <div class="ml-2">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="10-1" name="q10" value="a">
                    <label class="custom-control-label" for="10-1">{{  $q1000[0]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="10-2" name="q10" value="b">
                    <label class="custom-control-label" for="10-2">{{  $q1000[1]  }}</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="10-3" name="q10" value="c">
                    <label class="custom-control-label" for="10-3">{{  $q1000[2]  }}</label>
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
        const q1 = $('input[name="q1"]');
        const q2 = $('input[name="q2"]');
        const q3 = $('input[name="q3"]');
        const q4 = $('input[name="q4"]');
        const q5 = $('input[name="q5"]');
        const q6 = $('input[name="q6"]');
        const q7 = $('input[name="q7"]');
        const q8 = $('input[name="q8"]');
        const q9 = $('input[name="q9"]');
        const q10 = $('input[name="q10"]');

        $('#check-answer').on('click', () => {

            $(q1).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['c'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q2).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['a'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q3).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['b'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q4).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['b'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q5).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['c'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });
            
            $(q6).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['b'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q7).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['b'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q8).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['c'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q9).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['a'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q10).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['c'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $("#check-answer").hide(true);
        })

    </script>
@endsection