@extends('layouts.app')

@section('content')
   <div class="container">
                    <div class="row">
                        <div class="heading-title text-center">
                            <h3 class="text-uppercase p-top-30">Meet our Team </h3>
                            <p class="p-top-30 half-txt">Our team members are consist of more than seven people</p>
                        </div>
                       @forelse ($teams as $team)
                            <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="https://image.freepik.com/free-photo/happy-confident-female-professioanal-wearing-eyeglasses_74855-2256.jpg" alt="{{$team->name}}" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>Area of expertise</h4>
                                        {!! $team->bio !!}
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>{{$team->name}}</h5>
                                <span>{{$team->position}}</span>
                            </div>
                        </div>
                       @empty
                           <p>Sorry no data yet!</p>
                       @endforelse
                    </div>

                </div>
   
@endsection
