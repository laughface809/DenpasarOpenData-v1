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
            <form id="identik" action="update" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <label>Perangkat Daerah</label>
                <select class="custom-select" name="perangkat_daerah" form="identik">
                  <option selected>Pilih</option>

                  <option value="1">	Camat Denpasar Barat	</option>
                  <option value="2">	Camat Denpasar Timur	</option>
                  <option value="3">	Camat Denpasar Utara	</option>
                  <option value="4">	Camat Denpasar Selatan 	</option>
                  <option value="5">	Direktur RSUD Wangaya	</option>
                  <option value="6">	Direktur PDAM Kota Denpasar	</option>
                  <option value="7">	Direktur  PD Parkir Kota Denpasar	</option>
                  <option value="8">	Direktur PD Pasar Kota Denpasar	</option>
                  <option value="9">	Inspektorat Kota Denpasar	</option>
                  <option value="10">	Kepala Badan Perencanaan Pembangunan Kota Denpasar	</option>
                  <option value="11">	Kepala Badan Penelitian dan Pengembangan Kota Denpasar	</option>
                  <option value="12">	Kepala Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Kota Denpasar	</option>
                  <option value="13">	Kepala Badan Pendapatan Daerah Kota Denpasar	</option>
                  <option value="14">	Kepala Badan Pengelola Keuangan dan Aset Daerah Kota Denpasar	</option>
                  <option value="15">	Kepala Badan Kesatuan Bangsa dan Politik Kota Denpasar	</option>
                  <option value="16">	Kepala Badan Penanggulangan Bencana Daerah Kota Denpasar</option>
                  <option value="17">	Kepala Dinas Pendidikan, Kepemudaan dan Olahraga Kota Denpasar	</option>
                  <option value="18">	Kepala Dinas Kesehatan Kota Denpasar	</option>
                  <option value="19">	Kepala Dinas Pekerjaan Umum dan Penataan Ruang Kota Denpasar	</option>
                  <option value="20">	Kepala Dinas Perumahan, Kawasan Permukiman dan Pertanahan Kota Denpasar	</option>
                  <option value="21">	Kepala Dinas Lingkungan Hidup dan Kebersihan Kota Denpasar	</option>
                  <option value="22">	Kepala Deinas Kependudukan dan Pencataan Sipil Kota Denpasar	</option>
                  <option value="23">Kepala Dinas Perhubungan Kota Denpasar	</option>
                  <option value="24">	Kepala Dinas Pertanian Kota Denpasar	</option>
                  <option value="25">	Kepala Dinas Komunikasi, Informatika dan Statistik Kota Denpasar	</option>
                  <option value="26">	Kepala Dinas Tenaga Kerja dan Sertifikasi Kompetensi Kota Denpasar	</option>
                  <option value="27">	Kepala Dinas Kebudayaan Kota Denpasar	</option>
                  <option value="28">	Kepala Dinas Pariwisata Kota Denpasar	</option>
                  <option value="29">	Kepala Dinas Perindustrian dan Perdagangan Kota Denpasar</option>
                  <option value="30">	Kepala Dinas Koperasi, Usaha Mikro Kecil dan Menengah Kota Denpasar	</option>
                  <option value="31">	Kepala Satuan Polisi Pamong Praja Kota Denpasar	</option>
                  <option value="32">	Kepala Dinas Perpustakaan dan Kearsipan Kota Denpasar	</option>
                  <option value="33">	Kepala Pemberdayaan dan Perlindungan anak, Pengendalian Penduduk dan Keluarga Berencana Kota Denpasar	</option>
                  <option value="34">	Kepala Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Denpasar	</option>
                  <option value="35">	Kepala Dinas Pemberdayaan Masyarakat dan Desa Kota Denpasar	</option>
                  <option value="36">	Kepala Dinas Sosial Kota Denpasar	</option>
                  <option value="37">	Kepala Dinas Perikanan dan Ketahanan Pangan Kota Denpasar	</option>
                  <option value="38">	Kepala Bagian Pemerintahan dan Otonomi Daerah Setda Kota Denpasar	</option>
                  <option value="39">	Kepala Bagian Hukum dan Hak Asasi Manusia Setda Kota Denpasar	</option>
                  <option value="40">	Kepala Bagian Organisasi Setda Kota Denpasar	</option>
                  <option value="41">	Kepala Bagian Hubungan Masyarakat dan Protokol Setda Kota Denpasar	</option>
                  <option value="42">	Kepala Bagian Administrasi Pembangunan Setda Kota Denpasar	</option>
                  <option value="43">	Kepala Bagian Kerjasama Setda Kota Denpasar	</option>
                  <option value="44">	Kepala Bagian Perekonomian dan Sumber Daya Alam Setda Kota Denpasar	</option>
                  <option value="45">	Kepala Bagian Pengadaan Barang dan Jasa Setda Kota Denpasar	</option>
                  <option value="46">Kepala Bagian Umum Setda Kota Denpasar	</option>
                  <option value="47">	Sekretaris Daerah Kota Denpasar	</option>
                  <option value="48">	Sekretariat DPRD Kota Denpasar	</option>

                </select>
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" form="identik">
              </div>
              <div class="form-group">
                <label>Pangkat</label>
                <select class="custom-select" name="pangkat" form="identik">
                  <option selected>Pilih</option>
                  <option value="Pembina Utama">	Pembina Utama	</option>
                  <option value="Pembina Utama Muda">	Pembina Utama Muda </option>
                  <option value="Pembina Tingkat I">	Pembina Tingkat </option>
                  <option value="Pembina">	Pembina </option>
                  <option value="Penata Tingkat I">	Penata Tingkat </option>
                  <option value="Penata">	Penata </option>
                  <option value="Penata Muda Tingkat I">	Penata Muda Tingkat	</option>
                  <option value="Penata Muda">	Penata Muda </option>
                  <option value="Pengatur Tingkat I">	Pengatur Tingkat </option>
                  <option value="Pengatur">	Pengatur </option>
                  <option value="Pengatur Muda Tingkat I">	Pengatur Muda Tingkat I </option>
                  <option value="Pengatur Muda">	Pengatur Muda </option>
                  <option value="Juru Tingkat I">	Juru Tingkat I </option>
                  <option value="Juru">	Juru </option>
                  <option value="Juru Muda Tingkat I">	Juru Muda Tingkat I	</option>
                  <option value="Juru Muda">	Juru Muda	</option>
                </select>
              </div>
              <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" form="identik">
              </div>
              <div class="form-group">
                <label>NIP</label>
                <input type="text" name="NIP" class="form-control" placeholder="NIP" form="identik">
              </div>
              <div class="form-group">
                <label>NIK</label>
                <input type="text" name="NIK" class="form-control" placeholder="NIK" form="identik">
              </div>
              <div class="form-group">
                <!--label>Foto KTP</label-->
                <input type="hidden" value="1" name="foto_ktp" class="form-control" placeholder="Foto KTP" form="identik">
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
          <img src="http://1.bp.blogspot.com/-0Tp-YEKGBP0/T7dHzEbnSCI/AAAAAAAAGBc/gvotBJOBc1o/s1600/pancasila.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h1 class="card-title">Formulir</h1>
            <p class="card-text">Silahkan mulai untuk mengkonfirmasi data IDENTIK</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
              Mulai
            </button>
          </div>
        </div>
      </div>

      <!-- Button trigger modal -->




    </body>
  </center>

  </html>
</div>

@endsection
