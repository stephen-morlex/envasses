@extends('layouts.app')

@section('content')

<div class="blog_page_area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog_left_side_area">
                    <div class="blog_pic image_fulwidth">
                        <img src="{{Voyager::image($project->image)}}" alt="images">
                        {{--  <h4 class="date_position">25 JUNE 2017</h4>  --}}
                    </div>

                    <div class="blog_left_single_content blog_single_content para_default">
                        <h3>{{ $project->title }}</h3>
                        <p>{!! $project->body !!} </p>
                    </div>
                </div><!-- blog_left_side_area -->
            </div><!-- col-md-8 -->

            <div class="col-md-4">
                <div class="blog_right_side_area">
                    <div class="blog_right_widget">
                        <div class="blog_widget">
                            <h3 class="blog_widget_title">Other Projects</h3>
                            <ul>

                                @forelse ($projectsHome as $item)
                                <li><a href="{{ route('projects.show',$item->slug) }}">{{ $item->title }}</a></li>

                                @empty

                                @endforelse </ul>
                        </div>
                    </div><!-- blog_right_widget  -->
                </div>
            </div><!-- col-md-4 -->
        </div><!-- row -->


    </div><!-- container -->
</div><!-- blog_page_area -->
@endsection
