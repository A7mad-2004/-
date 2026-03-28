@extends('admin.layout.admin')

@section('title', 'dashboard ')
@section('page-title', 'dashboard ')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"> dashboard </li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stat-card">
                <div class="d-flex align-items-center">
                    <div class="stat-icon" style="background: #e3f2fd;">
                        <i class="fas fa-suitcase text-primary"></i>
                    </div>
                    <div>
                        <div class="text-muted">Total Trips</div>
                        <div class="h4 mb-0">{{$total_trips}}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stat-card">
                <div class="d-flex align-items-center">
                    <div class="stat-icon" style="background: #f3e5f5;">
                        <i class="fas fa-receipt text-purple"></i>
                    </div>
                    <div>
                        <div class="text-muted">Total Bookings</div>
                        <div class="h4 mb-0">{{ $total_bookings }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stat-card">
                <div class="d-flex align-items-center">
                    <div class="stat-icon" style="background: #e8f5e9;">
                        <i class="fas fa-users text-success"></i>
                    </div>
                    <div>
                        <div class="text-muted">Total Users</div>
                        <div class="h4 mb-0">{{$total_user}}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stat-card">
                <div class="d-flex align-items-center">
                    <div class="stat-icon" style="background: #fff3e0;">
                        <i class="fas fa-money-bill-wave text-warning"></i>
                    </div>
                    <div>
                        <div class="text-muted">Total Revenue</div>
                        <div class="h4 mb-0">$2,456,850</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Bookings -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Recent Bookings</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Trip</th>
                        <th>User</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($bookings as $booking)
                            <td> {{$booking->id}}</td>
                            <td> {{$booking->trip->title}}</td>
                            <td> {{$booking->user->name}}</td>
                            <td> {{$booking->created_at ?? date('d-m-y')}}</td>
                            <td> {{$booking->total_price}}</td>
                            @if($booking->status='pending')
                                <td><span class="badge bg-warning">Pending</span></td>
                            @else
                                <td><span class="badge bg-success">Confirmed</span></td>
                            @endif
                            <td>
                                <a href="bookings/show.html" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>

                        @endforeach
{{--                        <td><strong>BK-1001</strong></td>--}}
{{--                        <td>Turkey Trip - 7 Days</td>--}}
{{--                        <td>John Doe</td>--}}
{{--                        <td>2024-03-15</td>--}}
{{--                        <td>$2,500</td>--}}
{{--                        <td><span class="badge bg-success">Confirmed</span></td>--}}
{{--                        <td>--}}
{{--                            <a href="bookings/show.html" class="btn btn-sm btn-outline-primary">--}}
{{--                                <i class="fas fa-eye"></i>--}}
{{--                            </a>--}}
{{--                        </td>--}}
                    </tr>
{{--                    <tr>--}}
{{--                        <td><strong>BK-1002</strong></td>--}}
{{--                        <td>Umrah Trip - 10 Days</td>--}}
{{--                        <td>Jane Smith</td>--}}
{{--                        <td>2024-03-14</td>--}}
{{--                        <td>$3,500</td>--}}
{{--                        <td><span class="badge bg-warning">Pending</span></td>--}}
{{--                        <td>--}}
{{--                            <a href="bookings/show.html" class="btn btn-sm btn-outline-primary">--}}
{{--                                <i class="fas fa-eye"></i>--}}
{{--                            </a>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
