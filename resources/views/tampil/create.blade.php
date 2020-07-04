@extends('master')

@section('content')
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.create {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.create:hover {
  opacity: 1;
}

</style>

<form action="/pertanyaan1" method="POST">
@csrf
  <div class="container">
    <h1>Ask anyting</h1>
    <p>Please fill in this form to Ask your question.</p>
    <hr>

    <label for="judul"><b>Title</b></label>
    <input type="text" placeholder="Enter judul" name="judul" id="judul" required>

    <label for="isi"><b>Question</b></label>
    <input type="text" placeholder="Enter question" name="isi" id="isi" required>

    <hr>
    <button type="submit" class="create">Send Question</button>
  </div>
  
</form>

@endsection