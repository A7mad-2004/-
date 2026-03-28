@extends('auth..layout.app')
  @section('content')
    <div class="container">
        <div class="main-content">
            <div class="auth-forms">
                <div class="form-container">
                    <h2 class="form-title"><i class="fas fa-user-plus"></i>  Sign Up and Create Account </h2>
                    <form id="registerForm" action="{{ route('register.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="fullName"><i class="fas fa-user"></i>Full  Name</label>
                            <input type="text" name="name" id="fullName" class="form-control" placeholder="Enter All Name"
                                   value="{{old('name')}}" required>
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i>Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="example@domain.com"
                                   value="{{old('email')}}"
                            required>
                        </div>

                        <div class="form-group">
                            <label for="phone"><i class="fas fa-phone"></i>Phone </label>
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="05xxxxxxxx"
                                   value="{{old('phone')}}" required>
                        </div>

                        <div class="form-group">
                            <label for="password"><i class="fas fa-lock"></i>Password </label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>

                        </div>
                        @error('password')
                        <div class="alert alert-danger">
                            is not match
                        </div>
                        @enderror

                        <div class="form-group">
                            <label for="password_confirmation"><i class="fas fa-lock"></i>Password Confirmation</label>
                            <input type="password" id= "password_confirmation" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required>
                        </div>



                        <div class="form-group checkbox-group">
                            <input type="checkbox" name="privacy" id="terms" >
                            <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                        </div>

                        <button type="submit" class="btn btn-accent">Create Acount</button>

                        <div class="form-footer">
                            <p>Do you Have Acount<a href="{{route('login')}}"> login </a></p>
                        </div>
                    </form>
                </div>





  @endsection
