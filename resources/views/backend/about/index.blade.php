@extends('backend.layout')
@section('title', 'About')
@section('backend_content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Hospital Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('admin_about.index') }}">About</a></li>
                            <li class="breadcrumb-item active">Add Hospital Details</li>
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
                                <h3 class="card-title">Update Hospital Details</h3>
                                @if (!isset($about))
                                    <a href="{{ route('admin_about.create') }}" class="btn btn-danger float-right"> <i
                                            class="fa fa-plus"></i> Add Hospital Detail</a>
                                @endif
                            </div>

                            <!-- /.card-header -->
                            <!-- form start -->

                            @isset($about)
                                <form action="{{ route('admin_about.update', $about->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Organization Logo</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">

                                                            <input type="file" id="imageInput" class="custom-file-input"
                                                                name="logo" accept="image/*" onchange="previewImage(this)">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 mb-2">
                                                <div class="form-group">
                                                    <label for="exampleInputFile"></label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            @isset($about->logo)
                                                                
                                                            @endisset
                                                            <img id="imagePreview" src="#" alt="Image Preview"
                                                                style="display: none; max-width: 20%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Address</label>
                                                    <input type="text" class="form-control" name="address"
                                                        value="{{ $about->address }}" placeholder="Enter hospital's address">
                                                    @error('address')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Customer Support Number</label>
                                                    <input type="text" class="form-control" name="phone"
                                                        value="{{ $about->contact_no }}"
                                                        placeholder="Enter customer support number">
                                                    @error('phone')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Video Link</label>
                                                    <input type="text" class="form-control" name="video_link"
                                                        value="{{ $about->video_link }}" placeholder="Enter video link">
                                                    @error('video_link')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea class="textarea" placeholder="Place some text here" name="description"
                                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $about->description }}</textarea>
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Opening Time Description</label>
                                            <textarea class="textarea" placeholder="Place some text here" name="opening_time"
                                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $about->opening_time }}</textarea>
                                            @error('opening_time')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
        function previewImage(input) {
            var preview = document.getElementById('imagePreview');
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
    </script>
@endsection
