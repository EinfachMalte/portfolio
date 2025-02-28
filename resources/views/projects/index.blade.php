@extends('layouts.app')

@php
$nvim_categories = ["lua"];
$two_minutes_to_late_categories = ["java", "gdscript"];
@endphp

@section('content')
<section id="about" class="about">
    <h2 class="section-title glow-text">My Projects</h2>
    <div class="about-content grid grid-cols-2 gap-4">
        <x-card date='28.02.2025' :categories='$nvim_categories' footer="based on nvchad">
            Custom nvim configuration for efficient web-development
        </x-card>
        <x-card date='28.02.2025' :categories='$two_minutes_to_late_categories' footer='made with GoDot and java'>
            A JumpNRun game
        </x-card>
    </div>
</section>
@endsection
