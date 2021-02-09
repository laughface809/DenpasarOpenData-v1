<title>Mulai Sesi</title>

@extends('layouts.app')

@section('content')
<div class="container">
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <style>
    h1  {
      font-family: 'Montserrat', sans-serif;
    }
    body{
      background-image: url("https://cdn.pixabay.com/photo/2018/02/18/20/29/computer-3163437_960_720.png");
    }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>

  <body>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Mohon Cek kembali sebelum Simpan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form id="identik" action="store" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <label>ID Sekolah</label>
                <input type="text" name="idsekolah" class="form-control" placeholder="ID Sekolah" form="identik">
              </div>
              <div class="form-group">
                <label>Nama Sekolah</label>
                <input type="text" name="namasekolah" class="form-control" placeholder="Nama Sekolah" form="identik">
              </div>
              <div class="form-group">
                <label>Nama Kepala Sekolah</label>
                <input type="text" name="namakepalasekolah" class="form-control" placeholder="Nama Kepala Sekolah" form="identik">
              </div>
              <div class="form-group">
                <label>Alamat Sekolah</label>
                <input type="text" name="alamatsekolah" class="form-control" placeholder="Alamat Sekolah" form="identik">
              </div>
              <div class="form-group">
                <label>Jumlah Murid</label>
                <input type="text" name="jumlahmurid" class="form-control" placeholder="Jumlah Murid" form="identik">
              </div>
              <div class="form-group">
                <label>Jumlah Guru</label>
                <input type="text" name="jumlahguru" class="form-control" placeholder="Jumlah Guru" form="identik">
              </div>
              <div class="form-group">
                <label>Tanggal Berdiri</label>
                <input type="date" name="tanggalberdiri" class="form-control" placeholder="Tanggal Berdiri" form="identik">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button form="identik" type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    {{-- End Add Modal --}}

    <!-- Modal -->

    <center>

      <div class="container">
        @if(count($errors) > 0)

        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $errors)
            <li>{{$errors}}</li>
            @endforeach
          </ul>
        </div>
        @endif

        @if(\Session::has('success'))
        <div class="alert alert-success">
          <p>{{\Session::get('success')}}</p>
        </div>
        @endif


        <div class="card" style="width: 18rem;">
          <img src="https://sahabatdalambelajar.files.wordpress.com/2016/11/logo-tutwuri-handayani-gambar-tutwuri-handayani-makna-tutwuri-hanayani-arti-tutwurihandayani-arti-tutwurihandayanipermen-mentri-pendidikan-dan-kebudayaan-nomor-6-tahun-2013.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h1 class="card-title">Formulir</h1>
            <p class="card-text">Silahkan mulai untuk input data Sekolah</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
              Mulai
            </button>
          </div>
        </div>

      </div>

      <!-- Button trigger modal -->

      <!--OOP -->
      <?php
      class judul{
        var $nama;
        var $warna;
        function Footer(){
          return "<br><br>oleh Bima";
        }
      }
      $judul = new judul();
      echo $judul->Footer();?>


    </body>

    </html>
  </div>

  @endsection
