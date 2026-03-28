@extends('admin.layout.admin')

@section('title', ' trips')
@section('page-title', 'trips Management')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"> Show trip </li>
        </ol>
    </nav>
@endsection
@section('content')
    <div class="main-content">
        <h2>Trip Details</h2>

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Trip Information</h5>
                            <div>
                                <span class="badge bg-success">TR-001</span>
                                <span class="badge bg-warning">Featured</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-4 text-center">
                                <img src="https://via.placeholder.com/300x200" alt="Turkey Trip"
                                     class="img-fluid rounded" style="max-height: 200px;">
                            </div>
                            <div class="col-md-8">
                                <h3>Turkey Trip - 7 Days</h3>
                                <p class="text-muted">Enjoy the best tourist places in Turkey with premium services</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="info-box">
                                    <i class="fas fa-plane-departure fa-2x text-primary"></i>
                                    <div>
                                        <small>From</small>
                                        <h6>Riyadh, Saudi Arabia</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <div class="info-box">
                                    <i class="fas fa-plane-arrival fa-2x text-success"></i>
                                    <div>
                                        <small>To</small>
                                        <h6>Istanbul, Turkey</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <div class="info-box">
                                    <i class="fas fa-calendar-alt fa-2x text-info"></i>
                                    <div>
                                        <small>Duration</small>
                                        <h6>7 Days / 6 Nights</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h6><i class="fas fa-calendar-check"></i> Trip Dates</h6>
                                <table class="table table-sm">
                                    <tr>
                                        <td>Departure Date:</td>
                                        <td><strong>2024-06-15</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Return Date:</td>
                                        <td><strong>2024-06-22</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Last Booking Date:</td>
                                        <td><strong>2024-06-10</strong></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-md-6">
                                <h6><i class="fas fa-money-bill-wave"></i> Prices</h6>
                                <table class="table table-sm">
                                    <tr>
                                        <td>Adult Price:</td>
                                        <td><strong>$2,500</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Discounted Price:</td>
                                        <td><strong class="text-danger">$2,200</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Child Price:</td>
                                        <td><strong>$1,750</strong></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">Trip Statistics</h5>
                    </div>
                    <div class="card-body">
                        <div class="stats-box">
                            <div class="stat-item mb-3">
                                <i class="fas fa-receipt"></i>
                                <div>
                                    <h4>35</h4>
                                    <small>Total Bookings</small>
                                </div>
                            </div>

                            <div class="stat-item mb-3">
                                <i class="fas fa-users"></i>
                                <div>
                                    <h4>$87,500</h4>
                                    <small>Total Revenue</small>
                                </div>
                            </div>

                            <div class="stat-item mb-3">
                                <i class="fas fa-star"></i>
                                <div>
                                    <h4>4.8</h4>
                                    <small>Average Rating</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Quick Actions</h5>
                    </div>
                    <div class="card-body">
                        <a href="edit.html" class="btn-admin w-100 mb-2">
                            <i class="fas fa-edit"></i> Edit Trip
                        </a>
                        <a href="../bookings/index.html" class="btn btn-outline-primary w-100 mb-2">
                            <i class="fas fa-receipt"></i> View Bookings
                        </a>
                        <button class="btn btn-outline-danger w-100" onclick="deleteTrip()">
                            <i class="fas fa-trash"></i> Delete Trip
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

