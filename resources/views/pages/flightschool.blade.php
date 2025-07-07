@extends('layouts.northsky.app')


@section('title', 'North Sky Flight School')

@section('content')
<section class="bg-dark text-light">
    {{-- HERO IMAGE --}}
    <header style="background-image: url('/images/flightschool/airbus_night.jpg'); background-size: cover; background-position: center;">
        <div style="background-color: rgba(0,0,0,0.65); padding: 4rem 1rem;" class="text-center text-white">
            <h1 class="display-4 text-warning">North Sky Flight School</h1>
            <p class="lead">Your journey from first circuit to airline-level realism starts here.</p>
            
            @guest
    <a href="{{ route('register') }}" class="btn btn-warning btn-lg mt-3">🚀 Join and Start Training</a>
    @else
    <a href="/dashboard" class="btn btn-success btn-lg mt-3">📚 Continue Your Training</a>
    @endguest


        </div>
    </header>

    {{-- COURSE BLOCKS --}}
    <section class="container py-5">
        <div class="row gy-4 text-light">

            {{-- VFR BASICS --}}
            <div class="col-md-4">
                <div class="card bg-black border-warning h-100 d-flex flex-column">
                    <div class="ratio ratio-4x3">
                        <img src="/images/flightschool/cessna_day.jpg" class="card-img-top object-fit-cover" alt="VFR Cessna Training">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-warning">✖️ VFR Basics</h5>
                        <p class="card-text text-light">
                            Learn to fly circuits, traffic patterns, and communicate with ATC visually. Perfect for new simmers and essential for base handling skills.
                        </p>
                    </div>
                </div>
            </div>

            {{-- IFR ESSENTIALS --}}
            <div class="col-md-4">
                <div class="card bg-black border-warning h-100 d-flex flex-column">
                    <div class="ratio ratio-4x3">
                        <img src="/images/flightschool/ils_approach_chart.png" class="card-img-top object-fit-cover" alt="IFR Training">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-warning">📄 IFR Essentials</h5>
                        <p class="card-text text-light">
                            Fly SIDs, STARs, and approach charts with precision. Practice IFR navigation and charts interpretation in live or simulated ATC environments.
                        </p>
                    </div>
                </div>
            </div>

            {{-- AIRLINE PROCEDURES --}}
            <div class="col-md-4">
                <div class="card bg-black border-warning h-100 d-flex flex-column">
                    <div class="ratio ratio-4x3">
                        <img src="/images/flightschool/fmc_a20n.png" class="card-img-top object-fit-cover" alt="FMC training">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-warning">✈️ Airline Procedures</h5>
                        <p class="card-text text-light">
                            Set up your FMC/MCDU like the pros. Learn proper briefings, checklists, SOPs and practice gate-to-gate realism on jets like the A320 or Embraer.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        {{-- LINK TO TRAINING PROGRAM --}}
        <div class="text-center mt-5">
            <a href="{{ route('frontend.flightschool.program') }}" class="btn btn-outline-warning btn-lg">
                📚 See Full Training Program
            </a>
        </div>
    </section>

    {{-- SHARED COCKPIT --}}
    <section class="container my-5">
        <h4 class="text-warning">🤝 Shared Cockpit Training</h4>
        <p>
            Our instructors provide shared cockpit training sessions – so you can fly together, ask questions live, and learn by doing. It's the perfect way to ease into online flying, especially with VATSIM.
        </p>
    </section>

    {{-- VATSIM JOIN SECTION --}}
    <section class="container my-5">
        <h4 class="text-warning">🌐 Join the Network – VATSIM</h4>
        <ul>
            <li>✔️ Setting up your account</li>
            <li>✔️ Connecting via vPilot or xPilot</li>
            <li>✔️ Filing flight plans & reading METARs</li>
            <li>✔️ Understanding ATC phraseology</li>
        </ul>
        <p>With our guidance, flying online will feel natural, exciting and immersive.</p>
    </section>
</section>
@endsection
