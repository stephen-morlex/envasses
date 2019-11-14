@extends('layouts.app')

@section('content')

    <div class="service_details_Area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="service_details_left">
                        <div class="service_item_single_widget">
                            <h4 class="service_list_title">Our Services</h4>
                            <div class="services_list">
                                <ul>
                                  @foreach ($servicesHome as $s)
                                       <li><a href="{{ route('services.show',$s->slug) }}"><i class="fa fa-play"></i> {{ $s->title }}</a></li>
                                  @endforeach

                                </ul>
                            </div>
                        </div><!-- service_item_single_widget -->
                    </div><!-- service_details_left -->
                </div><!-- col-md-3 -->

                <div class="col-md-9">
                    <div class="service_details_right">
                        {{--  <div class="image_fulwidth">
                            <img src="{{Voyager::image($service->image)}}" alt="images">
                        </div><!-- image_fulwidth -->  --}}

                        <div class="service_details_content para_default">
                            <h3>{{ $service->title }}</h3>
                            <p>{!! $service->body !!}</p>
                        </div><!-- service_details_content -->
                    </div><!-- service_details_right -->
                </div><!-- col-md-3 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- service_details_Area -->
@endsection
