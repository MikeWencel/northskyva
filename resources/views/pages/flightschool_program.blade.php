@extends('layouts.northsky.app')


@section('title', 'Flight School Program')

@section('content')
<style>
    .custom-img-size {
        max-height: 300px;
        object-fit: cover;
        width: 100%;
    }
</style>

<section class="bg-dark text-white py-5">
    <div class="container">
        <h1 class="text-warning mb-4">📚 Flight School – Training Overview</h1>
        <p class="lead mb-5">This is your complete roadmap from beginner pilot to confident online jet captain. Choose your path, follow the lessons, and fly with purpose.</p>

        {{-- VFR TRAINING --}}
        <div class="row mb-5 d-md-flex align-items-center">
            <div class="col-md-6">
                <h4 class="text-warning">✖️ VFR Training</h4>
                <ul>
                    <li>✅ <strong>Introduction to Visual Flight Rules</strong><br><small>VFR weather minima, types of visual navigation, and uncontrolled vs controlled airspace.</small></li>
                    <li>🛫 <strong>Traffic Patterns & Circuits</strong><br><small>Learn the standard left-hand circuit, reporting points (downwind, base, final), and pattern entry techniques.</small></li>
                    <li>🗺️ <strong>Pilotage & Dead Reckoning</strong><br><small>Use landmarks, heading/time estimations, and magnetic deviation basics for visual navigation.</small></li>
                    <li>🎙️ <strong>Tower and AFIS Communication</strong><br><small>Radio phraseology for takeoffs, circuits, joining airspace, and position reporting.</small></li>
                    <li>📝 <strong>Final VFR Solo Flight</strong><br><small>Complete a full pattern or cross-country flight with shared cockpit instructor or on VATSIM.</small></li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="/images/flightschool/cessna_day.jpg" class="img-fluid rounded shadow custom-img-size" alt="VFR Training">
            </div>
        </div>

        {{-- IFR ESSENTIALS --}}
        <div class="row mb-5 d-md-flex align-items-center flex-md-row-reverse">
            <div class="col-md-6">
                <h4 class="text-warning">📄 IFR Essentials</h4>
                <ul>
                    <li>🧭 <strong>Understanding Instrument Flight Rules</strong><br><small>Controlled airspace, minimum altitudes, and rules for IMC operations.</small></li>
                    <li>🛬 <strong>SID/STAR & Approach Briefings</strong><br><small>Reading Jeppesen/LIDO charts, understanding transitions, and planning descent profiles.</small></li>
                    <li>📐 <strong>Holding Procedures</strong><br><small>Join types (parallel/teardrop/direct), hold entries, and speed restrictions.</small></li>
                    <li>🌤️ <strong>METAR, TAF & NOTAM Interpretation</strong><br><small>Decode actual and forecast weather and relevant operational notices for IFR flights.</small></li>
                    <li>📝 <strong>IFR Flight Practice</strong><br><small>Perform a complete IFR flight with SID, enroute, STAR and precision/non-precision approach.</small></li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="/images/flightschool/ils_approach_chart.png" class="img-fluid rounded shadow custom-img-size" alt="IFR Training">
            </div>
        </div>

        {{-- JET OPERATIONS --}}
        <div class="row mb-5 d-md-flex align-items-center">
            <div class="col-md-6">
                <h4 class="text-warning">✈️ Jet Operations</h4>
                <ul>
                    <li>🖥️ <strong>FMC / MCDU Programming</strong><br><small>INIT, PERF, F-PLN and SEC F-PLN setup for A320, Embraer, or CJ4-style aircraft.</small></li>
                    <li>✅ <strong>Flows & Checklists</strong><br><small>Gate-to-gate checklists, briefings, and callouts used in real-world SOPs.</small></li>
                    <li>📈 <strong>VNAV / LNAV / Autopilot Management</strong><br><small>Climb/cruise/descent profile management, vertical modes, and constraints.</small></li>
                    <li>⚠️ <strong>Abnormal Situations</strong><br><small>Rejected takeoff, missed approach, and how to handle discontinuities and re-routes.</small></li>
                    <li>🎯 <strong>Complete Line Flight</strong><br><small>Gate-to-gate flight in a jet, using real-world documentation and SOPs.</small></li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="/images/flightschool/fmc_a20n.png" class="img-fluid rounded shadow custom-img-size" alt="Jet Operations">
            </div>
        </div>

        {{-- VATSIM TRAINING --}}
        <div class="row mb-5 d-md-flex align-items-center flex-md-row-reverse">
            <div class="col-md-6">
                <h4 class="text-warning">🌐 VATSIM & Online Flying</h4>
                <ul>
                    <li>🔌 <strong>Account Setup & Software</strong><br><small>How to register, install vPilot/xPilot, and connect to the network.</small></li>
                    <li>🧭 <strong>Filing Realistic Flight Plans</strong><br><small>Using SimBrief and VATSIM tools to generate and file flight plans accurately.</small></li>
                    <li>🎧 <strong>Voice Communication</strong><br><small>AFV basics, push-to-talk etiquette, and handling unexpected radio calls.</small></li>
                    <li>🗣️ <strong>Phraseology in Action</strong><br><small>Real-world phraseology broken down for every phase of flight: ground, departure, cruise, arrival.</small></li>
                    <li>👨‍✈️ <strong>First Flight on VATSIM</strong><br><small>Instructor-assisted or solo VATSIM flight from clearance to shutdown.</small></li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="/images/flightschool/vatsim_ui.jpg" class="img-fluid rounded shadow custom-img-size" alt="VATSIM Training">
            </div>
        </div>

        {{-- CALL TO ACTION – Discord + VA --}}
<div class="bg-black border border-warning rounded-4 p-4 text-center mt-5">
    <p class="mb-3">
        🧑‍🏫 All training is conducted live via <strong>Discord</strong> with shared cockpit sessions.  
        Materials are provided only to active students who are part of our airline.
    </p>
    <div class="d-flex justify-content-center flex-wrap gap-2">
        <a href="https://discord.gg/YOUR-DISCORD" class="btn btn-outline-warning">
            🎓 Join Flight School on Discord
        </a>
        <a href="/register" class="btn btn-outline-warning">
            ✈️ Join North Sky Virtual Airline
        </a>
    </div>
</div>
    </div>
</section>
@endsection
