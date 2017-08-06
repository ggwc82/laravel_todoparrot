@extends('layouts.app')

@section('content')

<h1>Lists</h1>

@if (count($lists) > 0)
  <ul>
  @foreach ($lists as $list)
    <li>{{ $list->name }}</li>
  @endforeach
  </ul>
@else
  <p>No lists to display!</p>

@endif

@endsection
