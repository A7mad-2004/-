@extends('admin.layout.admin')

@section('title', 'Add new trip')
@section('page-title', 'Add new trip')


@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.html"> dashboard </a></li>
            <li class="breadcrumb-item active"> Trip create</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="main-content">
<h1> create new trip </h1>

        <div class="card">
            <div class="card-body">
                <form id="tripForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Trip title *</label>
                            <input type="text" class="form-control" required placeholder="e.g., Turkey Trip - 7 Days">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Trip Type *</label>
                            <select class="form-control" required>
                                <option value="">Select Type</option>
                                <option value="tourism">Tourism</option>
                                <option value="hajj">Hajj</option>
                                <option value="umrah">Umrah</option>
                                <option value="business">Business</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Departure Date *</label>
                            <input type="date" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Return Date *</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Days *</label>
                            <input type="number" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">From City *</label>
                            <input type="text" class="form-control" required placeholder="e.g., Riyadh">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">To City *</label>
                            <input type="text" class="form-control" required placeholder="e.g., Istanbul">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Adult Price ($) *</label>
                            <input type="number" class="form-control" min="0" step="0.01" required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Child Price ($)</label>
                            <input type="number" class="form-control" min="0" step="0.01">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Total Seats *</label>
                            <input type="number" class="form-control" min="1" required>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Meals Included</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Breakfast</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Lunch</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Dinner</label>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Main Image *</label>
                            <input type="file" class="form-control"  required>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn-admin">
                                <i class="fas fa-save"></i> Save Trip
                            </button>
                            <a href="index.html" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
