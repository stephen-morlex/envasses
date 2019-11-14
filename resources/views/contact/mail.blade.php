@extends('layouts.app')
@section('content')
<section class="section bg-gray text-center">
    <h2 class="mb-20">Get a Quote</h2>
    <h2>Hello Admin,</h2>
    <p>You received an email from : {{$name}}</p>
    <p>Here are the details:</p>
    <p>Name: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Message: {{ $user_message }}</p>
    <p>Message: {{ $phone }}</p>
    <p>Thank You</p>
  </section>
@endsection

