@extends('layouts.app')

@section('content')
<div class="contact_page_get_start_area">
    <div class="container">
        <div class="row">
             @include('partials.message')
            <div class="col-md-12">
                <div class="make_an_appoinment_area get_start_areA">
                    <div class="col-md-12">
                        <h3 class="title_get_start text-center">Contact us</h3>
                    </div>
                    <form action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="name" placeholder="Your Name" type="text" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="email" placeholder="Your Email" type="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" name="phone" placeholder="Phone Number" type="text" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="send_me_ph text-left">
                                    <button class="submit_btn_quick_contact"
                                        onclick="window.location.href='http://template.helloxpart.com/consultancy/consultancy/contact1.php'"
                                        type="submit">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--row-->
    </div>
    <!--container-->
</div>
<!--contact_page_get_start_area-->
@endsection
