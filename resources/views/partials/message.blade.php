
  <!-- notify user of success sent or failure -->
@if(count($errors) >0)
  @foreach($errors->all() as $error)
   <div class="alert alert-danger" role="alert">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
   	  {{$error}}
   </div>
   @endforeach
@endif

   @if(session('success'))
       <div class="alert alert-success" role="alert">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
       	{{session('success')}}
       </div>
   @endif

   @if(session('error'))
       <div class="alert alert-danger" role="alert">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
       	{{session('error')}}
       </div>
   @endif
