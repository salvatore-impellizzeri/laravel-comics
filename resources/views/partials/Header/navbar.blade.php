@php

$links = [
        [
            'label' => 'Characters',
            'link' => '#'
        ],
        [
            'label' => 'Comics',
            'link' => '#'
        ],
        [
            'label' => 'Movies',
            'link' => '#'
        ],
        [
            'label' => 'Tv',
            'link' => '#'
        ],
        [
            'label' => 'Games',
            'link' => '#'
        ],
        [
            'label' => 'Collectibles',
            'link' => '#'
        ],
        [
            'label' => 'Videos',
            'link' => '#'
        ],
        [
            'label' => 'Fans',
            'link' => '#'
        ],
        [
            'label' => 'News',
            'link' => '#'
        ],
        [
            'label' => 'Shop',
            'link' => '#'
        ],
];
@endphp

<div class="row container-header m-auto">
    <div class="col-2">
      <img src="img/dc-logo.png" alt="DC Comics">
    </div>

    <!-- NAV BAR -->

    <nav class="col-10">
      <ul>
        @foreach ($links as $link)
            <li class="text-uppercase fw-bold fs-6">
                <a class="sans" href="{{ $link['link'] }}">
                    {{ $link['label'] }}
                </a>
            </li>
        @endforeach
        <div class="col-2 d-flex align-items-center justify-content-end">
            <div class="search-bar">
                <input type="text" class="search-text" placeholder="Search">
                <i class="fas fa-search ms-2"></i>
            </div>
        </div>
      </ul>
    </nav>
</div>