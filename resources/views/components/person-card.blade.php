<div class="card p-3 my-2">
    <h3 class="{{ $colorName() ? 'text-info' : '' }}">{{ $person }}</h3>
    <hr>
    <p class="text-light">Spoken Languages:</p>
    <ul class="text-start">
        @foreach ($languages as $language)
            <li class="text-warning">{{ $language }}</li>    
        @endforeach
    </ul>
</div>