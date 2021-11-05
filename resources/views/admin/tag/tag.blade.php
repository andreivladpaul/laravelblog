@extends('admin/layouts/app')


 @section('main-section')
<div class="wrapper">
    @include('admin/layouts/header')
    @include('admin/layouts/sidebar')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="row">
          <div class="col-md-12">

            <div class="card card-outline card-info">
                <form role="form">
                    <div class="card-body">
                      <div class="form-group">
                          {{-- title --}}
                        <label for="tag">Tag title</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter tag">
                      </div>

                      {{-- slug --}}
                      <div class="form-group">
                        <label for="slug">Tag slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter slug">
                      </div>

                      <br>
                      <button type="submit" class="btn btn-primary">Submit</button>
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
