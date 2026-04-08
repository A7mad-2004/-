@extends('user.layout.app')
@section('content')
<div class="container3">
    <div class="card">
        @if($booking->isEmpty())
            <p>No bookings found.</p>
        @else
            @foreach($booking as $item)
                <div class="card1 margin">
                    <div class="cont-card">
                        <h4>{{ ($item->trip->destination)->name ?? 'Unknown destination' }}</h4>
                        <h4>Trip details</h4>
                        <p class="cont-card-pp">{{ ($item->trip)->summary ?? 'No summary available' }}</p>
                    </div>
                        <div class="info">
                            <div class="price">
                                <h4>price</h4>
                                <p>{{ ($item->trip)->price ?? '0' }} $</p>
                            </div>
                            <div class="daet">
                                <h4>date</h4>
                                <p>{{ ($item->trip)->start_date ?? '-' }} - {{ ($item->trip)->end_date ?? '-' }}</p>
                            </div>
                        </div>
                        <div class="t">
                            <h1>Number of bookings : {{ $booking->count() }} </h1>
                        </div>
                        <div class="button">
                            <button>Book now</button>
                        </div>
                    </div>
                @endforeach
        @endif
    </div>
</div>
@endsection