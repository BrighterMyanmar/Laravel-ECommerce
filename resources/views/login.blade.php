@extends('layouts.base')
@section('title','User Login')
@section('content')
<div class="col-md-6 offset-md-3 my-5">
    <h1 class="text-center">User Login</h1>
    <form method="post" action="{{route('user-login')}}">
        @csrf
        <x-input type="number" name="phone" />
        <x-input type="password" name="password" />
        <x-submit_cancle yes="login" no="cancle" />

    </form>
</div>
@endsection
