@extends('admin/layouts/app')

@section('main-section')
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Posts</li>
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
                <h3 class="card-title">Posts</h3>
              </div>
              <div class="col-2 mx-3 mt-3">
                <a class=" btn btn-block btn-info" href="{{ route('post.create') }}">Add New </a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S. No</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Slug</th>
                    <th> </th>
                    <th> </th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post['id'] }}</td>
                        <td> {{ $post['title'] }}</td>
                        <td> {{ $post['subtitle'] }}</td>
                        <td>{{ $post['slug'] }}</td>
                        <td><a class="btn btn-block btn-warning py-2" href="{{ route('post.edit',$post->id) }}">Edit</a></td>
                        <td>
                            <form id="{{ $post->id }}" method="POST" action="{{ route('post.destroy', $post->id) }}" >
                                @csrf
                                @method('delete')
                            </form>
                            <a class="btn btn-block btn-danger py-2" href="#"  onclick="event.preventDefault();document.getElementById('{{ $post->id }}').submit(); ">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S. No</th>
                    <th>Title</th>
                    <th>Subtitle</th>
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
