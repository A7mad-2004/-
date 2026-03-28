 @extends('auth.layout.app')
@section('content')


  <div class="container">
        <div class="main-content">
            <div class="auth-forms">
                <div class="form-container">
                    @if(session()->has('error'))
                        @if(session('error'))
                            <div class="alert alert-danger">
                                Password Or Email is incorrect
                            </div>
                        @endif
                    @endif
                    <h2 class="form-title"><i class="fas fa-user-plus"></i>login </h2>

                    <form id="registerForm" action="{{ route('authenticate.login') }} " method="post">
                        @csrf
                          <div class="form-group">
                            <label for="loginEmail"><i class="fas fa-envelope"></i>Email</label>
                            <input
                                type="email"
                                name="email"
                                id="loginEmail"
                                class="form-control"
                                placeholder="example@domain.com"
                                required>
                        </div>
                        @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror


                        <div class="form-group">
                            <label for="loginPassword"><i class="fas fa-lock"></i>Password</label>
                            <input
                                type="password"
                                id="loginPassword"
                                class="form-control"
                                placeholder="password "
                                name="password"
                                required>

                            <div class="forgot-password">
                                <a href="#">forget password </a>
                            </div>
                        </div>
                        @error('password')
                        <div class="text-danger mt-1"></div>
                        @enderror



                         <div class="form-group checkbox-group">
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-accent">login </button>

                        <div class="social-login">
                            <p class="divider">Or By </p>
                            <div class="social-buttons">
                                <button type="button" class="social-btn google">
                                    <i class="fab fa-google"></i> Google
                                </button>
                                <button type="button" class="social-btn facebook">
                                    <i class="fab fa-facebook"></i> Facebook
                                </button>
                            </div>
                        </div>

                        <div class="form-footer">
                            <p>Don't Have Acount <a href="{{route('signup')}}">Create An Acount  </a></p>
                        </div>
                    </form>
                </div>

@endsection
