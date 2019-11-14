
<header id="header" class="header_areaa">
    <nav class="navbar extended">
        <div class="top-bar gray-wrapper">
            <div class="container flex-it">
                <div class="align-left moto_titlel">
                    <h5><a href="/">ENVASSES ENVIRONMENTAL AND CONSERVATION CONSULTANTS</a></h5>
                </div>

                <div class="align-right text-right">
                    <ul class="icon-list list-inline mb-0">
                        <li><i class="fa fa-phone"></i> +254 722 347155</li>
                        <li>
                            <i class="fa fa-envelope"></i> <a class="nocolor"
                                href="mailto: info@envasses.org">info@envasses.org</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="navbar-header flex-it">
                <div class="navbar-brand align-left">
                    <a href="/"><img alt="images" src="{{ asset('images/envases.gif') }}"></a>
                </div>

                <div class="align-right text-right">
                    <ul class="icon-list list-inline mb-0">
                        <li class="text-left">
                            <div class="feature feature-xs">
                                <span class="icon icon-color icon-s"><i class="flaticon-placeholder-outline"></i></span>
                                <h6 class="mb-0">Ralli House Building, 1st Floor. <br>P. O Box 2013 - 80100
                                    Mombasa, Kenya.</h6>
                            </div>
                        </li>

                        <!-- <li class="text-left">
                                <div class="feature feature-xs">
                                    <span class="icon icon-color icon-s"><i class="flaticon-time"></i></span>
                                    <h6 class="mb-0"> 09 am to 08 pm <br />Monday - Saturday</h6>
                                </div>
                            </li> -->
                    </ul>
                </div>
                <div class="nav-bars-wrapper">
                    <div class="nav-bars-inner">
                        <div class="nav-bars" data-target=".navbar-collapse" data-toggle="collapse">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-wrapper dark-wrapper inverse-text">
            <div class="container flex-it">
                <div class="navbar-collapse collapse align-left">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li><a href="{{ route('about.index') }}">About</a>
                            <ul class="dropdown-menu">
                                @forelse ($aboutsHome as $a)
                                <li><a href="{{ route('about.show',$a->slug) }}">{{ $a->title }}</a></li>
                                @empty
                                <li><a href="#">Oops sorry!</a></li>
                                @endforelse

                            </ul>

                        </li>
                        <li><a href="{{ route('services.index') }}">Services</a>
                            <ul class="dropdown-menu">
                                @forelse ($servicesHome as $s)
                                <li><a href="{{ route('services.show',$s->slug) }}">{{ $s->title }}</a></li>
                                @empty
                                <li><a href="{{ route('services.show',$s->slug) }}">Oops sorry!</a></li>
                                @endforelse
                            </ul>
                        </li>
                        <li><a href="{{ route('projects.index') }}">Projects</a>
                        </li>
                        <li><a href="{{ route('contact.index') }}">Contacts </a></li>
                    </ul>
                </div>

                <div class="navbar-other">
                    <div class="align-right text-right">
                        <ul class="social social-color social-s">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header><!-- /header -->
