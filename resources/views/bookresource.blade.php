<style>

    .container{
        background-color: white;
    }
      table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
}
    .button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1{background-color: lightblue; }
.button2{background-color: lightblue; }
</style>

@extends('layouts.app')
@section('content')
<div class="container">
<table style="width:100%">
 <thead>
    <tr style="color: black">
<th>Resource Brand</th>
<th>Resource Type</th>
 <th>Serial Number</th>
 <th>Status</th>
<th>Actions</th>
    </tr>
</thead>
<tbody style="color: black" >
@foreach ($res as $resource )
<tr>
<td>{{$resource->resource_brand}}</td>
<td>{{$resource->resource_type}}</td>
<td>{{$resource->resource_sn}}</td>
<td>{{$resource->status}}</td>
 <td>
    <button class="button button1" onclick="location.href='{{'pop/'.$resource->id}}'">Book Resource</a>
        <button class="button button2" onclick="location.href='{{'nev/'.$resource->id}}'">Return Resource</a>
</td>
</tr>
@endforeach
</tbody>
    </table>
</div>
@endsection
