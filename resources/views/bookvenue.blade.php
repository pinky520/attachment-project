<head>
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
}

        .container{
            padding: 5px;
            background-color: #ffffff;
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
</head>


@extends('layouts.app')
@section('content')

<div class="container">
    <table style="width:100%">

        <thead>
        <tr style="color: rgb(0, 0, 0)">
     <th>Venue Name</th>
     <th>Region</th>
     <th>Description</th>
     <th>Capacity</th>
     <th>Status</th>
     <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($ven as $venue )
          <tr style="color: black">
            <td>{{$venue->venue_name}}</td>
            <td>{{$venue->region}}</td>
            <td>{{$venue->Description}}</td>
            <td>{{$venue->capacity}}</td>
            <td>{{$venue->status}}</td>
            <td>
                <button class="button button1" onclick=" location.href='{{'pro/'.$venue->id}}'">Book venue</button>
                <button class="button button2" onclick="location.href='{{'con/'.$venue->id}}'">Lecture Completed</button>

            </td>
        </tr>
        </tbody>
        @endforeach

    </table>
</div>
@endsection
