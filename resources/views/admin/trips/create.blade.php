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
     <!-- Success Message (if any) -->
            @if(session('success'))
                <div class="success-message">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif
            

    <div class="card">
        <div class="card-body">
            <form  action="{{ route('trips.store') }}" method="post" enctype="multipart/form-data">
                 @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Trip title *</label>
                        <input type="text" name="title" class="form-control" required placeholder="e.g., Turkey Trip - 7 Days">
                    </div>
                    <div class="col-md-6 mb-3">
                        <!-- <label for="destinations" class="form-label">Destination *</label>
                        <input list="destinations"  name="destination_id" class="form-control" placeholder="select">
                        <datalist id="destinations" >
                            @foreach($Destination as $des)
                            <option value="{{ $des->id }}">{{$des->name}}</option>
                            @endforeach
                        </datalist> -->
                        <label class="form-label"> destination </label>
                        <select name="destination_id" class="form-control" required>
                            <option value=""></option>
                            @foreach($Destination as $des)
                            <option value="{{ $des->id }}">{{$des->name}}</option>
                            @endforeach
                        </select>

                    </div>

                    <!-- <div class="col-md-6 mb-3">
                            <label class="form-label">Trip Type *</label>
                            <select class="form-control" required>
                                <option value="">Select Type</option>
                                <option value="tourism">Tourism</option>
                                <option value="hajj">Hajj</option>
                                <option value="umrah">Umrah</option>
                                <option value="business">Business</option>
                            </select>
                        </div> -->

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Departure Date *</label>
                        <input type="date" name="start_date" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Return Date *</label>
                        <input type="date" name="end_date" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Days *</label>
                        <input type="number" class="form-control" name="days" required>
                    </div>

                
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Adult Price ($) *</label>
                        <input type="number" name="Adult" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Child Price ($)</label>
                        <input type="number" name="Child" class="form-control"  required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Total Seats *</label>
                        <input type="number" name="capacity" class="form-control" min="1" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Price ($) *</label>
                        <input type="number" name="price" class="form-control" min="0" step="0.01" required>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="4" name="summary"></textarea>

                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label">status</label>
                        <select name="status" class="form-control">
                            <option value="Available" selected >Available</option>
                            <option value="published">Published</option>
                            <option value="Completed">Completed</option>
                        </select>

                    </div>



                    <div class="col-12 mb-3">
                        <label class="form-label">Main Image *</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn-admin">
                            <i class="fas fa-save"></i> Save Trip
                        </button>
                        <a  class="btn btn-secondary">
                            <i class="fas fa-times"></i> Cancel
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection