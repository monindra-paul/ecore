@extends('admin.layout.app')
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Bill Create</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item " aria-current="page">Bill</li>
                            {{-- <li class="breadcrumb-item " aria-current="page"></li> --}}
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{ route('bill.list') }}" type="button" class="btn btn-primary">List</a>

                    </div>
                </div>
            </div>
            <!--end breadcrumb-->


            <div class="row">


                <div class="col-12 col-xl-12">

                    <hr />
                    <div class="card border-top border-0 border-4 border-danger">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                                </div>
                                <h5 class="mb-0 text-danger">Create Bill Status</h5>
                            </div>
                            <hr>
                            <form class="row g-3" action="{{ route('bill.store') }}" method="post">
                                @csrf
                                <div class="col-md-6">

                                    <label for="bill_no" class="form-label">Bill No.</label>
                                    @if ($errors->has('bill_no'))
                                        <span class="text-danger">{{ $errors->first('bill_no') }}</span>
                                    @endif
                                    <div class="input-group">
                                        <span class="input-group-text bg-transparent">
                                            <i class='bx bxs-user'></i>
                                        </span>
                                        <input type="text" class="form-control border-start-0" id="name"
                                            name="bill_no" placeholder="Bill No." value="{{ old('bill_no') }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <label for="bill_date" class="form-label">Bill Date</label>
                                    @if ($errors->has('bill_date'))
                                        <span class="text-danger">{{ $errors->first('bill_date') }}</span>
                                    @endif
                                    <div class="mb-3">
                                        <input type="date" class="form-control datepicker" name="bill_date"
                                            value="{{ old('bill_date') }}" />
                                    </div>
                                </div>

                                <div class="col-6">

                                    <label for="name" class="form-label">Customer Name</label>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-microphone'></i></span>
                                        <input type="text" class="form-control border-start-0" id="name"
                                            name="name" placeholder="Customer Name" value="{{ old('name') }}" />
                                    </div>
                                </div>

                                <div class="col-6">

                                    <label for="mobile" class="form-label">Customer Mobile No.</label>
                                    @if ($errors->has('mobile'))
                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    @endif
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-microphone'></i></span>
                                        <input type="text" class="form-control border-start-0" id="mobile"
                                            name="mobile" placeholder="Customer Mobile No." value="{{ old('mobile') }}" />
                                    </div>
                                </div>

                                <div class="col-6">

                                    <label for="email" class="form-label">Customer Email</label>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-microphone'></i></span>
                                        <input type="text" class="form-control border-start-0" id="email"
                                            name="email" placeholder="Customer Email" value="{{ old('email') }}" />
                                    </div>
                                </div>

                                <div class="col-6">

                                    <label for="address" class="form-label">Customer Address</label>
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-microphone'></i></span>
                                        <input type="text" class="form-control border-start-0" id="address"
                                            name="address" placeholder="Customer Address"
                                            value="{{ old('address') }}" />
                                    </div>
                                </div>

                                <div class="col-6">

                                    <label for="service_type" class="form-label">Service Type.</label>
                                    @if ($errors->has('service_type'))
                                        <span class="text-danger">{{ $errors->first('service_type') }}</span>
                                    @endif
                                    <div class="input-group">
                                        <select class="form-select mb-3" aria-label="Default select example"
                                            name="service_type">
                                            <span class="input-group-text bg-transparent"><i
                                                    class='bx bxs-microphone'></i>
                                            </span>

                                            {{-- <option selected>Open this select menu</option> --}}
                                            <option value="Service">Service</option>
                                            <option value="Purchase">Purchase</option>
                                            <option value="Order">Order</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-6">

                                    <label for="item_type" class="form-label">Item Type.</label>
                                    @if ($errors->has('item_type'))
                                        <span class="text-danger">{{ $errors->first('item_type') }}</span>
                                    @endif
                                    <div class="input-group">
                                        <select class="form-select mb-3" aria-label="Default select example"
                                            name="item_type">
                                            <span class="input-group-text bg-transparent"><i
                                                    class='bx bxs-microphone'></i>
                                            </span>

                                            {{-- <option selected>Open this select menu</option> --}}
                                            <option value="Laptop">Laptop</option>
                                            <option value="Desktop">Desktop</option>
                                            <option value="Printer">Printer</option>
                                            <option value="CCTV">CCTV</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="device_no" class="form-label">Device/Model No.</label>
                                    @if ($errors->has('device_no'))
                                        <span class="text-danger">{{ $errors->first('device_no') }}</span>
                                    @endif
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-message'></i></span>
                                        <input type="text" class="form-control border-start-0" id="device_no"
                                            name="device_no" placeholder="Device No." value="{{ old('device_no') }}" />
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label for="problem" class="form-label">Device Problem</label>
                                    @if ($errors->has('problem'))
                                        <span class="text-danger">{{ $errors->first('problem') }}</span>
                                    @endif
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-message'></i></span>
                                        <textarea class="form-control border-start-0" name="problem"></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="details" class="form-label">Service Details</label>
                                    @if ($errors->has('details'))
                                        <span class="text-danger">{{ $errors->first('details') }}</span>
                                    @endif
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-message'></i></span>
                                        <textarea class="form-control border-start-0" name="details"></textarea>
                                    </div>
                                </div>


                                <div class="col-6">

                                    <label for="amount" class="form-label">Amount</label>
                                    @if ($errors->has('amount'))
                                        <span class="text-danger">{{ $errors->first('amount') }}</span>
                                    @endif
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-microphone'></i></span>
                                        <input type="text" class="form-control border-start-0" id="amount"
                                            name="amount" placeholder="Amount" value="{{ old('amount') }}" />
                                    </div>
                                </div>

                                <div class="col-6">

                                    <label for="current_status" class="form-label">Current Status</label>
                                    @if ($errors->has('current_status'))
                                        <span class="text-danger">{{ $errors->first('current_status') }}</span>
                                    @endif
                                    <div class="input-group">
                                        <select class="form-select mb-3" aria-label="Default select example"
                                            name="current_status">
                                            <span class="input-group-text bg-transparent"><i
                                                    class='bx bxs-microphone'></i>
                                            </span>

                                            {{-- <option selected>Open this select menu</option> --}}
                                            <option value="Pending">Pending</option>
                                            <option value="Ready">Ready</option>
                                            <option value="Not Repaired">Not Repaired</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-6">

                                    <label for="delivery_status" class="form-label">Delivery Status</label>
                                    @if ($errors->has('delivery_status'))
                                        <span class="text-danger">{{ $errors->first('delivery_status') }}</span>
                                    @endif
                                    <div class="input-group">
                                        <select class="form-select mb-3" aria-label="Default select example"
                                            name="delivery_status">
                                            <span class="input-group-text bg-transparent"><i
                                                    class='bx bxs-microphone'></i>
                                            </span>

                                            {{-- <option selected>Open this select menu</option> --}}
                                            <option value = "No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="In Process">In Process</option>
                                        </select>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger px-5">Create Status</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>




            </div>

        </div>
    </div>
    <!--end page wrapper -->
@endsection
