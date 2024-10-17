@php
    $linksFooter = [
        [
            'linksLabel' => [
                'Characters',
                'Comics',
                'Movies',
                'TV',
                'Games',
                'Videos',
                'News'
            ]
        ],
        [
            'linksLabel' => [
                'Shop DC',
                'Shop DC Collectibles'
            ]
        ],
        [
            'linksLabel' => [
                'Terms Of Use',
                'Privacy policy (New)',
                'Ad Choices',
                'Advertising',
                'Jobs',
                'Subscriptions',
                'Talent Workshop',
                'CPSC Certificates',
                'Ratings',
                'Shop Help',
                'Contact Us'
            ]
        ],
        [
            'linksLabel' => [
                'DC',
                'Mad Magazine',
                'DC Kids',
                'DC Universe',
                'DC Power Visa' 
        ],
    ]
]


@endphp

<div class="endpage">
    <div class="container">
        <div class="row justify-content-start align-items-start">       
            <div class="col-2 pt-5 pb-2">
                <h5 class="text-white fw-bold link-label">
                    DC Comics
                </h5>

                <ul class="list-unstyled">
                    @foreach($linksFooter[0]['linksLabel'] as $link)
                        <li>
                            <a href="#" class="text-decoration-none">{{ $link }}</a>
                        </li>
                    @endforeach
                </ul>

                <h5 class="text-white fw-bold mt-4 link-label">
                    Shop
                </h5>

                <ul class="list-unstyled">
                    @foreach($linksFooter[1]['linksLabel'] as $link)
                        <li>
                            <a href="#" class="text-decoration-none">
                                {{ $link }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-2 pt-5 pb-2">
                <h5 class="text-white fw-bold link-label">
                    DC
                </h5>
                <ul class="list-unstyled">
                    @foreach($linksFooter[2]['linksLabel'] as $link)
                        <li>
                            <a href="#" class="text-decoration-none">
                                {{ $link }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-2 pt-5 pb-2">
                <h5 class="text-white fw-bold link-label">
                    Sites
                </h5>
                <ul class="list-unstyled">
                    @foreach($linksFooter[3]['linksLabel'] as $link)
                        <li>
                            <a href="#" class="text-decoration-none">
                                {{ $link }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col dc-background">

            </div>
        </div>
        <div class="endpage-text">
            All Site Content TM and © 2020 DC Entertainment, unless otherwise <a href="#" class="text-decoration-none">noted here</a>. All rights reserved.
        </div>
        <div class="pb-4">
            <a href="#" class="text-decoration-none">
                Cookies Settings
            </a>
        </div>
    </div>
    </div>
</div>