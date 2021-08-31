<style>
    label {
        font-weight: normal;
    }
</style>

@php
    $q1 = "The duty on alcohol has been increased again. What does 'duty' mean?";
    $q111 = array(
        'Moral or legal obligation',
        'A task you do as part of your job.',
        'An excise, or tax.',
    );
    $q2 = "You can tackle the problem in any order you wish. What is the meaning of 'order'?";
    $q222 = array(
        'A sequence',
        'A command given by someone',
        'A request for something to be delivered to you',
    );
    $q3 = "Coursework is an integral part of the course and counts as 80% of the final mark. What does 'counts' mean?";
    $q333 = array(
        'To calculate the number of people e.g. in a room.',
        'To be important',
        'To say the numbers in order: one, two, three etc.',
    );
    $q4 = "The human resources team take into account a person's nature before offering the job. What does 'nature' mean?";
    $q444 = array(
        'A combination of features that define something',
        "A person's character and personality",
        'The physical world including all the flora and fauna of an area',
    );
    $q5 = "Drug dependence is one of the most common causes of juvenile crime. What does 'common' mean?";
    $q555 = array(
        'Ordinary, usual, not outstanding',
        'Belonging to a broad group of people',
        'Frequent',
    );
    $q6 = "The whole point of the law was to prevent violent crime. What does 'point' mean?";
    $q666 = array(
        'A sharp end',
        'The reason for something',
        'A precise moment in time',
    );
    $q7 = "Your investment is good and should bring a good return. What does 'return' mean?";
    $q777 = array(
        'Going back to a place',
        'Profit',
        'Resuming an activity after a pause',
    );
    $q8 = "A dozen suspected terrorists were arrested in the operation. What does 'operation' mean?";
    $q888 = array(
        'A surgical procedure',
        'A business or company',
        'A planned action with a specific purpose',
    );
    $q9 = "The country was deemed to be a failed state for a number of reasons. What does 'state' mean?";
    $q999 = array(
        'A nation',
        'A condition',
        'An area within a country',
    );
    $q10 = "Young people have a higher degree of independence nowadays than in the past. what does 'degree' mean?";
    $q1000 = array(
        "An academic qualification",
        "A unit of measurment for angles or temperatures",
        "Amount or level",
    );
@endphp

<div class="row">
    <div class="col-xl-12 col-md-12">
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
@stop