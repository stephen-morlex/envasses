@extends('layouts.app')

@section('content')

{{--  <div class="page_title_banner blog_grid_title_bg">
    <div class="page_title_banner_overlay"></div>
    <div class="container">
        <div class="page_title_banner_text text-center">
            <h2>Projects </h2>
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('projects.index') }}">projects</a></li>
            </ul>
        </div>
    </div>
    <!--container-->
</div><!-- page_title_banner -->  --}}

<div class="blog_page_area blog_page_area_respon">
    <div class="container">
        <div class="row">
            @forelse ($projects as $p)
            <div class="col-md-4 col-sm-6" data-aos="fade-up"
     data-aos-duration="3000">
                <div class="single_blog_item_area blog_grid_item para_default image_fulwidth text-left">
                    <a href="{{ route('projects.show',$p->slug) }}"><img src="{{Voyager::image($p->thumbnail('cropped'))}}" alt="images"></a>
                    <h3><a href="{{ route('projects.show',$p->slug) }}">{{ $p->title }}</a></h3>
                    <p class="text-left">{!! Str::limit($p->body,70) !!} <a href="{{ route('projects.show',$p->slug) }}">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i></a> </p>
                </div>
            </div><!-- col-md-4-->
            @empty
            <p>Oops sorry something went wrong!</p>
            @endforelse
        </div><!-- row -->
    </div><!-- container -->
</div><!-- blog_page_area -->
@endsection
