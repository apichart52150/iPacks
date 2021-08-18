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
                </div>


                <div class="col-md-6">
                    <label>4. {{ $q4 }}</label>
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
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="6-4" name="q6" value="d">
                            <label class="custom-control-label" for="6-4">{{  $q666[3]  }}</label>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    
@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answersss</button>
@endsection
    
@section('js')
    <script>
        const q1 = $('input[name="q1"]');
        const q2 = $('input[name="q2"]');
        const q3 = $('input[name="q3"]');
        const q4 = $('input[name="q4"]');
        const q5 = $('input[name="q5"]');
        const q6 = $('input[name="q6"]');

        $('#check-answer').on('click', () => {

            $(q1).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['d'].includes($(item).val())) {
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
            if (['c'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q4).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['c'].includes($(item).val())) {
                $(item).parent().append('<i class="fas fa-check text-success"></i>');
            } else {
                $(item).parent().append('<i class="fas fa-times text-danger"></i>');
            }
            });

            $(q5).each((index, item) => {
            $(item).parent().find('i').remove();
            if (['d'].includes($(item).val())) {
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

            $("#check-answer").hide(true);
        })

    </script>
@endsection