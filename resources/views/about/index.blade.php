@extends('layouts.app')

@section('content')
{{--  <div class="page_title_banner not_found_title_bg">
    <div class="page_title_banner_overlay"></div>
    <div class="container">
        <div class="page_title_banner_text text-center">
            <h2>About Us</h2>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
    <!--container-->
</div>
<!--page_title_banner-->  --}}

<div class="about_page_tab_section_area">
    <div class="container">
        <div class="row">
            <div class="about_us_tab_area">
                <div class="tab_menu_s_p_two">
                    <div class="col-md-12">
                        <ul class="tab_button_service">
                            @forelse ($abouts as $key => $about)
                            <li role="presentation" class="ta_button_Bg2  {{ $key==0 ? 'active' : ''}}">
                                <a href="#{{ $about->slug }}" aria-controls="Freelancer" role="tab" data-toggle="tab">
                                    {{ $about->title }}</a>
                            </li>
                            @empty

                            @endforelse

                        </ul>
                    </div>

                    <div class="tab-content">
                        @forelse ($abouts as $key => $about)
                        <div role="tabpanel" class="tab-pane fade in  {{ $key==0 ? 'active' : ''}}"
                            id="{{ $about->slug }}">
                            <div class="row">
                                <div class="col-md-12">

                                        <div class="tab_text_ser para_default">
                                            <h3>{{ $about->title }}</h3>
                                            <p>{!! $about->body !!}</p>
                                        </div>

                                </div>
                            </div>
                        </div>

                        @empty

                        @endforelse

                    </div>
                </div>
            </div>
            <!--about_us_tab_area-->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- about_page_tab_section_area -->

@endsection
