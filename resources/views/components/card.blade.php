<div class="card">
    <div class="main-content">
        <div class="header">
            <span>Article on</span>
            <span>{{ $date }}</span>
        </div>
        <p class="heading">
            {{ $slot }}
        </p>
        <div class="categories">
            @foreach ($categories as $category)
                <span>{{ $category }}</span>
            @endforeach
        </div>
    </div>
    <div class="footer">
        {{ $footer }}
    </div>
</div>

