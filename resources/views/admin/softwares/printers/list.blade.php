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
                            <li class="breadcrumb-item" aria-current="page">Printers</li>
                            {{-- <li class="breadcrumb-item" aria-current="page">OS</li> --}}
                            <li class="breadcrumb-item active" aria-current="page">Show</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{ route('support.printers.create') }}" type="button" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                @include('admin.external.message')
                <div class="col">

                    <h6 class="mb-0 text-uppercase">Printers</h6>
                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <table class="table mb-0">
                                <thead class="table-info">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Bits</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Version</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($printers->isNotEmpty())
                                        @foreach ($printers as $printer)
                                            <tr>
                                                <th scope="row">{{ $printer->id }}</th>
                                                <td>{{ $printer->name }}</td>
                                                <td>{{ $printer->bits }}</td>
                                                <td>{{ $printer->brand }}</td>
                                                <td>{{ $printer->version }}</td>
                                                <td class="">

                                                    <a href="{{ route('support.printers.edit', $printer->id) }}"
                                                        class="pr-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="18"
                                                            width="18"
                                                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                            <path fill="#26dd00"
                                                                d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                                        </svg>
                                                    </a>
                                                    <a href="" onclick="deleteprinter({{ $printer->id }})"
                                                        class="pl-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="18"
                                                            width="18"
                                                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                            <path fill="#ff0000"
                                                                d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                                        </svg>
                                                    </a>

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
@section('customJs')
    <script>
        function deleteprinter(id) {
            var url = '{{ route('support.printers.delete', 'ID') }}';
            var newUrl = url.replace("ID", id);

            if (confirm("Are You Sure to Delete?")) {

                $.ajax({
                    url: newUrl,
                    type: 'delete',
                    data: {},
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {

                        if (response["status"]) {
                            window.location.href = "{{ route('support.printers.list') }}";
                        }
                    }
                });

            }

        }
    </script>
@endsection
