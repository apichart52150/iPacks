<style>
    label {
        font-weight: normal;
    }
</style>

@php
    $q1 = "Which of these sentences is not a complete sentence?";
    $q111 = array(
        'Keep your room tidy!',
        'Shopping at Central World for new clothes.',
        'Swimming in the sea is better than in the pool.',
        'Eating out costs a lot of money.'
    );
    $q2 = "Which of these sentences is not a complete sentence?";
    $q222 = array(
        'Smoking is bad for your health.',
        'Smoking should be banned.',
        'Smoking kills.',
        'moking ban in all public places.'
    );
    $q3 = "Which of these sentences is not a complete sentence?";
    $q333 = array(
        'Sales increase likely next year.',
        'Sales increase regularly each month.',
        'Sales increased moderately last month.',
        'Sales are showing signs of improvement.'
    );
    $q4 = "Which of these sentences is not a complete sentence?";
    $q444 = array(
        'Improvements in education lead to higher grades',
        'Improvements in health care result in longer life.',
        'Improvements in car safety expected to lead to fewer accidents.',
        'Improvements in security helped save millions of dollars.'
    );
    $q5 = "Which of these sentences is not a complete sentence?";
    $q555 = array(
        'Price rises worrying industry bosses.',
        'Price rises after new wage increases.',
        'Price rise gives new hope for manufacturers.',
        'Prices rise giving higher inflation.'
    );
    $q6 = "Which of these sentences is not a complete sentence?";
    $q666 = array(
        'Mobile phones make communication quicker.',
        'Mobile phone prices are likely to rise.',
        'Mobile phone demand likely to increase.',
        'Mobile phone use can damage the health.'
    );
    $q7 = "Which of these sentences is a COMPLETE sentence?";
    $q777 = array(
        'Rising prices expected to continue.',
        'Rising prices keep inflation high.',
        'Rising prices keeping inflation at record levels.',
        'Rising prices not a problem.'
    );
    $q8 = "Which of these sentences is a COMPLETE sentence?";
    $q888 = array(
        'First of all coffee beans picked from the bushes.',
        'After picking, the beans sent to the factory.',
        'The beans heated in large ovens.',
        'After heating, the beans can be ground into powder.'
    );
    $q9 = "Which of these sentences is a COMPLETE sentence?";
    $q999 = array(
        'More people eat fast food than ever before.',
        'Eating too much fast food not good for young people.',
        'Young people eating fast food more than ever nowadays.',
        'Fast food restaurant likely to open in the next few weeks.'
    );
    $q10 = "Which of these sentences is a COMPLETE sentence?";
    $q1000 = array(
        "No one's perfect.",
        "John's parents going to return soon.",
        "The girl's bicycle stolen outside the school.",
        "The river's rising water a problem for residents."
    );
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">Choose the best answer for each question from the given options.</p>
            <div class="row">
                <div class="col-md-6">
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
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="1-4" name="q1" value="d">
                            <label class="custom-control-label" for="1-4">{{  $q111[3]  }}</label>
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
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="2-4" name="q2" value="d">
                            <label class="custom-control-label" for="2-4">{{  $q222[3]  }}</label>
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
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="3-4" name="q3" value="d">
                            <label class="custom-control-label" for="3-4">{{  $q333[3]  }}</label>
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
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="4-4" name="q4" value="d">
                            <label class="custom-control-label" for="4-4">{{  $q444[3]  }}</label>
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
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="5-4" name="q5" value="d">
                            <label class="custom-control-label" for="5-4">{{  $q555[3]  }}</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>6. {{ $q6 }}</label>
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
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="6-4" name="q6" value="d">
                            <label class="custom-control-label" for="6-4">{{  $q666[3]  }}</label>
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
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="7-4" name="q7" value="d">
                            <label class="custom-control-label" for="7-4">{{  $q777[3]  }}</label>
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
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="8-4" name="q8" value="d">
                            <label class="custom-control-label" for="8-4">{{  $q888[3]  }}</label>
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
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="9-4" name="q9" value="d">
                            <label class="custom-control-label" for="9-4">{{  $q999[3]  }}</label>
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
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="10-4" name="q10" value="d">
                            <label class="custom-control-label" for="10-4">{{  $q1000[3]  }}</label>
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

        let score = 0;

        $('#check-answer').on('click', () => {

            $(q1).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['b'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
                score++;
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q2).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['d'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
                score++;
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q3).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['a'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
                score++;
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q4).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['c'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
                score++;
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q5).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['a'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
                score++;
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });
            
            $(q6).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['c'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
                score++;
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q7).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['b'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
                score++;
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q8).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['d'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
                score++;
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q9).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['a'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
                score++;
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q10).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['a'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
                score++;
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $("#check-answer").hide(true);
        })

    </script>
@endsection