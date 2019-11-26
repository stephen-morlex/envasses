@extends('layouts.app')

@section('content')
<div class="blog_page_area blog_page_area_respon">
    <div class="container">
        <div class="row">
          <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Key Client Portfolio</th>
      </tr>
    </thead>
    <tbody>
     
       @forelse ($clients as $c)
        <tr>
            <td> <a href="{{$c->link}}">{{$c->name}}</a></td>
         </tr> 
       @empty
           <td> <a href="">No data available at the moment</a></td>
       @endforelse
     
    </tbody>
  </table>
</div>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- blog_page_area -->
@endsection
