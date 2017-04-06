@extends('layouts.app')

@section('content')

    @if($errors->any())
        <h4>{{$errors->first()}}</h4>
    @endif
    <div class="container">
        <p>Must have HR role</p>
    </div>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    @php(require_once('C:\xampp\htdocs\peerpesa\resources\views\layouts\footer.php') )


@endsection



