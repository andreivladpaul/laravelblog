@extends('user/app')


@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Clean Blog')
@section('subheading','Frist Blog With Laravel')

@section('main-content')

<!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                @foreach ($posts as $post)

                <div class="post-preview">
                    <a href="{{('post') }}">
                        <h2 class="post-title">{{ $post['title'] }}</h2>
                        <h3 class="post-subtitle">{{ $post['subtitle'] }}</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on {{ $post['created_at'] }}
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                @endforeach

                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
            </div>
        </div>
    </div>



@endsection
