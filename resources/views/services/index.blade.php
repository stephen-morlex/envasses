@extends('layouts.app')

@section('content')
<div class="blog_page_area blog_page_area_respon">
    <div class="container">
        <div class="row">
            @forelse ($services as $service)
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="3000">
                <div class="single_blog_item_area blog_grid_item para_default image_fulwidth text-left">
                    <a href="{{ route('services.show',$service->slug) }}"><img
                            src="{{Voyager::image($service->thumbnail('cropped'))}}" alt="images"></a>
                    <h3><a href="{{ route('services.show',$service->slug) }}">{{ $service->title }}</a></h3>
                    <p class="text-left">{!! Str::limit($service->body,75) !!}</p>
                </div>
            </div><!-- col-md-4-->
            @empty
            <p>Oops sorry something went wrong!</p>
            @endforelse
        </div><!-- row -->

    </div><!-- container -->
</div><!-- blog_page_area -->
@endsection
