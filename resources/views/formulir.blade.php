@extends('layouts.hdota')

@section('content')
        <div class="content" style="padding-top: 200px !important;">
	    <style>
.t-center { text-align: center !important;}
.pd-5 { text-align: center !important; }
a { text-decoration: none !important; }
.content{ background: url('{{ asset('css/backhome.png') }}'); background-size:cover; }
.no-dec { color: black !important; padding:10px; }
</style>
<div class="container">
    <center>
    <div class="row">
      <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
    <h1 style="font-size:5rem;color:white;">PORTAL DATA DENPASAR</h1><br/></div>
    <div class="col-md-1"></div>
    <div class="col-md-10">
    <form id="dataset-search-form" class="search-form" method="get" data-module="select-switch" action="/dataset" style="padding-bottom: 0px !important; border-bottom: 0px !important;">
        <div class="input-group search-input-group">
            <input aria-label="Masukkan topik pencarian" id="field-giant-search" type="text" class="form-control input-lg" name="q" value="" autocomplete="off" placeholder="Mau cari data apa?">
            <span class="input-group-btn">
            <button class="btn btn-default btn-lg" type="submit" value="search">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </span>
        </div>
    </form>
    </div>
    <div class="col-md-1"></div>
    </div>
</div></div><br/>
<div class="container">
  <div class="wow fadeInRight" data-wow-delay="3s">
        <div class="col-md-1 col-xs-4 t-center">
            <a class='no-dec' href='http://dota/group/pemerintahan'><center>
            	<img class="pd-5" src="{{ asset('css/icon_government.png') }}" width="64"><br/>Pemerintahan</center>
            </a>
          </div>
          <div class="col-md-1 col-xs-4 t-center">
                  <a class='no-dec' href='http://dota/group/pendidikan'><center>
                    <img class="pd-5" src="{{ asset('css/icon_education.png') }}" width="64"><br/>Pendidikan</center>
                  </a>
          </div>
          <div class="col-md-1 col-xs-4 t-center">
                  <a class='no-dec' href='http://dota/group/kesehatan'><center>
                    <img class="pd-5" src="{{ asset('css/icon_health.png') }}" width="64"><br/>Kesehatan</center>
                  </a>
          </div>
          <div class="col-md-1 col-xs-4 t-center">
                  <a class='no-dec' href='http://dota/group/ekonomi'><center>
                    <img class="pd-5" src="{{ asset('css/icon_finance.png') }}" width="64"><br/>Ekonomi</center>
                  </a>
          </div>
	</div>
  <div class="wow fadeInUp" data-wow-delay="3s">
	<div class="col-md-1 col-xs-4 t-center">
        	<a class='no-dec' href='http://dota/group/demografi'><center>
        		<img class="pd-5" src="{{ asset('css/icon_population.png') }}" width="64"><br/>Demografi</center>
        	</a>
	</div>
	<div class="col-md-1 col-xs-4 t-center">
        	<a class='no-dec' href='http://dota/group/perkebunan'><center>
        		<img class="pd-5" src="{{ asset('css/icon_sprout.png') }}" width="64"><br/>Perkebunan</center>
        	</a>
	</div>
	<div class="col-md-1 col-xs-4 t-center">
                <a class='no-dec' href='http://dota/group/geografi'><center>
                        <img class="pd-5" src="{{ asset('css/icon_geography.png') }}" width="64"><br/>Geografi</center>
                </a>
	</div>
  <div class="col-md-1 col-xs-4 t-center">
                <a class='no-dec' href='http://dota/group/lingkungan'><center>
                        <img class="pd-5" src="{{ asset('css/lingkungan.png') }}" width="64"><br/>Lingkungan</center>
                </a>
	</div>
</div>
<div class="wow fadeInLeft" data-wow-delay="3s">
  <div class="col-md-1 col-xs-4 t-center">
                <a class='no-dec' href='http://dota/group/pariwisata_kebudayaan'><center>
                        <img class="pd-5" src="{{ asset('css/pariwisata_keb.png') }}" width="64"><br/>Pariwisata</center>
                </a>
	</div>
  <div class="col-md-1 col-xs-4 t-center">
                <a class='no-dec' href='http://dota/group/sosial'><center>
                        <img class="pd-5" src="{{ asset('css/sosial.png') }}" width="64"><br/>Sosial</center>
                </a>
	</div>
  <div class="col-md-1 col-xs-4 t-center">
                <a class='no-dec' href='http://dota/group/transportasi'><center>
                        <img class="pd-5" src="{{ asset('css/transportasi.png') }}" width="64"><br/>Transportasi</center>
                </a>
	</div>
	<div class="col-md-1 col-xs-4 t-center">
                <a class='no-dec' href='http://dota/group/ketenagakerjaan'><center>
                        <img class="pd-5" src="{{ asset('css/icon_work.png') }}" width="64"><br/>Ketenagakerjaan
                </a>
	</div>
</div>
	<div class="col-md-1 hidden-xs hidden-sm">
	    &nbsp;
	</div>
    </div>
  </center><br/>
  </body><hr class="style11">
    <!--fitur tambahan -->
    <div class="container";>
            <div class="row cari">
              <div class="wow fadeInUp" data-wow-delay="800ms">
              <div class="hidden-xs hidden-sm d-flex mobile col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-md-none d-xs-block d-sm-block" style="float: right;">
                <img src="{{ asset('css/data.png') }}" style="height:230px">
              </div>
              </div>
              <div class="wow fadeInRight" data-wow-delay="800ms">
                <div class="hidden-xs hidden-sm text col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-none d-md-block d-lg-block d-xl-block">
                  <h2>Mencari Data itu Mudah!</h2>
                  <p><span>Temukan data yang tersedia dengan mudah<br>dan cepat, kurang dari satu menit.</span><br></p>
                </div>
              </div>
              <div class="wow fadeInRight" data-wow-delay="800ms">
                <div class="col-sm-12 col-xs-12 hidden-md hidden-lg hidden-xl" style="text-align:left">
                  <img src="{{ asset('css/data.png') }}" style="height:230px">
                  <h2>Mencari Data itu Mudah!</h2>
                  <p><span>Temukan data yang tersedia dengan mudah<br>dan cepat, kurang dari satu menit.</span><br></p>
                </div>
              </div>

            </div>


            <div class="wow swing" data-wow-delay="800ms">
            <div class="row dokumentasi" style="text-align: center;margin-top: 40px;margin-bottom: 30px;">
                  <a target="_blank" href="https://drive.google.com/open?id=11Q0Wc6sW72_OoWi8NWXbpuNp8PUcEcNh"><i class="fas fa-play-circle fa-2x" style="font-size: 18px;margin-top: 2%;margin-bottom: 2%;"> caranya?</i></a>
            </div>
            </div>
            <div class="row dukung">
              <div class="wow fadeInUp" data-wow-delay="800ms">
                <div class="hidden-xs hidden-sm d-flex mobile col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-md-none d-lg-none d-xl-none d-xs-block d-sm-block">
                    <img src="{{ asset('css/data5.png') }}" style="height:230px;float:right">
                </div>
              </div>
              <div class="wow fadeInLeft" data-wow-delay="800ms">
                <div class="hidden-xs hidden-sm text col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-none d-md-block d-lg-block d-xl-block">
                <h2>Dukungan Untuk Developer</h2>
                <p>Bagi kamu penggiat teknologi informasi, kami<br>memberikan dukungan berbagi pakai data secara<br>mudah dalam bentuk <i>services</i>.</p>
                </div>
              </div>

              <div class="wow fadeInLeft" data-wow-delay="800ms">
                <div class="col-sm-12 col-xs-12 hidden-md hidden-lg hidden-xl" style="text-align:right">
                  <img src="{{ asset('css/data5.png') }}" style="height:230px;">
                <h2>Dukungan Untuk Developer</h2>
                <p>Bagi kamu penggiat teknologi informasi, kami<br>memberikan dukungan berbagi pakai data secara<br>mudah dalam bentuk <i>services</i>.</p>
                </div>
            </div>
            </div>
          </div>

@endsection
