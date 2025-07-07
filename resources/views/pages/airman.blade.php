@extends('layouts.northsky.app')

@section('title', 'Pilot Roster')

@section('content')
<style>
    table {
        width: 100%;
        table-layout: auto;
    }

    .table-responsive {
        overflow-x: unset !important;
    }
</style>

<section class="py-5 bg-dark text-light">
    <div class="container">
        <h2 class="text-warning text-center mb-4 display-5">Pilot Roster</h2>

        <div class="table-responsive">
            <table class="table table-dark table-borderless align-middle text-light">
                <thead class="border-bottom border-warning">
                    <tr class="text-uppercase text-warning small">
                        <th class="text-center">ID</th>
                        <th>Pilot</th>
                        <th>Rank</th>
                        <th class="text-center">Hours</th>
                        <th class="text-center">Flights</th>
                        <th class="text-center">Last Flight</th>
                        <th class="text-center">Online</th>
                        <th class="text-end">Progress</th>
                        <th class="text-end">Epaulette</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pilots as $pilot)
                        @php
                            // Zamiana np. "12h 30m" -> minuty
                            preg_match('/(\d+)h\s*(\d+)m/', $pilot->flight_time ?? '0h 0m', $matches);
                            $total_minutes = ($matches[1] ?? 0) * 60 + ($matches[2] ?? 0);

                            // Próba pobrania wymaganych minut do awansu z rangi
                            $required_minutes = optional($pilot->rank)->hours_required ? optional($pilot->rank)->hours_required * 60 : null;

                            // Procent postępu
                            $progress_percent = $required_minutes ? min(100, ($total_minutes / $required_minutes) * 100) : null;

                            // Ostatni lot
                            $last_flight_date = $pilot->pireps->sortByDesc('created_at')->first()?->created_at?->format('Y-m-d') ?? '—';
                        @endphp
                        <tr class="border-bottom border-secondary">
                            <td class="text-center fw-bold text-light">{{ $pilot->pilot_id }}</td>
                            <td class="fw-semibold text-light">
                                @if($pilot->country)
                                    <img src="https://flagcdn.com/h20/{{ strtolower($pilot->country) }}.png"
                                         alt="{{ $pilot->country }}" class="me-2" style="height: 14px;">
                                @endif
                                <a href="{{ url('/pilot/'.$pilot->id) }}" class="text-warning text-decoration-none">
                                    {{ $pilot->name }}
                                </a>
                            </td>
                            <td><span class="text-warning">{{ optional($pilot->rank)->name ?? '—' }}</span></td>
                            <td class="text-center">{{ $pilot->flight_time ?? '0h 0m' }}</td>
                            <td class="text-center">{{ $pilot->pireps->count() }}</td>
                            <td class="text-center">{{ $last_flight_date }}</td>
                            <td class="text-center">
                                {{-- Tu w przyszłości trafi VATSIM online status --}}
                            </td>
                            <td class="text-end" style="min-width: 120px;">
                                @if($required_minutes)
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                             style="width: {{ $progress_percent }}%;"
                                             aria-valuenow="{{ $progress_percent }}" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                @else
                                    <span class="text-muted">—</span>
                                @endif
                            </td>
                            <td class="text-end">
                                @if($pilot->rank)
                                    <img src="{{ asset('images/epaulets/' . strtolower(str_replace(' ', '_', $pilot->rank->name)) . '.png') }}"
                                         alt="Rank Epaulette"
                                         title="{{ $pilot->rank->name }}"
                                         style="height: 60px; transform: rotate(-90deg); opacity: 0.85;">
                                @endif
                            </td>
			</tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
