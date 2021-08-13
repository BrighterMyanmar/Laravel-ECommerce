@extends('layouts.base')
@section('title','Edit Sub Category')

@section('content')

<div class="col-md-6 offset-md-3 my-5">
    <h1 class="text-center text-info">Edit Sub Category</h1>
    <form method="post" action="{{route('subcats.update',$subcat->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-input name="name" :value="$subcat->name"/>
        <x-select :lists="$cats" name="cat_id" cn="Category" :oldcat="$subcat->cat_id"/>
        <p>Old Image</p>
        <img src="{{url('/uploads',$subcat->image)}}" width="50px" height="50px">
        <x-file :single="true" />
        <x-submit_cancle yes="update" />
    </form>
</div

@endsection