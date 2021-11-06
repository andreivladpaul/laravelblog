@extends('admin/layouts/app')

@section('main-section')
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    {{-- breadcrumbs --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
<!-- Content Header (Page header) -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Categories</h3>
              </div>
              <div class="col-2 mx-3 mt-3">
                <a class=" btn btn-block btn-info" href="{{ route('category.create') }}">Add New </a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S. No</th>
                    <th>Category Name</th>
                    <th>Slug</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category['id'] }}</td>
                        <td> {{ $category['name'] }}</td>
                        <td>{{ $category['slug'] }}</td>
                        <td><a class="btn btn-block btn-warning py-2" href="#">Edit</a></td>
                        <td><a class="btn btn-block btn-danger py-2" href="#">Delete</a></td>
                      </tr>
                    @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S. No</th>
                    <th>Category Name</th>
                    <th>Slug</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
                </table>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>

</section>

<!-- Main content -->

<!-- /.content -->
</div>
@endsection
