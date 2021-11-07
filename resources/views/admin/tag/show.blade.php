@extends('admin/layouts/app')

@section('main-section')
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tags</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Tags</h3>
                  </div>
                  <div class="col-2 mx-3 mt-3">
                    <a class=" btn btn-block btn-info" href="{{ route('tag.create') }}">Add New Tag</a>
                  </div>

                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>S. No</th>
                        <th>Tag Name</th>
                        <th>Slug</th>
                        <th> </th>
                        <th> </th>
                      </tr>
                      </thead>
                      <tbody>

                        @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag['id'] }}</td>
                            <td> {{ $tag['name'] }}</td>
                            <td>{{ $tag['slug'] }}</td>
                            <td>

                                <a class="btn btn-block btn-warning py-2"  href="{{ route('tag.edit',$tag->id) }}">Edit</a>
                            </td>
                            <td>
                                <form id="{{ $tag->id }}" method="POST" action="{{ route('tag.destroy', $tag->id) }}" >
                                    @csrf
                                    @method('delete')
                                </form>
                                <a class="btn btn-block btn-danger py-2" href="#"  onclick="event.preventDefault();document.getElementById('{{ $tag->id }}').submit(); ">Delete</a>
                            </td>
                          </tr>
                        @endforeach

                      </tbody>
                      <tfoot>
                      <tr>
                        <th>S. No</th>
                        <th>Tag Name</th>
                        <th>Slug</th>
                        <th> </th>
                        <th> </th>
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
<!-- /.content -->
</div>
@endsection

@section('footer-section')
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
@endsection
