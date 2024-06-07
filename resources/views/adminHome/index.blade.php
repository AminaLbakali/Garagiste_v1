@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        {{auth()->user()->username}}
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated admins can access this section.</p>
        @yield('Content')
        @endauth
        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection