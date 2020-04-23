@extends('layout')

@section('content')

<div class="alert alert-success">
    Your file has been uploaded, check out the link below
</div>

<a href="{{ $fileLink }}">{{ $fileLink }}</a>
@endsection