@extends('admin.layout.admin')

@section('title', ' bookings')
@section('page-title', '  bookings')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">  bookings </li>
        </ol>
    </nav>
@endsection
@section('content')
    <div class="main-content">
        <h2>Bookings Management</h2>

        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">All Bookings</h5>
                    <div class="btn-group">
                        <button class="btn-admin" onclick="exportBookings()">
                            <i class="fas fa-download"></i> Export
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- Filters -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Search by ID or Name...">
                    </div>
                    <div class="col-md-3">
                        <select class="form-control">
                            <option value="">All Status</option>
                            <option value="pending">Pending</option>
                            <option value="confirmed">Confirmed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="date" class="form-control" placeholder="From Date">
                    </div>
                    <div class="col-md-3">
                        <input type="date" class="form-control" placeholder="To Date">
                    </div>
                </div>

                <!-- Bookings Table -->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Trip</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Travelers</th>
                            <th>Amount</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><strong>BK-1001</strong></td>
                            <td>Turkey Trip - 7 Days</td>
                            <td>John Doe<br><small>john@email.com</small></td>
                            <td>2024-03-15</td>
                            <td>2 Adults, 1 Child</td>
                            <td>$6,200</td>
                            <td><span class="badge bg-success">Paid</span></td>
                            <td><span class="badge bg-success">Confirmed</span></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="show.html" class="btn btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="edit.html" class="btn btn-outline-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button class="btn btn-outline-danger" onclick="deleteBooking()">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>BK-1002</strong></td>
                            <td>Umrah Trip - 10 Days</td>
                            <td>Jane Smith<br><small>jane@email.com</small></td>
                            <td>2024-03-14</td>
                            <td>4 Adults</td>
                            <td>$14,000</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="show.html" class="btn btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="edit.html" class="btn btn-outline-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


@endsection
