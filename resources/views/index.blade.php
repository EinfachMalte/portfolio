@extends('layouts.app')

@section('title', 'testapp')
@section('content')
<!-- Loading Screen -->
<div class="loading-screen">
    <div class="loader"></div>
</div>

<!-- Notification System -->
<div id="notification" class="notification"></div>

<!-- Home Section -->
<section id="home" class="home">
    <div class="particle-background"></div>
    <div class="content">
        <h1 class="glitch" data-text="Creative Developer">Malte Brussmann</h1>
        <p class="typing-text"></p>
        </br>
        <div class="cta-buttons">
            <a href="#contact" class="glow-button">Contact Me</a>
            <a href="#projects" class="glow-button outline">View Work</a>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects">
    <h2 class="section-title glow-text">Projects</h2>
    <div class="filter-buttons">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="web">Web</button>
        <button class="filter-btn" data-filter="app">App</button>
        <button class="filter-btn" data-filter="design">Design</button>
    </div>
    <div class="projects-grid">
        <div class="project-card" data-category="web">
            <img src="https://i.imgur.com/Ad5BiYU.jpeg" alt="Project 1">
            <div class="project-info">
                <h3>Project One</h3>
                <p>Web Development</p>
                <a href="#" class="glow-button">View Project</a>
            </div>
        </div>
        <div class="project-card" data-category="app">
            <img src="https://i.imgur.com/iikMBQL.jpeg" alt="Project 2">
            <div class="project-info">
                <h3>Project Two</h3>
                <p>App Development</p>
                <a href="#" class="glow-button">View Project</a>
            </div>
        </div>
        <div class="project-card" data-category="design">
            <img src="https://i.imgur.com/ONHc6yC.jpeg" alt="Project 3">
            <div class="project-info">
                <h3>Project Three</h3>
                <p>UI/UX Design</p>
                <a href="#" class="glow-button">View Project</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact">
    <h2 class="section-title glow-text">Contact Me</h2>
    <div class="contact-container">
        <div class="contact-info">
            <div class="info-item">
                <i class="fas fa-envelope glow-icon"></i>
                <p>email@example.com</p>
            </div>
            <div class="info-item">
                <i class="fas fa-phone glow-icon"></i>
                <p>+1 234 567 890</p>
            </div>
            <div class="info-item">
                <i class="fas fa-map-marker-alt glow-icon"></i>
                <p>New York, USA</p>
            </div>
        </div>
        <form id="contact-form" class="contact-form">
            <div class="form-group">
                <input type="text" placeholder="Name" required>
                <span class="focus-border"></span>
            </div>
            <div class="form-group">
                <input type="email" placeholder="Email" required>
                <span class="focus-border"></span>
            </div>
            <div class="form-group">
                <textarea placeholder="Message" required></textarea>
                <span class="focus-border"></span>
            </div>
            <button type="submit" class="glow-button">Send Message</button>
        </form>
    </div>
</section>
<!-- Footer Section -->
<footer class="footer">
    <p>&copy; 20** SJM Developers. BLA Bla Bla.</p>
</footer>

<!-- Back to Top Button -->
<button id="back-to-top" class="back-to-top glow-button">
    <i class="fas fa-arrow-up"></i>
</button>
@endsection
