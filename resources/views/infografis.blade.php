@extends('layouts.hdota')

@section('content')

<div class="content" style="padding-top: 100px;">
     <div class="container" style="margin-top:20px !important;">
@foreach ($posts as $post)
       <div class="col-md-4">
         <div class="wow fadeInUp" data-wow-delay="500ms">
         <div class="caption thumbnail" style="padding:0px;box-shadow: 2px 2px 2px 2px;text-align:center">
           <h3 style="margin-top:0px !important;">{{$post->title}}</h3>
           <!--photo-->
           <a href="{{voyager::image($post->image)}}" data-lightbox="image-1" data-title="{{$post->excerpt}}" >
             <img src="{{voyager::image($post->image)}}" width="400" height="400" alt=""/>
           </a>
           <p style="margin-bottom:0px !important;text-align: right;font-size: 12px;font-style: italic;font-family: initial;"> {{$post->author->name}} {{$post->created_at->format('d M Y')}}</p>
         </div>
       </div>
       </div>
@endforeach

   </div>
   <center>
     <div class="wow fadeInUp" data-wow-delay="500ms">
   <nav aria-label="Page navigation">
     <ul class="pagination justify-content-center">
       {!!$posts->links()!!}
     </ul>
   </nav>
 </div>
 </center>
 </div>
   @endsection
