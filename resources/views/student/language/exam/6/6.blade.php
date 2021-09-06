<style>
    label {
        font-weight: normal;
    }
</style>

@php
    $q1 = "The company plans to introduce a new clocking-on system. What does 'introduce' mean?";
    $q111 = array(
        'To bring in a system for the first time',
        'To formally tell people about the others in their group',
        'To describe what is about to happen',
    );
    $q2 = "Most people have strong views about an issue such as capital punishment. What does 'views' mean?";
    $q222 = array(
        'Things you can see in the distance',
        'Opinions',
        'Pictures of a place',
    );
    $q3 = "Most people have strong views about an issue such as capital punishment. What does 'capital' mean?";
    $q333 = array(
        'The largets city in a country',
        'Money for investment',
        'Resulting in death',
    );
    $q4 = "It's important to understand the terms of any contract before you sign. What does 'terms' mean?";
    $q444 = array(
        'A portion of the school year.',
        "The conditions of the agreement",
        'Words or expressions',
    );
    $q5 = "That seems to be a sound investment. What does 'sound' mean?";
    $q555 = array(
        'Solid',
        'A noise',
        'A geographical feature in the sea',
    );
    $q6 = "I'm sure there's a solution to global warming if we think about it. What does 'solution' mean?";
    $q666 = array(
        'When a solid or gas has dissolved in liquid',
        'An answer to a mathematical problem of crossword',
        'The way out of a problem',
    );
    $q7 = "The woman could see the figure of a man hiding behind the bush. What does 'figure' mean?";
    $q777 = array(
        'A number',
        'A shape',
        'Character, person',
    );
    $q8 = "The speed limit has been introduced in the interests of local pedestrians. What does 'interests' mean?";
    $q888 = array(
        'Benefits',
        'Money gained from a deposit in a bank',
        'Hobbies and leisure pursuits',
    );
    $q9 = "The man was in a very bad way after the accident. What does 'way' mean?";
    $q999 = array(
        'Condition',
        'Road or route',
        'a method of doing something',
    );
    $q10 = "I'm using the phrase human resources in its broadest sense. What does 'sense' mean?";
    $q1000 = array(
        "Meaning",
        "e.g seeing, hearing, smell, touch, taste",
        "A feeling based on insstinct",
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
            if (['a'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q2).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['b'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q3).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['c'].includes($(item).val())) {
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
            if (['a'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });
            
            $(q6).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['c'].includes($(item).val())) {
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
            if (['a'].includes($(item).val())) {
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
            if (['a'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $("#check-answer").hide(true);
        })

    </script>
@endsection