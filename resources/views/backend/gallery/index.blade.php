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
                        <h1>Gallery</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
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
            @if ($message = Session::get('deleted'))
                <div class="alert alert-danger">
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
                                <h3 class="card-title">Add Gallery</h3>
                                <a href="{{ route('admin_gallery.create') }}" class="float-right btn btn-danger"><i
                                        class="fas fa-plus"></i> Add Gallery</a>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <div class="card-body">
                                <div class="row">

                                    @foreach ($data as $key => $value)
                                        @php
                                            $record = explode('|', $value->images);
                                        @endphp
                                        @foreach ($record as $image)
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <a href=""><img src="/documents/gallery/{{ $image }}"
                                                            height="250" width="250" class="rounded" width="200"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach




                                </div>

                            </div>


                        </div>
                        <!-- /.card-body -->


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
