@extends('layouts.app')

@section('content')

<div class="container">
    @if($errors->any())
        <h4>{{$errors->first()}}</h4>
    @endif
<p>Must have accountant role</p>
    </div>

<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
@php(require_once('C:\xampp\htdocs\peerpesa\resources\views\layouts\footer.php') )

@endsection
