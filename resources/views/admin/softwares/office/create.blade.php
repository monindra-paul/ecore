@extends('admin.layout.app')
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Softwares & Drivers</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item " aria-current="page">Microsoft</li>
                            <li class="breadcrumb-item " aria-current="page">MS Office</li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{ route('support.os.list') }}" type="button" class="btn btn-primary">List</a>

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
                                <h5 class="mb-0 text-danger">Create MS Office Link</h5>
                            </div>
                            <hr>
                            <form class="row g-3" action="{{ route('support.office.store') }}" method="post">
                                @csrf
                                <div class="col-md-12">

                                    <label for="name" class="form-label">MS Office Name</label>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <div class="input-group">
                                        <span class="input-group-text bg-transparent">
                                            <i class='bx bxs-user'></i>
                                        </span>
                                        <input type="text" class="form-control border-start-0" id="name"
                                            name="name" placeholder="MS Office name" />
                                    </div>
                                </div>

                                <div class="col-12">

                                    <label for="bits" class="form-label">Office Bits</label>
                                    @if ($errors->has('bits'))
                                        <span class="text-danger">{{ $errors->first('bits') }}</span>
                                    @endif
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-microphone'></i></span>
                                        <input type="text" class="form-control border-start-0" id="bits"
                                            name="bits" placeholder="Office Bits" />
                                    </div>
                                </div>
                                <div class="col-12">

                                    <label for="version" class="form-label">Version</label>
                                    @if ($errors->has('version'))
                                        <span class="text-danger">{{ $errors->first('version') }}</span>
                                    @endif
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-message'></i></span>
                                        <input type="text" class="form-control border-start-0" id="version"
                                            name="version" placeholder="Version" />
                                    </div>
                                </div>
                                <div class="col-12">

                                    <label for="link" class="form-label">Provide the Link</label>
                                    @if ($errors->has('link'))
                                        <span class="text-danger">{{ $errors->first('link') }}</span>
                                    @endif
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-lock'></i></span>
                                        <input type="text" class="form-control border-start-0" id="link"
                                            name="link" placeholder="Link" />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger px-5">Create MS Office</button>
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
