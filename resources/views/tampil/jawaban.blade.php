@extends('master')

@section('content')
<style>
a{
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 80%;
  opacity: 0.9;
}
</style>

<h2>Jawaban dari {{$pertanyaan->isi}}</h2>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">jawaban</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pertanyaan->jawaban as $jawaban=>$hasil)
    <tr>
      <th scope="row">{{$jawaban+$pertanyaan->firstitem}}</th>
      <td>{{$hasil->isi}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<center><a class="btn btn-primary" href="/answer/{id}" role="button">Tambah Jawaban</a>
</center>

@endsection