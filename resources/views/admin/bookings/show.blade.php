@extends('admin.layout.admin')

@section('title', ' trips')
@section('page-title', ' show booking')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"> Show booking </li>
        </ol>
    </nav>
@endsection
@section('content')
    <div class="main-content">
        <h2>Booking Details</h2>

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Booking Information</h5>
                            <span class="badge bg-success">BK-1001</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h6>Customer Details</h6>
                                <table class="table table-sm">
                                    <tr>
                                        <td><strong>Name:</strong></td>
                                        <td>John Doe</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email:</strong></td>
                                        <td>john.doe@example.com</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Phone:</strong></td>
                                        <td>+966 50 123 4567</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Country:</strong></td>
                                        <td>Saudi Arabia</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-md-6">
                                <h6>Booking Details</h6>
                                <table class="table table-sm">
                                    <tr>
                                        <td><strong>Booking Date:</strong></td>
                                        <td>2024-03-15 14:30</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Trip:</strong></td>
                                        <td>Turkey Trip - 7 Days</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Travel Dates:</strong></td>
                                        <td>2024-06-15 to 2024-06-22</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Travelers:</strong></td>
                                        <td>2 Adults, 1 Child</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <!-- Passengers List -->
                        <h6 class="mt-4">Passengers List</h6>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Type</th>
                                    <th>Passport No.</th>
                                    <th>Birth Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td><span class="badge bg-primary">Adult</span></td>
                                    <td>AB1234567</td>
                                    <td>1985-05-15</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sarah Doe</td>
                                    <td><span class="badge bg-primary">Adult</span></td>
                                    <td>AB1234568</td>
                                    <td>1988-08-20</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Adam Doe</td>
                                    <td><span class="badge bg-success">Child</span></td>
                                    <td>AB1234569</td>
                                    <td>2015-03-10</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">Payment & Status</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <h6>Payment Summary</h6>
                            <table class="table table-sm">
                                <tr>
                                    <td>Total Amount:</td>
                                    <td class="text-end"><strong>$6,200</strong></td>
                                </tr>
                                <tr>
                                    <td>Paid Amount:</td>
                                    <td class="text-end"><strong>$6,200</strong></td>
                                </tr>
                                <tr>
                                    <td>Payment Method:</td>
                                    <td class="text-end">Credit Card</td>
                                </tr>
                                <tr>
                                    <td>Payment Status:</td>
                                    <td class="text-end"><span class="badge bg-success">Paid</span></td>
                                </tr>
                            </table>
                        </div>

                        <div class="mb-4">
                            <h6>Booking Status</h6>
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="pending">Pending</option>
                                    <option value="confirmed" selected>Confirmed</option>
                                    <option value="cancelled">Cancelled</option>
                                    <option value="completed">Completed</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button class="btn-admin" onclick="updateStatus()">
                                <i class="fas fa-save"></i> Update Status
                            </button>
                            <button class="btn btn-outline-primary" onclick="viewInvoice()">
                                <i class="fas fa-receipt"></i> View Invoice
                            </button>
                            <button class="btn btn-outline-danger" onclick="cancelBooking()">
                                <i class="fas fa-times-circle"></i> Cancel Booking
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Quick Actions</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="edit.html" class="btn btn-warning">
                                <i class="fas fa-edit"></i> Edit Booking
                            </a>
                            <a href="../trips/show.html" class="btn btn-outline-info">
                                <i class="fas fa-suitcase"></i> View Trip
                            </a>
                            <a href="../users/show.html" class="btn btn-outline-secondary">
                                <i class="fas fa-user"></i> View Customer
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
