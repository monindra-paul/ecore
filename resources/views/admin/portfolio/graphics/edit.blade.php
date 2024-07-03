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
                            <li class="breadcrumb-item " aria-current="page">Portfolio</li>
                            <li class="breadcrumb-item " aria-current="page">Graphics</li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{ route('portfolio.graphics.list') }}" type="button" class="btn btn-primary">List</a>

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
                                <h5 class="mb-0 text-danger">Create Website Portfolio</h5>
                            </div>
                            <hr>
                            <form class="row g-3" action="" method="" id="graphicsportfolio" name="graphicsportfolio">
                                @csrf
                                <div class="col-md-12">

                                    <label for="name" class="form-label">Graphics Name</label>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <div class="input-group">
                                        <span class="input-group-text bg-transparent">
                                            <i class='bx bxs-user'></i>
                                        </span>
                                        <input type="text" class="form-control border-start-0" id="name"
                                            name="name" placeholder="Graphics name" value="{{$graphicsportfolio->name}}" />
                                            <p></p>
                                    </div>
                                </div>

                              
                                <div class="col-12">

                                    <label for="bits" class="form-label">Graphics Category</label>
                                    {{-- @if ($errors->has('brand'))
                                        <span class="text-danger">{{ $errors->first('brand') }}</span>
                                    @endif --}}
                                    <div class="input-group">
                                        {{-- <span class="input-group-text bg-transparent"> --}}
                                            {{-- <i class='bx bxs-microphone'></i> --}}
                                        {{-- </span> --}}
                                        <select class="form-select mb-3" aria-label="Default select example" name="category">

                                            {{-- <option selected>Open this select menu</option> --}}

                                            <option {{ $graphicsportfolio->category == 'Logo' ? 'selected' : '' }} value="Logo">
                                                Logo</option>
                                            <option {{ $graphicsportfolio->category == 'Soacial Media Poster' ? 'selected' : '' }} value="Soacial Media Poster">Soacial Media Poster
                                            </option>
                                            <option {{ $graphicsportfolio->category == 'Printable Banner' ? 'selected' : '' }} value="Printable Banner">
                                                Printable Banner</option>
                                            <option {{ $graphicsportfolio->category == 'Youtube Thumbnail' ? 'selected' : '' }} value="Youtube Thumbnail">
                                                Youtube Thumbnail</option>
                                            <option {{ $graphicsportfolio->category == 'Brochure' ? 'selected' : '' }} value="Brochure">
                                                Brochure</option>
                                            <option {{ $graphicsportfolio->category == 'Leaftet' ? 'selected' : '' }} value="Leaftet">
                                                Leaftet</option>
                                            <option {{ $graphicsportfolio->category == 'Package Designing' ? 'selected' : '' }} value="Package Designing">
                                                Package Designing</option>
                                            <option {{ $graphicsportfolio->category == 'UI/UX' ? 'selected' : '' }}
                                                value="UI/UX">UI/UX</option>

                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                    <label for="upload" class="form-label">Upload the Image</label>
                                    @if ($errors->has('upload'))
                                        <span class="text-danger">{{ $errors->first('upload') }}</span>
                                    @endif
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-lock'></i></span>
                                        <input type="file" class="form-control border-start-0" id="upload"
                                            name="upload" placeholder="image" />
                                    </div>
                                </div> --}}





                                <div class="col-md-12">
                                    <input type="hidden" id="image_id" name="image_id" value="">
                                    <label for="Image">Image</label>
                                    <div id="image" class="dropzone dz-clickable" name="image">
                                        <div class="dz-message needsclick">    
                                            <br>Drop files here or click to upload.<br><br>                                            
                                        </div>
                                    </div>
                                    <div>
                                        <img width="250px" src="{{ asset('portfolio/graphics/'. $graphicsportfolio->image) }}" alt="" srcset="">
                                    </div>
                                </div>


                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger px-5">Submit Portfolio</button>
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


@section('customJs')
<script>


$("#graphicsportfolio").submit(function (event) {

event.preventDefault();
var element = $(this);
$("button[type=submit]").prop('disabled', true);
$.ajax({
    url: '{{route("portfolio.graphics.update",$graphicsportfolio->id)}}',
    type: 'put',
    data: element.serializeArray(),
    dataType: 'json',
    success: function (response) {

        if (response["status"] == true) {

            $("button[type=submit]").prop('disabled', false);
            window.location.href = "{{route('portfolio.graphics.list')}}";


            $("#name").removeClass('is-invalid')
                .siblings('p')
                .removeClass('invalid-feedback')
                .html(errors['name']);

            $("#slug").addClass('is-invalid')
                .siblings('p')
                .addClass('invalid-feedback')
                .html(errors['slug']);

        }
        else {

            var errors = response['errors'];

            if (errors['name']) {
                $("#name").addClass('is-invalid')
                    .siblings('p')
                    .addClass('invalid-feedback')
                    .html(errors['name']);
            }
            else {
                $("#name").removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html(errors['name']);

            }

            if (errors['link']) {
                $("#link").addClass('is-invalid')
                    .siblings('p')
                    .addClass('invalid-feedback')
                    .html(errors['link']);
            } else {
                $("#link").addClass('is-invalid')
                    .siblings('p')
                    .addClass('invalid-feedback')
                    .html(errors['link']);
            }

            if (errors['category']) {
                $("#slug").addClass('is-invalid')
                    .siblings('p')
                    .addClass('invalid-feedback')
                    .html(errors['category']);
            } else {
                $("#category").addClass('is-invalid')
                    .siblings('p')
                    .addClass('invalid-feedback')
                    .html(errors['category']);
            }
        }


    }, error: function (jqXHR, exception) {
        console.log("Something went wrong");
    }
})
});




        Dropzone.autoDiscover = false;    
            const dropzone = $("#image").dropzone({ 
            init: function() {
                this.on('addedfile', function(file) {
                    if (this.files.length > 1) {
                        this.removeFile(this.files[0]);
                    }
                });
            },
            url:  "{{route('temp-images.create')}}",
            maxFiles: 1,
            paramName: 'image',
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif,image/webp",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }, success: function(file, response){
                 $("#image_id").val(response.image_id);
                //console.log(response)
            }
        });
</script>
@endsection
