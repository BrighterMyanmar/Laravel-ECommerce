@extends('layouts.base')
@section('title','Category Create')
@section('content')

<div class="col-md-6 offset-md-3 my-5">
    <h1 class="text-center text-info">Create New Category</h1>
    <form method="post" action="{{route('cats.update',$cat->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-input name="name" :value="$cat->name"/>
        <p>Old Image</p>
        <img src="{{url("/uploads/",$cat->image)}}" width="50px" height="50px"/>
        <x-file :single="true"/>
        <x-submit_cancle yes="update" />
    </form>
</div>

@endsection
