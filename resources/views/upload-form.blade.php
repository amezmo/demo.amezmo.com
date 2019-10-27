@extends('layout')

@section('content')

<form action="/upload" enctype="multipart/form-data"  method="post">
    @csrf
    <input type="file" name="file"/>
    <button type="submit">Submit</button>
</form>
@endsection