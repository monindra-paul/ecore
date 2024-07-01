@extends('frontend.layout.app')
@section('title')
    <title>View Status | ECore TechServ - The Soul of Future Technology</title>
@endsection

@section('description')
    <meta name="description"
        content="View your bill status with ECore TechServ.">
@endsection

@section('keyword')
    <meta name="keywords"
        content="View Status, Bill Status">
@endsection

@section('mainsection')


<section class="page_header_default pg_bg_cover alignment_center">
    <div class="bakground_cover" style="background-image:url({{ asset('assets-front/images/ecore/status/view-status.webp') }})"></div>
    <div class="page_header_content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title">
                            <span class="main_tit">View Status</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 vankine">
                    <ul class="breadcrumb m-auto">
                        <li> <a href="{{url('/')}}">Home</a> </li>
                        <li class="">View Status</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


    <div class="container pt-5">

        <div class="payment-info m-3" style="justify-content: center; align-items: center;">
            <div class="row gutter_30px clearfix">
                <h4>Please Submit Your Bill No Here & Get the Full Details:</h4>
                <form action="{{ route('support.status.fetched') }}" method="post">
                    @csrf
                    @if ($errors->has('bill_no'))
                        <span class="text-danger">{{ $errors->first('bill_no') }}</span>
                    @endif
                    <div class="col-lg-12 col-md-6 col-sm-12 column">
                        <p>Enter your last 3 digit of your bill no. Example: <strike> EC/23-24/JS/ </strike> <b><span
                                    style="color: rgb(3, 116, 237); ">001</span></b>
                        </p>
                        <div class="field-input">
                            <input type="text" name="bill_no" placeholder="Example: 001"
                                value="{{ app('request')->input('bill_no') }}">
                        </div>
                    </div>
                    @isset($error)
                        <div class="text-danger my-2">
                            {{ $error }}
                        </div>
                    @endisset
                    <div class="col-lg-12 col-md-12 col-sm-12 column"
                        style="display: flex;justify-content: center; align-items: center;">
                        <div class="field-input message-btn">
                            <button type="submit" class="theme_btn" style=" padding-right:20px; padding-left:20px">View
                                Status</button>
                        </div>
                    </div>
                    @if (app('request')->input('bill_no') != null)
                        <div class="col-lg-12 col-md-12 col-sm-12 column mt-3"
                            style="display: flex;justify-content: center; align-items: center;">
                            <div class="field-input message-btn">
                                <a href="" class="btn btn-warning"
                                    style=" padding-right:20px; padding-left:20px">Reset</a>
                            </div>
                        </div>
                    @endif

                </form>



            </div>


        </div>







        {{-- <div class="row">
            <div class="col-6">

                <input type="text" name="bill_no" id="bill_no">
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-danger">View Status</button>
            </div>

        </div> --}}


        @php
            $currentYear = date('y');
            $previousYear = $currentYear - 1;
        @endphp



        @if (app('request')->input('bill_no') != null)
            @if (app('request')->input('bill_no') == $bill_no?->bill_no)
                <div id="payment" class="woocommerce-checkout-payment">
                    <div class="row">
                        <div class="col-6">

                            <h4 class="text-center">Status of Bill No. <span
                                    class="text-danger">EC/{{ $previousYear }}-{{ $currentYear }}/JS/{{ $bill_no?->bill_no }}</span>
                        </div>

                        <div class="col-6">
                            <h4 class="text-center">Last Updated On
                                <span class="text-danger">
                                    {{ \Carbon\Carbon::parse($bill_no?->updated_at)->format('d M, Y') }}
                                </span>
                            </h4>



                        </div>


                    </div>
                    </h4>
                    {{-- <h4 class="text-center">Service Created On
                        {{ \Carbon\Carbon::parse($bill_no?->created_at)->format('d M, Y') }}
                    </h4> --}}


                    <ul class="accordion-box">

                        <li class="accordion block active-block">
                            <div class="acc-btn active">
                                <div class="icon-outer"><i class="fa fa-angle-down"></i></div>
                                <h4>Overall Status</h4>
                            </div>
                            <div class="acc-content current" style="display: block;">
                                <div class="payment-info">

                                    <div class="row gutter_30px clearfix mr_top_20">

                                        <div class="col-lg-5 col-md-6 col-sm-12 column">
                                            <label for="">Current Status</label>

                                            @if ($bill_no?->current_status == 'Ready')
                                                <button type="button" class="btn btn-success"
                                                    style="background-color: rgb(0, 193, 51);border:none; padding-left:55px;padding-right:55px;">Ready</button>
                                            @endif

                                            @if ($bill_no?->current_status == 'Pending')
                                                <button type="button" class="btn btn-warning"
                                                    style="border:none; padding-left:55px;padding-right:55px;">Pending</button>
                                            @endif

                                            @if ($bill_no?->current_status == 'Not Repaired')
                                                <button type="button" class="btn btn-danger"
                                                    style="background-color: rgb(241, 0, 0);border:none; padding-left:55px;padding-right:55px;">Not
                                                    Repaired</button>
                                            @endif



                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column pb-3">
                                            <label for="">Delivery Status</label>

                                            @if ($bill_no?->delivery_status == 'Yes')
                                                <button type="button" class="btn btn-success"
                                                    style="background-color: rgb(0, 193, 51);border:none; padding-left:55px;padding-right:55px;">Delivered</button>
                                            @endif

                                            @if ($bill_no?->delivery_status == 'In Process')
                                                <button type="button" class="btn btn-warning"
                                                    style="border:none; padding-left:55px;padding-right:55px;">Out for
                                                    Delivery</button>
                                            @endif

                                            @if ($bill_no?->delivery_status == 'No')
                                                <button type="button" class="btn btn-danger"
                                                    style="background-color: rgb(241, 0, 0);border:none; padding-left:55px;padding-right:55px;">Not
                                                    Delivered</button>
                                            @endif
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-12 column ">
                                            <div class="row">
                                                <div class="col-6">


                                                    <a id="dw-pdf-i"
                                                        href="{{ route('download.pdf', ['bill_no' => $bill_no]) }}">
                                                        <span class="text-center ml-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="50"
                                                                width="50"
                                                                viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                                <path fill="#25db00"
                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM216 232V334.1l31-31c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-72 72c-9.4 9.4-24.6 9.4-33.9 0l-72-72c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l31 31V232c0-13.3 10.7-24 24-24s24 10.7 24 24z" />
                                                            </svg>
                                                        </span>

                                                        <p class="text-center align-item-center justify-content-center">
                                                            {{-- Download <br>PDF</p> --}}
                                                    </a>




                                                </div>
                                                <div class="col-6">
                                                    <span>
                                                        {{-- {!! QrCode::size(80)->generate(route('download.pdf', ['bill_no' => $bill_no])) !!} --}}

                                                        <img src="{{ asset('assets-front/images/ecore/status/QrCode.jpeg') }}"
                                                            alt="upiqr" srcset="">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>






                        <li class="accordion block active-block">
                            <div class="acc-btn active">
                                <div class="icon-outer"><i class="fa fa-angle-down"></i></div>
                                <h4>Customer Information</h4>
                            </div>
                            <div class="acc-content current" style="display: block;">
                                <div class="payment-info">
                                    <div class="row gutter_30px clearfix mr_top_20">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <label for="">Name</label>

                                            <div class="field-input">
                                                <input type="text" name="name" placeholder="Name on the Card"
                                                    required="" value="{{ $bill_no?->name }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <label for="">Mobile No.</label>

                                            <div class="field-input">
                                                <input type="text" name="number" value="{{ $bill_no?->mobile }}"
                                                    placeholder="Card Number" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <label for="">Email</label>

                                            <div class="field-input">
                                                <input type="text" name="number" value="{{ $bill_no?->email }}"
                                                    placeholder="Card Number" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <label for="">Address</label>

                                            <div class="field-input">
                                                <input type="text" name="number" value="{{ $bill_no?->address }}"
                                                    placeholder="Card Number" readonly>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><i class="fa fa-angle-down"></i></div>
                                <h4>Product Information</h4>
                            </div>
                            <div class="acc-content" style="display: none;">
                                <div class="payment-info">
                                    <div class="row mr_top_20 gutter_30px clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <label for="">Product Type</label>

                                            <div class="field-input">
                                                <input type="text" name="number" value="{{ $bill_no?->item_type }}"
                                                    placeholder="Card Number" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <label for="">Product No. / Model No.</label>

                                            <div class="field-input">
                                                <input type="text" name="number" value="{{ $bill_no?->device_no }}"
                                                    placeholder="Card Number" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-12 column">
                                            <label for="">Type of the Service</label>

                                            <div class="field-input">
                                                <input type="text" name="number"
                                                    value="{{ $bill_no?->service_type }}" placeholder="Card Number"
                                                    readonly>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><i class="fa fa-angle-down"></i></div>
                                <h4>Service Information</h4>
                            </div>
                            <div class="acc-content" style="display: none;">
                                <div class="payment-info">
                                    <div class="row mr_top_20 gutter_30px clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <label for="">Device Problem</label>

                                            <div class="field-input">
                                                <textarea type="text" name="number" value="" placeholder="Card Number" readonly>{{ $bill_no?->problem }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <label for="">Service Details</label>

                                            <div class="field-input">
                                                <textarea type="text" name="number" value="" placeholder="Card Number" readonly>{{ $bill_no?->details }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-12 column">
                                            <label for="">Service Charge / Amount</label>

                                            <div class="field-input">
                                                <input type="text" name="number" value="{{ $bill_no?->amount }}"
                                                    placeholder="Card Number" readonly>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            @endif


        @endif


    </div>
@endsection
