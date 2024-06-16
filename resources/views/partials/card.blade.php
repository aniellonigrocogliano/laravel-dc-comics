<div class="card" style="width: 25rem;">
    <img src="{{ $coomics->thumb }}" class="card-img-top" alt="{{ $coomics->title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $coomics->title }}</h5>
        <p class="card-text">Serie: {{ $coomics->series }}</p>
        <p class="card-text">Tipo: {{ $coomics->type }}</p>
        <p class="card-text">Descrizione: {{ $coomics->description }}</p>
        <p class="card-text">Prezzo: {{ $coomics->price }}</p>
        <p class="card-text">Data di vendita: {{ $coomics->sale_date }}</p>
    </div>
</div>
