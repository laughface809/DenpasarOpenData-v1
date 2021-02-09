@extends('layouts.hdota')

@section('content')
<div class="content" style="padding-top: 100px;">
	    <div class="container" style="color: black;">
        <h2>{{$post->title}}</h2>
				<script type='text/javascript' src='https://eu-west-1a.online.tableau.com/javascripts/api/viz_v1.js'></script>
          <p>{!!$post->body!!}</p>
            <br/>
          <p><a href="#"><img style="max-height: 58px" src="https://www.ovpm.org/wp-content/themes/ovpm/lib/images/OVPM_LOGO_EN_RGB.svg"></a><br/>As a member of the Organization of World Heritage Cities (OWHC)</p>
      </div>
</div>

@endsection
