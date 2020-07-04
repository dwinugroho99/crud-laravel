@extends('master')

@section('content')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 15px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

a{
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 80%;
  opacity: 0.9;
}
</style>


<table>
  <tr>
    <th>Judul</th>
    <th>Isi</th>
    <th>Created</th>
    <th>Update</th>
    <th>Action</th>
  </tr>
  
  @foreach($pertanyaan as $pertanyaan)
  <tr>
    <td>{{$pertanyaan->judul}}</td>
    <td>{{$pertanyaan->isi}}</td>
    <td>{{$pertanyaan->created_at}}</td>
    <td>{{$pertanyaan->updated_at}}</td>
    <td><a class="btn btn-success" href="/jawaban/{{$pertanyaan->id}}" role="button">Jawaban</a></td>
  </tr>
  @endforeach
</table>

<center><a class="btn btn-primary" href="/pertanyaan" role="button">Create</a>
</center>
@endsection