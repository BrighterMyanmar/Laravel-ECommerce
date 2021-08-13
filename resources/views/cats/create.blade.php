@extends('layouts.base')
@section('title','Category Create')
@section('content')

<div class="col-md-6 offset-md-3 my-5">
    <h1 class="text-center text-info">Create New Category</h1>
    <form method="post" action="{{route('cats.store')}}" enctype="multipart/form-data">
        @csrf
        <x-input name="name" />
        <x-file :single="true"/>
        <x-submit_cancle yes="create" />
    </form>
</div>

@endsection
