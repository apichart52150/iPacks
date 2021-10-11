@extends('layouts.payment')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('success') }}">back</a></li>
                        <li class="breadcrumb-item active">Payment - Confirm</li>
                    </ol>
                </div>
                <h4 class="page-title">Payment - Confirm</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <!-- Logo & title -->
                <div class="clearfix">
                    <div class="float-right">
                        <img src="{{ asset('public/assets/images/logo_ielte_practice.svg') }}" alt="" height="60">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-3">
                            <p><b>Hello, {{ auth('web')->user()->first_name}} {{ auth('web')->user()->last_name}}</b></p>
                            <p class="text-muted">Thanks a lot because you keep purchasing our products. Our company
                                promises to provide high quality products for you as well as outstanding
                                customer service for every transaction. </p>
                        </div>

                    </div><!-- end col -->
                    <div class="col-md-4 offset-md-2">
                        <div class="mt-3 float-right">
                            <p class="m-b-10"><strong>Order Date : </strong> <span class="float-right"> &nbsp;&nbsp;&nbsp;&nbsp; {{ $data['currentDate']}}</span></p>
                            <p class="m-b-10"><strong>Order Status : </strong> <span class="float-right"><span class="badge badge-danger p-2">Unpaid</span></span></p>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                <div class="row mt-3">
                    <div class="col-sm-12">
                        <h5>Billing Address</h5>
                        <address>
                          {{ $data['address']}}
                        </address>
                    </div> <!-- end col -->
                </div> 
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table mt-4 table-centered">
                                <thead>
                                <tr><th>#</th>
                                    <th>Item</th>
                                    <th style="width: 15%" class="text-right">Total</th>
                                </tr></thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <b>IELTS Practice Package</b> <br/>
                                        {{ $data['package'] }}
                                    </td>
                                    <td class="text-right">{{ $data['amount']}} BAHT</td>
                                </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-6">
                        <div class="clearfix pt-5">
                            <h6 class="text-muted">Notes:</h6>

                            <small class="text-muted">
                                All accounts are to be paid within 7 days from receipt of
                                invoice. To be paid by cheque or credit card or direct payment
                                online. If account is not paid within 7 days the credits details
                                supplied as confirmation of work undertaken will be charged the
                                agreed quoted fee noted above.
                            </small>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-sm-6">
                        <div class="float-right">
                            <p><b>Sub-total: </b> <span class="float-right">{{ $data['amount'] }}.00</span></p>
                            <p><b>Discount: </b> <span class="float-right"> &nbsp;&nbsp;&nbsp; {{ $data['discount'] }}.00</span></p>
                            @php
                                $price = $data['amount'] - $data['discount']
                            @endphp
                            <h3>{{ $price }}.00 BAHT</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="mt-4 mb-1">
                    <div class="text-right d-print-none">
                        <!-- <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-printer mr-1"></i> Print</a> -->
                        @if ($data['payMethod'] == "ALIPAY")
                            <form action="https://testpaygate.ktc.co.th/scs/eng/merchandize/payment/payForm.jsp" name="payFormCcard" method="POST">
                                <input type="hidden" name="merchantId" value="991303017"> 
                                <input type="hidden" name="orderRef" value="{{ $data['orderRef'] }}">
                                <input type="hidden" name="payMethod" value="ALIPAY">
                                <input type="hidden" name="amount" value="{{ $price }}.00">
                                <input type="hidden" name="currCode" value="764" >
                                <input type="hidden" name="successUrl" value="{{ route('payment_success') }}">
                                <input type="hidden" name="failUrl" value="{{ route('pay_fail') }}">
                                <input type="hidden" name="cancelUrl" value="{{ route('success') }}">
                                <input type="hidden" name="payType" value="N">
                                <input type="hidden" name="lang" value="E">
                                <input type="hidden" name="TxType" value="Retail" > 
                                <input type="submit" class="btn btn-success waves-effect waves-light" name="submit" value="Confirm">     
                                <a href="{{ route('logout')}}">
                                    <input type="button" class="btn btn-danger waves-effect waves-light" name="submit" value="Cancel">
                                </a>
                            </form>
                        @else
                            <form action="https://testpaygate.ktc.co.th/ktc/eng/merchandize/payment/payForm.jsp" name="payFormCcard" method="POST">
                                <input type="hidden" name="merchantId" value="092300019">
                			    <input type="hidden" name="orderRef" value="{{ $data['orderRef'] }}">
                			    <input type="hidden" name="currCode" value="764" >
                                <input type="hidden" name="amount" value="{{ $price }}.00">
                                <input type="hidden" name="successUrl" value="{{ route('payment_success') }}">
                                <input type="hidden" name="failUrl" value="{{ route('pay_fail') }}">
                                <input type="hidden" name="cancelUrl" value="{{ route('success') }}">
                                <input type="hidden" name="payType" value="N">
                                <input type="hidden" name="lang" value="E">
                                <input type="hidden" name="TxType" value="Retail" > 
                                <input type="submit" class="btn btn-success waves-effect waves-light" name="submit" value="Confirm">     
                                <a href="{{ route('logout')}}">
                                    <input type="button" class="btn btn-danger waves-effect waves-light" name="submit" value="Cancel">
                                </a>
                            </form>
                        @endif
                       
                    </div>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
</div> <!-- end container -->
@endsection