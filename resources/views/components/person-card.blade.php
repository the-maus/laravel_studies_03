<div class="card p-3 my-2">
    <h3>{{ $personName }}</h3>
    <hr>
    <p class="text-light">Spoken Languages:</p>
    <ul class="text-start">
        @foreach ($personLanguages as $language)
            <li class="text-warning">{{ $language }}</li>    
        @endforeach
    </ul>
</div>