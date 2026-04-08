@extends('admin.layout.admin')

@section('title', ' trips')
@section('page-title', 'trips Management')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.html"> dashboard </a></li>
        <li class="breadcrumb-item active"> trips Management</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="main-content">
    <h2>Trips Management</h2>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">All Trips</h5>
                <a href="{{ route('trips.create') }}" class="btn-admin">
                    <i class="fas fa-plus"></i> Add New Trip
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="Post">
                <!-- Search and Filter -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Search trips...">
                    </div>
                    <div class="col-md-3">
                        <select class="form-control">
                            <option value="">All Types</option>
                            <option value="tourism">Tourism</option>
                            <option value="hajj">Hajj</option>
                            <option value="umrah">Umrah</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control">
                            <option value="">All Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button class="btn-admin w-100">
                            <i class="fas fa-filter"></i> Filter
                        </button>
                    </div>

            </form>
        </div>


        <!-- Trips Table -->
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Trip Name</th>
                        <th>Dates</th>
                        <th>Price</th>
                        <th>Seats</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trips as $trip)
                    <tr> 
                        <td>{{ $trip -> id }}</td>
                        <td>{{ $trip -> image_url }}</td>
                        <td>{{ $trip -> title }}</td>
                        <td>{{ $trip -> start_date }} to {{ $trip -> end_date }}</td>
                        <td>{{ $trip -> price }}</td>
                        <td>{{ $trip ->bookings_count }}/{{ $trip -> capacity }}</td>
                        <td>{{ $trip -> status }}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('trips.edit', $trip->id) }}" class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('trips.show', $trip->id) }}" class="btn btn-outline-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <form action="{{ route('trips.destroy', $trip->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this trip?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form> 
                            </div>
                        </td>    



                    </tr>

                    @endforeach




                    <tr>
                        <td>3</td>
                        <td>
                            <img src="https://via.placeholder.com/80x50" alt="Trip"
                                class="img-thumbnail" style="width: 80px; height: 50px;">
                        </td>
                        <td>
                            <strong>Malaysia Trip - 12 Days</strong>
                        </td>
                        <td><span class="badge bg-success">Tourism</span></td>
                        <td>
                            2024-08-10<br>
                            <small>to 2024-08-21</small>
                        </td>
                        <td>
                            <del class="text-muted">$4,500</del><br>
                            <strong class="text-danger">$4,000</strong>
                        </td>
                        <td>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-danger" style="width: 17%;"></div>
                            </div>
                            <small>5/30 seats</small>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="edit.html" class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="show.html" class="btn btn-outline-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <button class="btn btn-outline-danger" onclick="deleteTrip(3)">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>
                            <img src="https://via.placeholder.com/80x50" alt="Trip"
                                class="img-thumbnail" style="width: 80px; height: 50px;">
                        </td>
                        <td>
                            <strong>Hajj Trip - 15 Days</strong>
                        </td>
                        <td><span class="badge bg-info">Hajj</span></td>
                        <td>
                            2024-11-05<br>
                            <small>to 2024-11-19</small>
                        </td>
                        <td>
                            <strong>$12,000</strong>
                        </td>
                        <td>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-success" style="width: 90%;"></div>
                            </div>
                            <small>180/200 seats</small>
                        </td>
                        <td><span class="badge bg-secondary">Inactive</span></td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="edit.html" class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="show.html" class="btn btn-outline-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <button class="btn btn-outline-danger" onclick="deleteTrip(4)">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- Stats Summary -->
<div class="row mt-4">
    <div class="col-md-3">
        <div class="stat-card">
            <div class="d-flex align-items-center">
                <div class="stat-icon" style="background: #e3f2fd;">
                    <i class="fas fa-suitcase text-primary"></i>
                </div>
                <div>
                    <div class="text-muted">Active Trips</div>
                    <div class="h4 mb-0">12</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card">
            <div class="d-flex align-items-center">
                <div class="stat-icon" style="background: #f3e5f5;">
                    <i class="fas fa-calendar text-purple"></i>
                </div>
                <div>
                    <div class="text-muted">Upcoming Trips</div>
                    <div class="h4 mb-0">8</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card">
            <div class="d-flex align-items-center">
                <div class="stat-icon" style="background: #e8f5e9;">
                    <i class="fas fa-users text-success"></i>
                </div>
                <div>
                    <div class="text-muted">Total Bookings</div>
                    <div class="h4 mb-0">156</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card">
            <div class="d-flex align-items-center">
                <div class="stat-icon" style="background: #fff3e0;">
                    <i class="fas fa-star text-warning"></i>
                </div>
                <div>
                    <div class="text-muted">Featured Trips</div>
                    <div class="h4 mb-0">4</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection