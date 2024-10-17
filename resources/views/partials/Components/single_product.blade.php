@php
    $products = [
        [
            'link' => 'img\buy-comics-digital-comics.png',
            'label' => 'Digital Comics'
        ],
        [
            'link' => 'img\buy-comics-merchandise.png',
            'label' => 'Merchandise'
        ],
        [
            'link' => 'img\buy-comics-subscriptions.png',
            'label' => 'Subscriptions'
        ],
        [
            'link' => 'img\buy-comics-shop-locator.png',
            'label' => 'Comic shop locator'
        ],
        [
            'link' => 'img\buy-dc-power-visa.svg',
            'label' => 'DC Power Visa'
        ],
    ]
@endphp

@foreach($products as $ind => $product)
<div class="single-product">
    <a href="#" class="text-decoration-none">
        <img src="{{ $product['link'] }}" alt="{{ $product['label'] }}" class="product-img">
        <span class="text-white product-name">
            {{ $product['label'] }}
        </span>
    </a>
</div>
@endforeach