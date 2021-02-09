@extends('layouts.hdota')

@section('content')

<div class="content" style="padding-top: 100px;">
     <div class="container" style="margin-top:20px !important;">
@foreach ($posts as $post)
       <div class="col-md-4">
         <div class="caption thumbnail" style="padding:15px;">
           <h3 style="margin-top:0px !important;">{{$post->title}}</h3>

                 <!--@if ($post->image)
                 <img src="{{voyager::image($post->image)}}";>
                 @endif-->

         </div>
       </div>
@endforeach

   </div>
   <center>
   <nav aria-label="Page navigation">

   </nav>
 </center>
 </div>
   @endsection
