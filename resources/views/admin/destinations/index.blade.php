@extends('admin.layout.admin')

@section('title', ' destinations')
@section('page-title', ' destinations ')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"> destinations </li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="container">
    <!-- Header -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1 class="page-title">
                    Destinations
                </h1>
                <p class="text-muted">Total: 8 destinations</p>
            </div>
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('destinations.create') }}" class="btn-admin">
                        <i class="fas fa-plus"></i> Add New destination
                    </a>
                </div>
            </div>

        </div>
        @if(session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i>
               {{ session('success') }}
            </div>
        @endif

    </div>

    <!-- Destinations Grid -->
    <!-- Destinations Grid -->
    <div class="row g-4">
        @foreach($destinations as $des)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card destination-card h-100 shadow">
                    <div class="card-body d-flex flex-column">

                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h5 class="card-title mb-0">
                                {{ $des->name }}
                            </h5>

                            @if($des->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary"> Inactive</span>
                            @endif
                        </div>

                        <img
                            src="{{ $des->image_url }}"
                            class="img-fluid rounded border mb-3"
                            style="height: 180px; object-fit: cover;"
                            alt="destination"
                        >

                        <div class="destination-info mb-3">
                            <p class="mb-1">
                                <i class="fas fa-city text-primary"></i>
                                <strong>City:</strong> {{ $des->city }}
                            </p>

                            <p class="mb-1">
                                <i class="fas fa-globe text-primary"></i>
                                <strong>Country:</strong> {{ $des->cuntry }}
                            </p>
                            <p class="mb-1">
                                <i class="fas fa-align-left text-primary"></i>
                                <strong>Description:</strong>
                                <span class="text-muted"
                                      style="display: -webkit-box;
                                            -webkit-line-clamp: 2;   /* عدد الأسطر */
                                            -webkit-box-orient: vertical;
                                             overflow: hidden;"
                                >
                                    {{$des->description}}
                                </span>
                            </p>
                        </div>

                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="fas fa-calendar"></i> {{ $des->created_at->format('d-m-y') }}
                            </small>


{{--                            action --}}
                            <div class="action-buttons">
                                <a href="{{ route('destinations.show', $des->id) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a href="{{ route('destinations.edit', $des->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('destinations.destroy',$des-> id )}} " method="post"
                                      onsubmit="return confirm('Are you sure you want to delete this destination?')"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                </form>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

{{--    <div class="d-flex justify-content-center mt-4">--}}
{{--        <nav>--}}
{{--            <ul class="pagination pagination-sm">--}}
{{--                <li class="page-item {{ $destinations->onFirstPage() ? 'disabled' : '' }}">--}}
{{--                    <a class="page-link" href="{{ $destinations->previousPageUrl() }}">&lt;</a>--}}
{{--                </li>--}}

{{--                @for ($i = 1; $i <= $destinations->lastPage(); $i++)--}}
{{--                    <li class="page-item {{ $destinations->currentPage() == $i ? 'active' : '' }}">--}}
{{--                        <a class="page-link" href="{{ $destinations->url($i) }}">{{ $i }}</a>--}}
{{--                    </li>--}}
{{--                @endfor--}}

{{--                <li class="page-item {{ $destinations->hasMorePages() ? 'disabled' : '' }}">--}}
{{--                    <a class="page-link" href="{{ $destinations->nextPageUrl() }}">&gt;</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
{{--    </div>--}}

    <div class="d-flex justify-content-center align-items-center gap-3 mt-4">
        {{ $destinations->links() }}
    </div>

@endsection
