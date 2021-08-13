@extends('layouts.base')
@section('title','Sub Categories')

@section('content')

<div class="col-md-8 offset-md-2">
    <h1 class="text-center text-info my-2">All Sub Categories</h1>
    <a href="{{route('subcats.create')}}" class="btn btn-primary btn-sm">Create + </a>
    <table class="table table-bordered mt-2">
        <thead>
            <tr class="bg-dark text-white">
                <th>No</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subcats as $subcat)
            <tr>
                <td>{{$subcat->id}}</td>
                <td>{{$subcat->name}}</td>
                <td><img src="{{url('/uploads/'.$subcat->image)}}" width="50px" height="50px"></td>
                <td>
                    <a href="{{route('subcats.edit',$subcat->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    <x-delete_btn action="{{route('subcats.destroy',$subcat->id)}}" />
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
