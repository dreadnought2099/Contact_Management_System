<!-- resources/views/welcome.blade.php -->
@extends('layouts.layout')

@section('title', 'Home')

@section('content')
   
    <div class="jumbotron">
        <h1 class="display-4 font-weight-bold">Welcome to Contact Management System!</h1>
        <p class="lead font-weight-bold">Manage your contacts efficiently and effortlessly.</p>
        <hr class="my-4">
        <p class="font-weight-bold" style="font-size: 1.25rem;">Follow my Socials</p>
        <div class="mt-4 align-items-start gap-2">
            <a class="btn btn-primary" href="https://www.facebook.com/RMAGALLANEZ.18" target="_blank" title="RMAGALLANEZ.18">
                <i class="fab fa-facebook"></i> Facebook
            </a>
            <a class="btn btn-danger" href="https://www.youtube.com/@paradoxx_the_art" target="_blank" title="Paradoxx">
                <i class="fab fa-youtube"></i> YouTube
            </a>
            <a class="btn btn-danger" href="https://www.instagram.com/skerm_art/" target="_blank" title="skerm_art">
                <i class="fab fa-instagram"></i> Instagram
            </a>
        </div>
    </div>
@endsection
