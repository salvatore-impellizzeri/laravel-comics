@php
    $icons = [
        [
        'label' => 'Facebook',
        'link' => 'img\footer-facebook.png'
        ],
        [
        'label' => 'Twitter',
        'link' => 'img\footer-twitter.png'
        ],
        [
        'label' => 'Youtube',
        'link' => 'img\footer-youtube.png'
        ],
        [
        'label' => 'Pinterest',
        'link' => 'img\footer-pinterest.png'
        ],
        [
        'label' => 'Periscope',
        'link' => 'img\footer-periscope.png'
        ],
    ]
@endphp

<div class="social-container">
    <div class="container d-flex align-items-center justify-content-between px-0">
        <div class="row align-items-center justify-content-between">
            <div class="col-2">
                <a href="#" class="text-uppercase text-white text-decoration-none sign-up">
                    Sign-up now!
                </a>
            </div>
            <div class="col-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-3 text-uppercase">
                        <a href="#" class="text-decoration-none follow-us">
                            Follow us
                        </a>
                    </div>
                    @foreach($icons as $ind => $socialIcon)
                        <div class="col-1">
                            <a href="#">
                                <img src="{{ $socialIcon['link'] }}" alt="{{ $socialIcon['label'] }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>