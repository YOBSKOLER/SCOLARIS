<x-app>
    <section>
        <h1>Notre Collection De Voiture</h1>

        <div>
            @foreach ($voitures as $voiture)
                <div>
                    <h3>{{ $voiture->name }}</h3>
                    <p>cette {{ $voiture->marque }} est une voiture de type {{ $voiture->type }} avec
                        {{ $voiture->place }}
                        places
                        et coûte {{ $voiture->prix }} $ </p>
                    <img src="{{ asset($voiture->photo) }}" alt="{{ $voiture->name }}" width="300">
                </div>
            @endforeach
        </div>

        {{ $voitures->links() }}
    </section>
</x-app>
