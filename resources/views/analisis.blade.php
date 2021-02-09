@extends('layouts.hdota')

@section('content')

<div class="content" style="padding-top: 100px;">
     <div class="container" style="margin-top:20px !important;">
@foreach ($posts as $post)
       <div class="col-md-4">
         <div class="wow fadeInLeft" data-wow-delay="500ms">
         <div class="caption thumbnail" style="padding:15px;">
           <h3 style="margin-top:0px !important;">{{$post->title}}</h3>
                 <p>{{$post->excerpt}}</p>
                 <!--@if ($post->image)
                 <img src="{{voyager::image($post->image)}}";>
                 @endif-->
           <p style="margin-bottom:0px !important;"><a href="{{route('detail2', $post->slug)}}" class="btn btn-primary">Lihat Analisis</a></p>
         </div>
       </div>
       </div>
@endforeach

   </div>
   <center>
     <div class="wow fadeInLeft" data-wow-delay="500ms">
   <nav aria-label="Page navigation">
     <ul class="pagination justify-content-center">
       {!!$posts->links()!!}
     </ul>
   </nav>
 </div>
 </center>
 </div>
   @endsection
