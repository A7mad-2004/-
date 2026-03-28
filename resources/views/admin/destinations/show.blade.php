@extends('admin.layout.admin')

@section('title', 'Destination Details')
@section('page-title', 'Destination Details')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('destinations.index') }}">Destinations</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $destination->cuntry }} - {{ $destination->city }}</li>
@endsection

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="page-title mb-1">Destination</h1>
                <p class="text-muted mb-0">{{$destination->name }}</p>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('destinations.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left"></i> Back
                </a>

                <a href="{{route('destinations.edit',$destination->id)}}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Edit
                </a>

                <form action="{{route('destinations.destroy',$destination->id)}}" method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this destination?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>

        <div class="row g-4">
            <!-- Left: Image + status -->
            <div class="col-12 col-lg-5">
                <div class="card shadow">
                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h4 class="mb-0">{{$destination->name}}</h4>

                            @if($destination->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Not Active</span>
                            @endif
                        </div>

                        <img
                            src="{{ $destination->image_url }}"
                            class="img-fluid rounded border"
                            style="width: 100%; height: 280px; object-fit: cover;"
                            alt="destination"
                        />

                        <div class="mt-3 d-flex justify-content-between text-muted">
                            <small><i class="fas fa-calendar"></i> Created: {{ $destination->created_at }}</small>
                            <small><i class="fas fa-clock"></i> Updated: {{ $destination->updated_at }}</small>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Right: Details -->
            <div class="col-12 col-lg-7">
                <div class="card shadow">
                    <div class="card-header">
                        <strong><i class="fas fa-circle-info"></i> Destination Info</strong>
                    </div>

                    <div class="card-body">

                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <div class="p-3 rounded border bg-light">
                                    <div class="text-muted small mb-1">
                                        <i class="fas fa-globe text-primary"></i> Country
                                    </div>
                                    <div class="fw-semibold">{{ $destination->cuntry }}</div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="p-3 rounded border bg-light">
                                    <div class="text-muted small mb-1">
                                        <i class="fas fa-city text-primary"></i> City
                                    </div>
                                    <div class="fw-semibold">{{ $destination->city }}</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="p-3 rounded border">
                                    <div class="text-muted small mb-2">
                                        <i class="fas fa-align-left text-primary"></i> Description
                                    </div>
                                    <div style="white-space: pre-wrap; word-break: break-word; overflow-wrap: anywhere;">
                                        {{ $destination->description }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="p-3 rounded border bg-light d-flex align-items-center justify-content-between">
                                    <div>
                                        <div class="text-muted small">
                                            <i class="fas fa-toggle-on text-primary"></i> Status
                                        </div>
                                        <div class="fw-semibold">
                                            {{ $destination->is_active ? 'Active' : 'Not Active' }}
                                        </div>
                                    </div>
{{--                                      js--}}
                                    <form action="" method="POST">
                                        @csrf
                                        <button class="btn btn-admin">
                                            <i class="fas fa-repeat"></i> Toggle Status
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
