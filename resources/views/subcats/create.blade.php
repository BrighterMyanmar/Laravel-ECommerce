@extends('layouts.base')
@section('title','Create Sub Category')

@section('content')

<div class="col-md-6 offset-md-3 my-5">
    <h1 class="text-center text-info">Create Sub Category</h1>
    <form method="post" action="{{route('subcats.store')}}" enctype="multipart/form-data">
        @csrf
        <x-input name="name"/>
        <x-select :lists="$cats" name="cat_id" cn="Category"/>
        <x-file :single="true" />
        <x-submit_cancle yes="create" />
    </form>
</div>

@endsection
