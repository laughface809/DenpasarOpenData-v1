<title>Table Sekolah</title>

@extends('layouts.app')

@section('content')
<div class="container">
  <!DOCTYPE html>
  <html lang="en">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
</div>

<body>
<br>
  <div class="container" style="background: white;">
    <table class="w3-table">
      <tr>
        <th>ID Sekolah</th>
        <th>Nama Sekolah</th>
        <th>Nama Kepala Sekolah</th>
        <th>Alamat Sekolah</th>
        <th>Jumlah Murid</th>
        <th>Jumlah Guru</th>
        <th>Tanggal Berdiri</th>
        <th>Aksi</th>
      </tr>
      <tr>
        <td>1</td>
        <td>SD 4</td>
        <td>Dian</td>
        <td>Denpasar</td>
        <td>100</td>
        <td>20</td>
        <td>12/12/2020</td>
        <td>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
            edit
          </button>

        </td>
        <td>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
            hapus
          </button>

        </td>
      </tr>
    </table>
  </div>
@endsection
