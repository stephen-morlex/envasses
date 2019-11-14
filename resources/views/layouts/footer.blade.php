<footer class="footer_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer_widget">
                    <h4 class="widget_title">Our Contacts</h4>
                    <div class="footer_widget_content para_default">
                        <ul class="contact_info">
                            <li><span class="icon flaticon-phone-call"></span> +254 722 347155</li>
                            <li><span class="icon flaticon-contact"></span> info@envasses.org</li>
                            <li><span class="icon flaticon-placeholder-outline"></span>Ralli House Building, 1st Floor.
                                 P. O Box 2013 - 80100 Mombasa, Kenya.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_widget">
                    <h4 class="widget_title">About us</h4>
                    <div class="footer_widget_content para_default">
                        <ul>
 @forelse ($aboutsHome as $a)
                                <li><a href="{{ route('about.show',$a->slug) }}">{{ $a->title }}</a></li>
                                @empty
                                <li><a href="#">Oops sorry!</a></li>
                                @endforelse
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_widget">
                    <h4 class="widget_title">Our Services</h4>
                    <div class="footer_widget_content para_default">
                        <ul>
                            @forelse ($servicesHome as $s)
                                <li><a href="{{ route('services.show',$s->slug) }}">{{ $s->title }}</a></li>
                                @empty
                                <li><a href="{{ route('services.show',$s->slug) }}">Oops sorry!</a></li>
                                @endforelse
                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_widget">
                    <h4 class="widget_title">Newsletter</h4>
                    <ul class="footer_social_icon">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom text-center">
        <div class="container">
            <p>© Copyright 2019 <span>|</span> <a href="/"> ENVASSES CONSULTANTS</a> <span>|</span> All Rights Reserved
            </p>
        </div>
    </div>
</footer>
