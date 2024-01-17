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
                            <li class="breadcrumb-item" aria-current="page">Microsoft</li>
                            <li class="breadcrumb-item" aria-current="page">OS</li>
                            <li class="breadcrumb-item active" aria-current="page">Show</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{ route('support.os.create') }}" type="button" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                @include('admin.external.message')
                <div class="col">

                    <h6 class="mb-0 text-uppercase">Windows Operating System (OS)</h6>
                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <table class="table mb-0">
                                <thead class="table-info">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Bits</th>
                                        <th scope="col">Version</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($allos->isNotEmpty())
                                        @foreach ($allos as $os)
                                            <tr>
                                                <th scope="row">{{ $os->id }}</th>
                                                <td>{{ $os->name }}</td>
                                                <td>{{ $os->bits }}</td>
                                                <td>{{ $os->version }}</td>
                                                <td>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-delete text-primary">
                                                        <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
                                                        <line x1="18" y1="9" x2="12" y2="15">
                                                        </line>
                                                        <line x1="12" y1="9" x2="18" y2="15">
                                                        </line>
                                                    </svg>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end page wrapper -->
@endsection
