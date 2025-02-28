@extends('layouts.app')

@section('content')
<section id="about" class="about">
    <h2 class="section-title glow-text">Stay in contact</h2>
    <div class="about-content grid grid-cols-2 gap-4">
        <div class="profile-card" data-tilt>
            <h1 class="section-title glow-text">Malte Brussmann</h1>
            <img src="https://i.imgur.com/T7Am8ag.jpeg" alt="Profile">
            <div class="social-links">
                <a href="#" class="glow-icon"><i class="fab fa-github"></i></a>
                <a href="#" class="glow-icon"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="glow-icon"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="form-container">
            <form class="form">
                <div class="form-group">
                    <label for="email">E-Mail:</label>
                    <input required name="email" placeholder="mail@example.com" id="email" type="text">
                </div>
                <div class="form-group">
                    <label for="textarea">Write a message</label>
                    <textarea required id="textarea" name="textarea"></textarea>
                </div>
                <button type="submit" class="form-submit-btn">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection
