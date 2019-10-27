@extends('layout')

@section('content')

<form action="/upload" method="post">
    @csrf
    <input name="file" type="file" />
    <button type="submit">Submit</button>
</form>
@endsection