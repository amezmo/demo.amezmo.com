@extends('layout')

@section('content')
<h2>Choose your file</h2>
<form action="/upload" enctype="multipart/form-data" method="post">
    @csrf
    <input type="file" name="user_avatar"/>
    <button type="submit">Submit</button>
</form>

@endsection