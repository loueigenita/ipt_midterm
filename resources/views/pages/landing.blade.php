@extends('layouts.app')
@section('content')

<div class="container bg-primary custom">
    <h1 class="menu text-white">Main Menu</h1>
    <hr>
    <div class="container">
        <ul class="menu-ul">
            <li class="menu-li"><a class="text-decoration-none"href="{{url('/')}}">Home</a></li>
            <li class="menu-li"><a class="text-decoration-none"href="{{url('/users')}}">Users</a></li>
            <li class="menu-li"><a class="text-decoration-none"href="{{url('/accounts')}}">Accounts</a></li>
        </ul>
    </div>
</div>
@endsection
