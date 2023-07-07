@extends('setting::layouts.master')

@section('title', 'Stream')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('stream.index') }}">Stream</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <form id="product-form" action="{{ route('stream.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button class="btn btn-primary">Update <i class="bi bi-check"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fb_img">Facebook Image <small>( 1920 x 1080 )</small></label>
                                                <input type="file" id="file-ip-1" accept="image/*" class="form-control-file border" value="{{ old('fb_img') }}" onchange="showPreview1(event);" name="fb_img">
                                                <img src="{{ asset('upload/images/stream/' . $stream->fb_img) }}" width="200px">
                                                @error('fb_img')
                                                        <p style="color: red">{{ $message }}</p>
                                                    @enderror
                                                <div class="preview mt-2">
                                                    <img src="" id="file-ip-1-preview" width="200px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fb_link">Facebook Link</label>
                                                <input type="text" class="form-control" name="fb_link" id="fb_link"
                                                    value="{{ $stream->fb_link }}" placeholder="Enter Link">
                                                @error('fb_link')
                                                    <p style="color: red">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="yt_img">Youtube Image <small>( 1920 x 1080 )</small></label>
                                                <input type="file" id="file-ip-2" accept="image/*" class="form-control-file border" value="{{ old('yt_img') }}" onchange="showPreview2(event);" name="yt_img">
                                                <img src="{{ asset('upload/images/stream/' . $stream->yt_img) }}" width="200px">
                                                @error('yt_img')
                                                        <p style="color: red">{{ $message }}</p>
                                                    @enderror
                                                <div class="preview mt-2">
                                                    <img src="" id="file-ip-2-preview" width="200px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="yt_link">Youtube Link</label>
                                                <input type="text" class="form-control" name="yt_link" id="yt_link"
                                                    value="{{ $stream->yt_link }}" placeholder="Enter Link">
                                                @error('yt_link')
                                                    <p style="color: red">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="col-md-12 text-center" style=" margin-top: 10px;margin-bottom: 10px;">
                                            <button type="submit" class="btn btn-primary">Update <i
                                                    class="bi bi-check"></i></button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </section>
    </div>

@endsection
@section('script')
    <!-- image preview -->
    <script type="text/javascript">
        function showPreview1(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
    <script type="text/javascript">
        function showPreview2(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-2-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
   
@endsection
