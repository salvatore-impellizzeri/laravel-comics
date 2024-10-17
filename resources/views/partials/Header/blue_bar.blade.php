@php
    $additional_sites = [
        [
            'label' => 'DC Universe Infinite',
            'link' => 'https://www.dcuniverseinfinite.com/'
        ],
        [
            'label' => 'Warner Bros',
            'link' => 'https://www.warnerbros.it/'
        ]
];
@endphp

<div class="blue-bar">
    <div class="container text-white d-flex align-items-center justify-content-end">
        <span class="written-logo blue-bar-text">
            DC POWER™ VISA®
        </span>
        <span>
            <div class="dropdown d-flex align-items-center">
                <button class="additional-dc-sites dropdown-toggle text-white ms-4 blue-bar-text" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ADDITIONAL DC SITES
                </button>
                <ul class="dropdown-menu">
                    @foreach($additional_sites as $ind => $site)
                        <li>
                            <a class="dropdown-item colorLightBlue py-0 my-0" href="{{ $site['link'] }}">
                                {{ $site['label'] }}
                            </a>
                        </li> 
                    @endforeach 
                </ul>
              </div>
        </span>     
    </div>  
</div>