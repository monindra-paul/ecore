@php
    $currentYear = date('y');
    $previousYear = $currentYear - 1;
@endphp


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
                        <div class="col-lg-5 col-md-6 col-sm-12 column">
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
                        <div class="col-lg-2 col-md-12 col-sm-12 column">
                            <a href="{{ route('download.pdf', ['bill_no' => $bill_no]) }}" target="_blank">
                                <span class="text-center">
                                    <i class="fa-solid fa-file-arrow-down fa-bounce fa-2xl" style="color: #00d123;"></i>
                                </span>
                                {{-- <p>Download PDF</p> --}}
                            </a>
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
                                <input type="text" name="name" placeholder="Name on the Card" required=""
                                    value="{{ $bill_no?->name }}" readonly>
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
                                <input type="text" name="number" value="{{ $bill_no?->service_type }}"
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
