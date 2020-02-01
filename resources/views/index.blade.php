@extends('layout/main')

@section('title', 'test duluuu!')

@section('container')

<div class="container">
<form action="" method="post" class="container mt-3 ml-5 mr-4">

    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama">
    </div>

    <div class="form-group">
      <label for="lokasi">Lokasi</label>
      <input type="text" class="form-control" id="lokasi" name="lokasi">
    </div>

    <div class="form-group">
      <label for="tanggal">Tanggal</label>
      <input type="date" class="form-control" id="tanggal" name="tanggal">
    </div>
    
    <div class="form-group">
      <label for="keluhan">Keluhan</label>
      <textarea row="4" class="form-control" id="keluhan" name="keluhan"></textarea>
    </div>

    <div class="form-group">
      <input type="submit" class="btn btn-outline-dark mt-3">
    </div>
     
</form>
</div>
@endsection        
   
    