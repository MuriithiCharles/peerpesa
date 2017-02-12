@extends('layouts.app')

@section('content')
<div class="vertical">
        
 <ul>
    <li class="active"><a href="/home">Your Profile</a></li>
    <li><a href="/about">Make Payments</a></li>
</ul>
</div>
@foreach ($client as $clients)
    <option value="{{$clients->Id_no}}">{{ $clients->Room_no }}</option>
@endforeach
@endsection