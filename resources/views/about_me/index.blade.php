@extends('layouts.app')

@section('content')
<!-- About Section -->
<section id="about" class="about">
    <h2 class="section-title glow-text">About Me</h2>
    <div class="about-content">
        <div class="profile-card" data-tilt>
            <h1 class="section-title glow-text">Malte Brussmann</h1>
            <img src="https://i.imgur.com/T7Am8ag.jpeg" alt="Profile">
            <div class="social-links">
                <a href="#" class="glow-icon"><i class="fab fa-github"></i></a>
                <a href="#" class="glow-icon"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="glow-icon"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
    <div class='about-content'>
        <div class="profile-card">
            <p>Creative developer with a passion for building beautiful and functional websites.</p>
            <div class="stats">
                <div class="stat-item">
                    <h3 class="counter" data-target="50">0</h3>
                    <p>Projects</p>
                </div>
                <div class="stat-item">
                    <h3 class="counter" data-target="30">0</h3>
                    <p>Clients</p>
                </div>
                <div class="stat-item">
                    <h3 class="counter" data-target="5">0</h3>
                    <p>Years</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
