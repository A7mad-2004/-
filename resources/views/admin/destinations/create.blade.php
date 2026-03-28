@extends('admin.layout.admin')

@section('title', ' destinations')
@section('page-title', 'Add  destinations')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"> destinations </li>
        </ol>
    </nav>
@endsection
@section('content')
    <div class="container">
        <div class="main-content">
            <!-- Page Header -->
            <div class="page-header">
                <h1 class="page-title">

                    Add New Destination
                </h1>

            </div>

            <!-- Success Message (if any) -->
            @if(session('success'))
                <div class="success-message">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form Container -->
            <div class="form-container">
                <form action="{{route('destinations.store')}}" method="POST" enctype="multipart/form-data" id="destinationForm">
                    @csrf
                    <!-- Basic Information -->
                    <div class="form-group">
                        <label for="name" class="form-label">
                            <i class="fas fa-tag"></i>
                            Destination Name <span class="required">*</span>
                        </label>
                        <input type="text"
                               id="name"
                               name="name"
                               class="form-control"
                               placeholder="e.g., Paris, France"
                               value="{{ old('name') }}"
                               required>

                        @error('name')
                        <div class="error-message">
                            <i class="fas fa-exclamation-circle"></i>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-row" style="display: flex; gap: 20px; margin-bottom: 25px;">
                        <div class="form-group" style="flex: 1;">
                            <label for="country" class="form-label">
                                <i class="fas fa-globe"></i>
                                Country <span class="required">*</span>
                            </label>
                            <input type="text"
                                   id="country"
                                   name="country"
                                   placeholder="e.g., France"
                                   value="{{old('country')}}"
                                   required
                                   class="form-control"
                                   >
                        </div>

                        <div class="form-group" style="flex: 1;">
                            <label for="city" class="form-label">
                                <i class="fas fa-city"></i>
                                City <span class="required">*</span>
                            </label>
                            <input type="text"
                                   id="city"
                                   name="city"
                                   class="form-control"
                                   placeholder="e.g., Paris"
                                   value="{{ old('city') }}"
                                   required>
                        </div>
                    </div>



                    <!-- Description -->
                    <div class="form-group">
                        <label for="description" class="form-label">
                            <i class="fas fa-align-left"></i>
                            Description <span class="required">*</span>
                        </label>
                        <textarea id="description"
                                  name="description"
                                  class="form-control"
                                  placeholder="Describe this destination... (minimum 100 characters)"
                                  rows="5"
                                  required>{{ old('description') }}</textarea>

                        @error('description')
                        <div class="error-message">
                            <i class="fas fa-exclamation-circle"></i>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-image"></i>
                            Destination Image <span class="required">*</span>
                        </label>

                        <input type="file" class="form-control" name="destination_image"  required>

                        @error('image')
                        <div class="error-message">
                            <i class="fas fa-exclamation-circle"></i>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


              <br>
                    <div class="form-group">
                        <div class="checkbox-group">
                            <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                            <label for="is_active">Active</label>
                        </div>

                    </div>
                    <br>

                    <!-- Form Buttons -->
                    <div class="form-buttons">
                        <div class="col-12">
                            <button type="submit" class="btn-admin">
                                <i class="fas fa-save"></i> Save destination
                            </button>
                            <a href="{{route('destinations.index')}}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
