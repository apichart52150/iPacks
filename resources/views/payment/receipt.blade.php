@extends('layouts.main')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('user_home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Payment - Receipt</li>
                    </ol>
                </div>
                <h4 class="page-title">Payment - Receipt</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->

    <div class="row mt-3">
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
                            <p><b>Customer Name: {{ auth('web')->user()->first_name}} {{ auth('web')->user()->last_name}}</b></p>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <h5>Billing Address</h5>
                                <address>
                                {{ $data['address']}}
                                </address>
                            </div> <!-- end col -->
                        </div> 

                    </div><!-- end col -->
                    <div class="col-md-4 offset-md-2">
                        <div class="mt-3 float-right">
                            <p class="m-b-10"><strong>No. </strong> <span class="float-right">{{ $data['orderReceipt']}} </span></p>
                            <p class="m-b-10"><strong>Date: </strong> <span class="float-right"> &nbsp;&nbsp;&nbsp;&nbsp; {{ $data['currentDate']}}</span></p>
                            <p class="m-b-10"><span class="float-right"><span class="badge badge-success p-2 h-2">PAID</span></span></p>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

               
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table mt-4 table-centered">
                                <thead>
                                <tr><th>No.</th>
                                    <th>Package</th>
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
                            <h4 >Payment</h4>
                            @if ($data['payType'] == "CC")
                            <div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                    <label class="custom-control-label" for="customCheck1">Credit Card</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" disabled>
                                    <label class="custom-control-label" for="customCheck2">ALIPAY</label>
                                </div>
                            </div>
                            @else
                            <div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" disabled>
                                    <label class="custom-control-label" for="customCheck1">Credit Card</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                    <label class="custom-control-label" for="customCheck2">ALIPAY</label>
                                </div>
                            </div>
                            @endif
                           
                        </div>
                    </div> <!-- end col -->
                    <div class="col-sm-6">
                        <div class="float-right">
                            <p><b>Sub-total: </b> <span class="float-right">{{ $data['amount'] }} BAHT</span></p>
                            <h3>{{ $data['amount'] }} BAHT</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
                <br>
                <p class="textmiuted">This receipt will be completed when net amount of this receipt is in Company's bank account</p>

                <div class="mt-4 mb-1">
                    <div class="text-right d-print-none">
                        <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-printer mr-1"></i> Print</a>
                        <a href="{{ route('send_mail' )}}" class="btn btn-success waves-effect waves-light">Finish</a>
                    </div>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
</div> <!-- end container -->
@endsection