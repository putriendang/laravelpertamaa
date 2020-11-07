@extends('layouts.app')

@section('title','friends')

@section('content')
<form action="/friends/store" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp">
  @error('nama')
  <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Telpon</label>
    <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1">
    @error('no_tlp')
    <div class="alert alert-danger">{{ $messange }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="exampleInputPassword1">
    @error('alamat')
  <div class="alert alert-danger">{{ $messange }}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
  
  

