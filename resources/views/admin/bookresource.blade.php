<head>
    <style>
        table, th, td {
          border: 1px solid black;
        }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

@extends('layouts.admin')


@section('content')
<table style="width:100%">
    <thead>
<tr>
    <th>Resource Brand</th>
    <th>Resource Type</th>
    <th>Serial Number</th>
    <th>Status</th>
    <th>Actions</th>
</tr>
    </thead>
    <tbody>

    @foreach ($stud as $resource)
    <tr>
    <td>{{$resource->resource_brand}}</td>
    <td>{{$resource->resource_type}}</td>
    <td>{{$resource->resource_sn}}</td>
    <td>{{$resource->status}}</td>
    <td>
        <a class='btn btn-primary' href="{{'del/'.$resource->id}}">Delete</a>
        <a class='btn btn-primary' href="{{'app/'.$resource->id}}">Approve</a>
        <a class='btn btn-primary' href="">Que</a>
    </td>
    @endforeach

</tr>
    </tbody>
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(Session::has('message'))
<script>
    toastr.success("{{Session::get('message')}}");
</script>
    @endif
@endsection
