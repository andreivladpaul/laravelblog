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

            <form role="form" action="{{ route('category.update', $category->id) }}"  method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">
                  <div class="form-group">
                      {{-- title --}}
                    <label for="category">Category title</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}" id="name" placeholder="Enter category">
                  </div>

                  {{-- slug --}}
                  <div class="form-group">
                    <label for="slug">Category slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ $category->slug }}" id="slug" placeholder="Enter slug">
                  </div>

                  <br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class=" btn mx-3 btn-info" href="{{ route('category.index') }}">Back</a>
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