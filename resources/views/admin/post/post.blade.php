@extends('admin/layouts/app')


 @section('main-section')
<div class="wrapper">
    @include('admin/layouts/header')
    @include('admin/layouts/sidebar')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="card card-outline card-info">

            @include('layouts.messages')
            <form role="form"  method="POST" action="{{ route('post.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        {{-- title --}}
                        <label for="title">Post title</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title" placeholder="Enter title">
                    </div>
                  {{-- subtitle --}}
                  <div class="form-group">
                    <label for="subtitle">Post subtitle</label>
                    <input type="text" name="subtitle" value="{{ old('subtitle') }}" class="form-control" id="subtitle" placeholder="Enter subtitle">
                  </div>
                  {{-- slug --}}
                  <div class="form-group">
                    <label for="slug">Post slug</label>
                    <input type="text" name="slug" value="{{ old('slug') }}" class="form-control" id="slug" placeholder="Enter slug">
                  </div>
                  {{-- img --}}
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image">Choose image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-check">
                    <input type="checkbox" name="status" value="{{ old('status') }}" class="form-check-input" id="status">
                    <label class="form-check-label" for="status">Publish</label>
                  </div>
                  {{-- text area --}}
                  <div class="card-body pad">
                    <div class="mb-3">
                      <textarea class="textarea"  name="body" value="{{ old('body') }}" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>

                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class=" btn mx-3 btn-info" href="{{ route('post.index') }}">Back</a>
                </div>
                <!-- /.card-body -->


              </form>

          <!-- /.card-header -->

        </div>
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>


</div>
@endsection

@section('footer-section')
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection
