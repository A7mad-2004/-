@extends('admin.layout.admin')

@section('title', ' trips')
@section('page-title', 'trips Management')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.html"> dashboard </a></li>
            <li class="breadcrumb-item active">Edit trip</li>
        </ol>
    </nav>
@endsection
@section('content')
    <div class="main-content">
        <h2>Edit Trip</h2>

        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Editing: Turkey Trip - 7 Days</h5>
            </div>
            <div class="card-body">
                <form id="editTripForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Trip Name *</label>
                            <input type="text" class="form-control" value="Turkey Trip - 7 Days" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Trip Type *</label>
                            <select class="form-control" required>
                                <option value="tourism" selected>Tourism</option>
                                <option value="hajj">Hajj</option>
                                <option value="umrah">Umrah</option>
                                <option value="business">Business</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Current Price</label>
                            <input type="number" class="form-control" value="2500" readonly>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">New Price</label>
                            <input type="number" class="form-control" value="2200">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Discount %</label>
                            <div class="input-group">
                                <input type="number" class="form-control" value="12" readonly>
                                <span class="input-group-text">%</span>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Available Seats</label>
                            <div class="alert alert-warning">
                                <i class="fas fa-exclamation-triangle"></i>
                                <strong>15 seats remaining</strong> out of 50
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Add More Seats</label>
                            <input type="number" class="form-control" min="0" placeholder="Enter additional seats">
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Trip Status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="active" checked>
                                <label class="form-check-label" for="active">
                                    <span class="badge bg-success">Active</span> - Visible to users
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="inactive">
                                <label class="form-check-label" for="inactive">
                                    <span class="badge bg-secondary">Inactive</span> - Hidden from users
                                </label>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Update Reason (Optional)</label>
                            <textarea class="form-control" rows="2" placeholder="Enter update reason..."></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn-admin">
                                <i class="fas fa-save"></i> Save Changes
                            </button>
                            <a href="index.html" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                            <button type="button" class="btn btn-outline-danger" onclick="showDeleteModal()">
                                <i class="fas fa-trash"></i> Delete Trip
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
