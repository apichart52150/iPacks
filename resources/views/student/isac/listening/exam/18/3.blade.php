@section('css')
<style>
    table tbody tr td {
        vertical-align: middle !important;
    }

    table thead tr th:first-of-type {
        width: 20%;
    }
    table thead tr th:nth-child(2) {
        width: 20%;
    }
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        color: #ffffff;
        background-color: #e74856;
        border-color: #dee2e6 #dee2e6 #fff;
    }

    .form-control3 {
        border: none;
        border-bottom: 1px solid #ccc;
        display: inline-block;
        height: auto;
        width: 140px;
    }

    .line-break {
        width: 100%;
        height: 3px;
        margin: 10px 0 20px;
        background: #e74856;
    }

</style>
@stop
@php
    $question1 = [
        'q1' => '1. prawns on the barbie',
        'q2' => '2. people on the bus',
        'q3' => '3. coffee in the jar',
        'q4' => '4. elephants in the zoo',
        'q5' => '5. paper on the shelf',
        'q6' => '6. pages in the book',
        'q7' => '7. money in the bank',
        'q8' => '8. milk in the bottle',
        'q9' => '9. chocolate in the fridge',
        'q10' => '10. chocolates in the box',
        'q11' => '11. books in the bag',
        'q12' => '12. cheese in the packet',
    ];

    $question2 = [
        'q1' => "1. There are a lot of people at the party, aren't there?",
        'q2' => "2. There are a lot of eggs in the basket, aren't there?",
        'q3' => "3. There's a lot of coffee in the jar, isn't there?",
        'q4' => "4. There are a lot of books to read, aren't there?",
        'q5' => "5. There's a lot of wood on the fire, isn't there?",
        'q6' => "6. There's a lot of paper in the printer, isn't there?",
        'q7' => "7. There are a lot of animals in the zoo, aren't there?",
        'q8' => "8. There's a lot of petrol in the tank, isn't there?",
    ];

    $question3 = [
        'q1' => "fish",
        'q2' => "cheese",
        'q3' => "carrots",
        'q4' => "potatoes",
        'q5' => "lemonade",
        'q6' => "bread",
        'q7' => "coffee",
        'q8' => "eggs",
        'q9' => "curry",
        'q10' => "nuts",
        'q11' => "sandwiches",
        'q12' => "lollies",
    ];   

@endphp

<div class="row">
    <div class="col-md-12">

        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#exercise1" data-toggle="tab" aria-expanded="true" class="nav-link active">
                        <span class="d-inline-block d-sm-none"><i class="fas fa-home"></i></span>
                        <span class="d-none d-sm-inline-block">Exercise 1</span>   
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#exercise2" data-toggle="tab" aria-expanded="false" class="nav-link">
                        <span class="d-inline-block d-sm-none"><i class="far fa-user"></i></span>
                        <span class="d-none d-sm-inline-block">Exercise 2</span> 
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#exercise3" data-toggle="tab" aria-expanded="false" class="nav-link">
                        <span class="d-inline-block d-sm-none"><i class="far fa-user"></i></span>
                        <span class="d-none d-sm-inline-block">Exercise 3</span> 
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="exercise1">
                    <table class="table table-sm table-bordered nowrap text-dark mt-3">
                        <thead>
                            <p><u>Listen to the example:</u></p>
                            
                            <strong>e.g. 1 </strong>eggs in the basket
                            <p><strong>Answer: </strong> How many eggs are there in the basket?</p>

                            <strong>e.g. 2 </strong>bread in the pantry
                            <p><strong>Answer: </strong> How much bread is there in the pantry?</p>

                            <p><u>Now you do it: </u></p>
                            <tr>
                                <th class="font-weight-bold">QUESTION</th>
                                <th class="font-weight-bold">ANSWER</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= count($question1); $i++)
                                <tr>
                                    <td>{{ $question1['q'.$i] }}</td>
                                    <td>
                                        <div class="position-relative">
                                            <input type="text1" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                    <center><button id="check-answer1" class="btn btn-info">Check Answersss</button></center>
                </div>

                <div class="tab-pane fade" id="exercise2">
                    <table class="table table-sm table-bordered nowrap text-dark mt-3">
                        <thead>
                            <p><u>Listen to the example:</u></p>
                            
                            <strong>e.g. 1 </strong>There's a lot of money left, isn't there? 
                            <p><strong>Answer: </strong>No, there isn't much money left at all.</p>

                            <p><u>Now you do it: </u></p>
                            <tr>
                                <th class="font-weight-bold">QUESTION</th>
                                <th class="font-weight-bold">ANSWER</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= count($question2); $i++)
                                <tr>
                                    <td>{{ $question2['q'.$i] }}</td>
                                    <td>
                                        <div class="position-relative">
                                            <input type="text2" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                    <center> <button id="check-answer2" class="btn btn-info">Check Answersss</button></center>
                </div>

                <div class="tab-pane fade" id="exercise3">
                    <p><strong>few</strong> Listen to the examples:</p>
                    <dl class="row">
                        <dt class="col-sm-1"><strong>e.g. 1</strong></dt>
                        <dd class="col-sm-11"><strong>A:</strong> Do you like the <strong>food?</strong></dd>
                        <dt class="col-sm-1"></dt>
                        <dd class="col-sm-11"><strong>B:</strong> Yes, <strong>it's</strong> very nice. </dd>
                        <dt class="col-sm-1"></dt>
                        <dd class="col-sm-11"><strong>A:</strong> Would you like some more?</dd>
                        <dt class="col-sm-1"></dt>
                        <dd class="col-sm-11"><strong>B:</strong> Yes please, but only <strong>a little</strong>. </dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-1"><strong>e.g. 2</strong></dt>
                        <dd class="col-sm-11"><strong>A:</strong> Do you like the <strong>apples?</strong></dd>
                        <dt class="col-sm-1"></dt>
                        <dd class="col-sm-11"><strong>B:</strong> Yes, <strong>they're</strong> very nice. </dd>
                        <dt class="col-sm-1"></dt>
                        <dd class="col-sm-11"><strong>A:</strong> Would you like some more?</dd>
                        <dt class="col-sm-1"></dt>
                        <dd class="col-sm-11"><strong>B:</strong> Yes please, but only <strong> a few</strong>. </dd>
                    </dl>

                    <div class="line-break"></div>

                    <p>Now you do it:</p> 

                    @for ($i = 1; $i <= count($question3); $i++)
                        <dl class="row">
                            <dt class="col-sm-1"><strong>{{ $i }}</strong></dt>
                            <dd class="col-sm-11"><strong>A:</strong> Do you like the  
                                <strong>{{ $question3['q'.$i] }}</strong>
                            </dd>
                            <dt class="col-sm-1"></dt>
                            <dd class="col-sm-11"><strong>B:</strong> Yes,  
                                <input type="text3" class="form-control3">
                                very nice. 
                            </dd>
                            <dt class="col-sm-1"></dt>
                            <dd class="col-sm-11"><strong>A:</strong> Would you like some more?</dd>
                            <dt class="col-sm-1"></dt>
                            <dd class="col-sm-11"><strong>B:</strong> Yes please, but only  
                                <input type="text3" class="form-control3">
                            </dd>
                        </dl>
                    @endfor
                    <center> <button id="check-answer3" class="btn btn-info">Check Answersss</button></center>
                </div>
            </div>
        </div>
    </div>
</div>

@section('button-control')
   
@endsection

@section('js')
    <script>

        const selectAnswer1 = [
            "How many prawns are there on the barbie?", 
            "How many people are there on the bus?", 
            "How much coffee is there in the jar?", 
            "How many elephants are there in the zoo?", 
            "How much paper is there on the shelf?", 
            "How many pages are there in the book?", 
            "How much money is there in the bank?", 
            "How much milk is there in the bottle?", 
            "How much chocolate is there in the fridge?", 
            "How many chocolates are there in the box?",
            "How many books are there in the bag?",
            "How much cheese is there in the packet?",
        ];

        const selectAnswer2 = [
            "No, there aren't many people at the party at all", 
            "No, there aren't many eggs in the basket at all", 
            "No, there isn't much coffee in the jar at all", 
            "No, there aren't many books to read at all", 
            "No, there isn't much wood on the fire at all", 
            "No, there isn't much paper in the printer at all", 
            "No, there aren't many animals in the zoo at all", 
            "No, there isn't much petrol in the tank at all", 
        ];

        const selectAnswer3 = [
            "fish", 
            "it's", 
            "a little", 
            "cheese", 
            "it's", 
            "a little", 
            "carrots", 
            "they're ", 
            "a few", 
            "potatoes",
            "they're",
            "a few",
            "lemonade",
            "it's",
            "a little",
            "bread",
            "it's",
            "a little",
            "coffee",
            "it's",
            "a little",
            "eggs",
            "they're",
            "a few",
            "curry",
            "it's",
            "a little",
            "nuts",
            "they're",
            "a few",
            "sandwiches",
            "they're",
            "a few",
            "lollies",
            "they're",
            "a few",
        ];

        $('#check-answer1').on('click', () => {
        $('#check-answer1').prop('disabled',true)
            $('input[type="text1"]').each((index, item) => {
                if (selectAnswer1[index].toLowerCase() == $(item).val().toLowerCase()) {
                    item.className = 'form-control border-success'
                } else {
                    $(`<span class="text-success mt-2">${selectAnswer1[index]}</span>`).insertAfter($(item));
                }
            });
            $('#check-answer1').prop('disabled',true)
        });

        $('#check-answer2').on('click', () => {
        $('#check-answer2').prop('disabled',true)
            $('input[type="text2"]').each((index, item) => {
                if (selectAnswer2[index].toLowerCase() == $(item).val().toLowerCase()) {
                    item.className = 'form-control border-success'
                } else {
                    $(`<span class="text-success mt-2">${selectAnswer2[index]}</span>`).insertAfter($(item));
                }
            });
            $('#check-answer2').prop('disabled',true)
        });

        $('#check-answer3').on('click', () => {
        $('#check-answer3').prop('disabled',true)
            $('input[type="text3"]').each((index, item) => {
                if (selectAnswer3[index].toLowerCase() == $(item).val().toLowerCase()) {
                    item.className = 'form-control border-success'
                } else {
                    $(`<span class="text-success mt-2">${selectAnswer3[index]}</span>`).insertAfter($(item));
                }
            });
            $('#check-answer3').prop('disabled',true)
        });
    </script>
@stop