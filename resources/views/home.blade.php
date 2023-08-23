@extends('layouts.main')

@section('title', 'Home')

@section('main')
<div class="container mt-4">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Train</th>
            <th scope="col">From</th>
            <th scope="col">Departure Time</th>
            <th scope="col">To</th>
            <th scope="col">Arrival Time</th>
            <th scope="col">Delay</th>
            <th scope="col">Deleted</th>
          </tr>
        </thead>
        <tbody>
        @foreach($trains as $train)
            
          <tr>
            <th scope="row">{{$train['company']}}</th>
            <td>{{$train['departure']}}</td>
            <td>{{$train['departure_time']}}</td>
            <td>{{$train['arrival']}}</td>
            <td>{{$train['arrival_time']}}</td>
            <td @if($train['is_in_time'] == 0) class="text-danger" @endif>
                {{$train['is_in_time'] == 1 ? '--' : 'YES'}}
            </td>
            <td @if($train['is_deleted'] == 1) class="text-danger" @endif>
                {{$train['is_deleted'] == 1 ? 'DELETED' : '--'}}
            </td>
          </tr>
        @endforeach
          
        </tbody>
      </table>

@endsection