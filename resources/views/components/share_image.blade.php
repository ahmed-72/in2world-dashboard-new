<div class="container-fluid hero-bg-img d-flex align-items-center justify-content-center">
    <div>
        <h1 class="mb-4">
            {{ $sub }}
        </h1>
        @if ($title!='null')
            <ol class="breadcrumb d-flex" style="background:none ;">
            <li>
                <a href="{{ route('home') }}">
                    {{ $title}}
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}">
                    {{ $sub }}
                </a>
            </li>
        </ol>
        @endif

    </div>
    <img class="right" src="./imgs/shape-right-bg-hero.svg" width="100" height="100" alt="Shape Hero">
    <img class="left" src="./imgs/shape-left-bg-hero.svg" width="100" height="100" alt="Shape Hero">
</div>
