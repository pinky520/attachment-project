@extends('layouts.admin')

@section('content')
<div>
    <h1>Venue Booking Requests</h1>
    <table style="width:100%">

        <thead>
        <tr>
     <th>Venue Name</th>
     <th>Region</th>
     <th>Capacity</th>
     <th>Description</th>
     <th>Status</th>
     <th>Actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($students as $venue )
          <tr>
            <td>{{$venue->venue_name}}</td>
            <td>{{$venue->region}}</td>
            <td>{{$venue->capacity}}</td>
<td>{{$venue->Description}}</td>
            <td>{{$venue->status}}</td>
            <td>
                <a class='btn btn-primary' href="{{'delete/'.$venue->id}}">Delete</a>
                <a class='btn btn-primary' href="{{'ask/'.$venue->id}}">Approve</a>
                <a class='btn btn-primary' href="">Que</a>
            </td>
        </tr>
        </tbody>
        @endforeach

    </table>
</div>
</div>

@endsection
