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

<div class="row container-header m-auto py-4">
    <div class="col-4">
      <img src="public/img/dc-logo.png" alt="DC Comics">
    </div>

    <!-- NAV BAR -->

    <nav class="col-8">
      <ul>
        @foreach ($links as $link)
            <li class="text-uppercase fw-bold fs-6">
                <a class="sans" href="{{ $link['link'] }}">
                    {{ $link['label'] }}
                </a>
            </li>
        @endforeach
      </ul>
    </nav>
</div>