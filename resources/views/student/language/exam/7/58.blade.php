<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    .drag-container {
        margin: 0 auto 25px;
    }

    .answers-container {
        display: flex;
        height: 100%;
        width: 100%;
        margin: 5px auto;
    }

    .number {
        list-style-type: none;
        margin: 0;
        padding: 0;
        height: 100%;
        width: 40px;
        display: flex;
        flex-direction: column;
    }

    .number li {
        background: #999;
        color: #fff;
        height: 100%;
        margin: 3px 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .dropbox {
        margin-left: 10px;
        padding: 0;
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        border: 2px dashed #ccc;
        border-radius: 5px;
    }

    .dropbox .drag {
        color: #fff;
        margin: 3px;
    }
</style>
@php
    $q1 = "I believe schools should teach students how to";
    $q11 = "children.";
    $q111 = array(
        'bring up',
        'grow up',
        'take over',
        'keep on'
    );
    $q2 = "Many parents don't know how to";
    $q22 = "children properly; for example, they let them eat too much fast food.";
    $q222 = array(
        'grow up',
        'drop out',
        'put forward',
        'look after'
    );
    $q3 = "Married couples sometimes";
    $q33 = "over who should do the housework. They need to decide on that before they get married.";
    $q333 = array(
        'look after',
        'take over',
        'fall out',
        'put forward'
    );
    $q4 = "This report";
    $q44 = "the reasons for the dramatic rise in population.";
    $q444 = array(
        'cuts down on',
        'keeps on',
        'leaves out',
        'drops out'
    );
    $q5 = "A successful business person";
    $q55 = "trying even when something seems impossible.";
    $q555 = array(
        'looks after',
        'drops out',
        'puts forward',
        'keeps on'
    );
    $q6 = "He is behaving so immaturely. He really needs to";
    $q66 = ".";
    $q666 = array(
        'leave out',
        'grow up',
        'fall out',
        'take over'
    );
    $q7 = "The course was quite boring and so many students";
    $q77 = ".";
    $q777 = array(
        'fell out',
        'took over',
        'dropped out',
        'put forward'
    );
    $q8 = "No one had any ideas on how to solve the problem until the chairperson";
    $q88 = "this suggestion.";
    $q888 = array(
        'put forward',
        'looked after',
        'grew up',
        'fell out'
    );
    $q9 = "My cough is getting really bad. I really should";
    $q99 = "the number of cigarettes each day.";
    $q999 = array(
        'look after',
        'drop out',
        'leave out',
        'cut down on'
    );
    $q10 = "The hospital has recently been";
    $q100 = "by an international conglomerate.";
    $q1000 = array(
        'taken over',
        'put forward',
        'grown up',
        'cut down on'
    );
@endphp

<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-6">
                    <div class="border border-dark px-2 text-center">
                        <h5>The graph below shows the number of marriages and divorces in a particular city between 1950 and 2010.</h5>
                        <img src="{{ asset('public/img_lang/p_11.jpg') }}" class="m-2">
                    </div>
                </div>
                <div class="border border-dark mt-3 p-2">
                        <h4 class="text-center">How to shop sensibly</h4>
                        <ul class="px-3 mt-2 questions">
                            <li>
                                <span class="font-weight-bold">Shop around.</span> When you see the sign “sale” on the shop window, it doesn’t always mean that the price has been reduced. In reality it just means that the shop is selling things. If you’re looking for lower prices, go to a number of places and compare prices. It’s a good <span class="font-weight-bold">1.</span> 
                                <div class="input-con">
                                    <input type="text" class="form-control" onchange="this.value = this.value.toUpperCase()" autocomplete="false" spellcheck="false">
                                </div>
                                of time.
                            </li>
                            <li>
                                <span class="font-weight-bold">Read sale ads carefully.</span> Some shopping ads may say “limited <span class="font-weight-bold">2.</span> 
                                <div class="input-con">
                                    <input type="text" class="form-control" onchange="this.value = this.value.toUpperCase()" autocomplete="false" spellcheck="false">
                                </div>
                                ” or “not available at all stores.” Before you leave your home, call ahead to make sure the merchant has the item in <span class="font-weight-bold">3.</span> 
                                <div class="input-con">
                                    <input type="text" class="form-control" onchange="this.value = this.value.toUpperCase()" autocomplete="false" spellcheck="false">
                                </div>
                                . If you’re shopping for a popular or hard-to-find item, ask the merchant if he’d be willing to hold the item until you can get to the
                            </li>
                            <li>
                                <span class="font-weight-bold">Take time and travel costs into consideration.</span> If an item is on sale, but it’s way across town, how much are you really saving once you factor in your time, your transportation, and <span class="font-weight-bold">4.</span> 
                                <div class="input-con">
                                    <input type="text" class="form-control" onchange="this.value = this.value.toUpperCase()" autocomplete="false" spellcheck="false">
                                </div>
                                ?
                            </li>
                            <li>
                                <span class="font-weight-bold">Look for price-matching policies.</span> Some merchants will match, or even <span class="font-weight-bold">5.</span>
                                <div class="input-con">
                                    <input type="text" class="form-control" onchange="this.value = this.value.toUpperCase()" autocomplete="false" spellcheck="false">
                                </div>
                                a competitor’s prices — at least for a limited time. Read the merchant's pricing policy. It may not apply to all items.
                            </li>
                            <li>
                                <span class="font-weight-bold">Go online.</span> Check out websites that compare prices for items offered online. Some sites also may compare prices offered at stores in your area. If you decide to buy online, keep <span class="font-weight-bold">6.</span>
                                <div class="input-con">
                                    <input type="text" class="form-control" onchange="this.value = this.value.toUpperCase()" autocomplete="false" spellcheck="false">
                                </div>
                                costs and delivery time in mind.
                            </li>
                            <li>
                                <span class="font-weight-bold">Calculate bargain offers that are based on purchases of additional merchandise.</span> For example, “buy one, get one free,” “free gift with purchase,” or “free shipping with <span class="font-weight-bold">7.</span>
                                <div class="input-con">
                                    <input type="text" class="form-control" onchange="this.value = this.value.toUpperCase()" autocomplete="false" spellcheck="false">
                                </div>
                                purchase” may sound enticing. If you don’t really want or need the item, it’s not a deal.
                            </li>
                            <li>
                                <span class="font-weight-bold">Ask about sale adjustments.</span> If you buy an item at regular price and it goes on sale the next week, can you get a <span class="font-weight-bold">8.</span>
                                <div class="input-con">
                                    <input type="text" class="form-control" onchange="this.value = this.value.toUpperCase()" autocomplete="false" spellcheck="false">
                                </div>
                                or refund for the discounted amount? If so, what documentation will you need?
                            </li>
                            <li>
                                <span class="font-weight-bold">Ask about refund and return policies for sale items.</span> Merchants often have different refund and return policies for sale items, especially <span class="font-weight-bold">9.</span>
                                <div class="input-con">
                                    <input type="text" class="form-control" onchange="this.value = this.value.toUpperCase()" autocomplete="false" spellcheck="false">
                                </div>
                                merchandise, so check in advance.
                            </li>
                        </ul>
                        <div>
                            So, remember, you need to be aware that stores will do anything they can to get you inside the shop. You need to beware of some of the <span class="font-weight-bold">10.</span>
                            <div class="input-con">
                                <input type="text" class="form-control" onchange="this.value = this.value.toUpperCase()" autocomplete="false" spellcheck="false">
                            </div>
                            of the trade. Good luck!
                        </div>
                    </div>

                <div class="col-md-6">
                    <div class="border border-dark p-3">
                        <p>
                            The line-graphs give details of how many people got married and divorced in one city from 1950 to 2010. Figures are given in thousands. Overall, it can be seen that the number of marriages (1) 
                            <input type="text" class="form-control mb-2 w-25" id="inlineFormInput" placeholder="Jane Doe"> over the period, while the number of divorces (2)______________ . At the (3)______________
                            of the period there were 80,000 marriages. In the same year, only 20,000 couples decided to get divorced. The next decade saw a slight (4)______________ 
                            in the number of marriages, while the number of divorces (5)______________ 
                            to almost 30,000. In 1960 there was a (6)______________ drop in marriages to just under 60,000. During that same period, the number of divorces continued its upward trend to stand 
                            (7)______________ 40,000. For the next three decades, the number of marriages (8)______________ 
                            again to reach around 65,000 before falling again. The number of divorces continued to rise until the mid 1980’s when it (9)______________ 
                            slightly until the year 2000. By the end of the period the number of marriages stood (10)______________ 
                            just over 50,000, (11)______________ the number of divorces had risen to just under 50,000.To sum up, the (12)______________ 
                            of marriages had fallen by around 30,000, while the number of divorces had risen by a similar number.
                        </p>
                    </div>
                </div>
            </div>
            <div class="drag-container">
                <div class="d-flex justify-content-center" id="choices">
                    <div class="drag">personal cheque</div>
                    <div class="drag">Bitcoin</div>
                    <div class="drag">items of food and drink</div>
                    <div class="drag">bill of exchange</div>
                    <div class="drag">credit card</div>
                    <div class="drag">ATM</div>
                </div>
            </div>

            <div class="row justify-content-center mb-2">
                <div class="col-xl-6">
                    <div class="answers-container">
                        <ul class="number">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                        </ul>

                        <div class="dropbox"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="answers-container">
                        <ul class="number">
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                        </ul>
                        <div class="dropbox"></div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</div>


@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answers</button>
    <button id="show-answer" class="btn btn-success">Show Answer</button>
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script>
    $('#show-answer').attr('disabled', true)
    const answers = ['items of food and drink', 'bill of exchange', 'personal cheque', 'credit card', 'ATM', 'Bitcoin'];
    let quizInDrop = [];

    $("#choices, .dropbox").sortable({
        connectWith: '.dropbox',
        cursor: "move",
        opacity: 0.7,
        zIndex: 100,
        containment: ".card-box",
        over: function (e, ui) {
            $(this).css('border-color', '#777');
        },
        out: function (e, ui) {
            $(this).css('border-color', '#ccc');
        }
    });

    $('#check-answer').on('click', () => {
        $('.dropbox .drag').each((index, item) => {
            $(item).removeClass('bg-success');
            $(item).removeClass('bg-danger');
            $('.number li').eq(index).removeClass('bg-success');
            $('.number li').eq(index).removeClass('bg-danger');

            if($(item).text() == answers[index]) {
                $('.number li').eq(index).addClass('bg-success');
                $(item).addClass('bg-success');
            } else {
                $('.number li').eq(index).addClass('bg-danger');
                $(item).addClass('bg-danger');
            }

            quizInDrop.push($(item).text());
        })


        $('.dropbox').sortable({ disabled: true })
        $('#show-answer').attr('disabled', false)
    })

    $('#show-answer').on('click', function() {
        // $('.drag-container .drag').remove()
        answers.forEach((text, idx) => {
            if($('.dropbox .drag').eq(idx).hasClass('bg-danger')) {
                $('.dropbox .drag').eq(idx).removeClass('bg-danger')
                $('.dropbox .drag').eq(idx).text(text)
                $('.number li').eq(idx).removeClass('bg-danger')
            } else {
                if($('.dropbox .drag').eq(idx).text() != text) {
                    $('.dropbox').append($(`<div class="drag">${ text  }</div>`))
                }
            }
        })


    })
</script>
@stop