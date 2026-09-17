<x-app>
    <section>
        <p>hey am {{ $nom }} the SEO of truxtify and my dream is to enter big tech as a software engineer and
            have
            a career, now am {{ $age }} and actually living in Cameroon in {{ $town }}</p>

        @foreach ($Cars as $car)
            {{ $car }}<br>
        @endforeach

        @dump($Cars)
        
    </section>
</x-app>
