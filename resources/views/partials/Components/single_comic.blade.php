@foreach($comics as $ind => $comic)

    <a href="#" class="my-card">
        <div class="container-img">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        </div>

        <h5>
            {{ $comic['title'] }}
        </h5>
    </a>

@endforeach