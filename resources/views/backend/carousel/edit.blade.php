@extends('backend.layout')
@section('title', 'Notice')
@section('backend_content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Carousel</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Update carousel</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="m-4">
            @if ($message = Session::get('success'))
                <div class="alert alert-info">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update carousel</h3>
                                <a href="{{ route('admin_carousel.create') }}" class="float-right btn btn-danger"><i class="fas fa-plus"></i> Add Carousel</a>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            @isset($carousel)
                                <form action="{{ route('admin_carousel.update', 1) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Home</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">

                                                            <img id="homeImagePreview"
                                                                src="/documents/carousels/{{ $carousel->home }}"
                                                                alt="Image Preview" height="100" width="150">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Update Home Carousel Image</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" id="imageInput"
                                                                onchange="homePreviewImage(this)" class="custom-file-input"
                                                                name="home_carousel">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">About</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <img id="aboutImagePreview"
                                                                src="/documents/carousels/{{ $carousel->about }}"
                                                                alt="Image Preview" height="100" width="150">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Update About Carousel Image</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                onchange="aboutPreviewImage(this)" name="about_carousel">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Service</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <img id="serviceImagePreview"
                                                                src="/documents/carousels/{{ $carousel->service }}"
                                                                alt="Image Preview" height="100" width="150">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Update Service Carousel Image</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                onchange="servicePreviewImage(this)" name="service_carousel">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Program</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <img id="programImagePreview"
                                                                src="/documents/carousels/{{ $carousel->program }}"
                                                                alt="Image Preview" height="100" width="150">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Update Program Carousel Image</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                name="program_carousel" onchange="programPreviewImage(this)">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Notice</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <img id="noticeImagePreview"
                                                                src="/documents/carousels/{{ $carousel->notice }}"
                                                                alt="Image Preview" height="100" width="150">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Update Notice Carousel Image</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                onchange="noticePreviewImage(this)" name="notice_carousel">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Contact</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <img id="contactImagePreview"
                                                                src="/documents/carousels/{{ $carousel->contact }}"
                                                                alt="Image Preview" height="100" width="150">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Update Contact Carousel Image</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                onchange="contactPreviewImage(this)" name="contact_carousel">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Gallery</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <img id="galleryImagePreview"
                                                                src="/documents/carousels/{{ $carousel->gallery }}"
                                                                alt="Image Preview" height="100" width="150">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Update Gallery Page Carousel</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                onchange="galleryPreviewImage(this)" name="gallery_carousel">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            @endisset

                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
@section('footer')
    <script>
        //Read home carousel image
        function homePreviewImage(input) {
            var preview = document.getElementById('homeImagePreview');
            var fileInput = input.files[0];
            if (fileInput) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };

                reader.readAsDataURL(fileInput);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
            }
        }

        function aboutPreviewImage(input) {
            var preview = document.getElementById('aboutImagePreview');
            var fileInput = input.files[0];
            if (fileInput) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                }
                reader.readAsDataURL(fileInput);
            } else {
                preview.src = "#";
                preview.style.display = "none";
            }
        }

        function servicePreviewImage(input) {
            var preview = document.getElementById('serviceImagePreview');
            var fileInput = input.files[0];
            if (fileInput) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                }
                reader.readAsDataURL(fileInput);
            } else {
                preview.src = "#";
                preview.style.display = "none";
            }
        }

        function programPreviewImage(input) {
            var preview = document.getElementById('programImagePreview');
            var fileInput = input.files[0];
            if (fileInput) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                }
                reader.readAsDataURL(fileInput);
            } else {
                preview.src = "#";
                preview.style.display = "none";
            }
        }

        function noticePreviewImage(input) {
            var preview = document.getElementById('noticeImagePreview');
            var fileInput = input.files[0];
            if (fileInput) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                }
                reader.readAsDataURL(fileInput);
            } else {
                preview.src = "#";
                preview.style.display = "none";
            }

        }

        function contactPreviewImage(input) {
            var preview = document.getElementById('contactImagePreview');
            var fileInput = input.files[0];
            if (fileInput) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                }
                reader.readAsDataURL(fileInput);
            } else {
                preview.src = "#";
                preview.style.display = "none";
            }

        }

        function galleryPreviewImage(input) {
            var preview = document.getElementById('galleryImagePreview');
            var fileInput = input.files[0];
            if (fileInput) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                }
                reader.readAsDataURL(fileInput);
            } else {
                preview.src = "#";
                preview.style.display = "none";
            }

        }
    </script>
@endsection
