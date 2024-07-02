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
                                <h5 class="mb-0 text-danger">Create Website Portfolio</h5>
                            </div>
                            <hr>
                            <form class="row g-3" action="" method="" id="websiteportfolio" name="websiteportfolio">
                               
                                <div class="col-md-12">

                                    <label for="name" class="form-label">Website Name</label>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <div class="input-group">
                                        <span class="input-group-text bg-transparent">
                                            <i class='bx bxs-user'></i>
                                        </span>
                                        <input type="text" class="form-control border-start-0" id="name"
                                            name="name" placeholder="Website name" />
                                            <p></p>
                                    </div>
                                </div>

                                <div class="col-12">

                                    <label for="link" class="form-label">Website Link</label>
                                    @if ($errors->has('link'))
                                        <span class="text-danger">{{ $errors->first('link') }}</span>
                                    @endif
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-microphone'></i></span>
                                        <input type="text" class="form-control border-start-0" id="link"
                                            name="link" placeholder="Website Link" />
                                            <p></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="category" class="form-label">Website Category</label>
                                    @if ($errors->has('category'))
                                        <span class="text-danger">{{ $errors->first('category') }}</span>
                                    @endif
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-message'></i></span>
                                        <input type="text" class="form-control border-start-0" id="category"
                                            name="category" placeholder="Website category" />
                                            <p></p>
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


$("#websiteportfolio").submit(function (event) {

event.preventDefault();
var element = $(this);
$("button[type=submit]").prop('disabled', true);
$.ajax({
    url: '{{route("portfolio.website.store")}}',
    type: 'get',
    data: element.serializeArray(),
    dataType: 'json',
    success: function (response) {

        if (response["status"] == true) {

            $("button[type=submit]").prop('disabled', false);
            window.location.href = "{{route('portfolio.website.list')}}";


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
