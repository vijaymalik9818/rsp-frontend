@extends(' layouts.auth')

@section('content')
    <!-- Our Compare Area -->
    <section class="our-compare pt60 pb60">
        <img src="images/icon/login-page-icon.svg" alt="" class="login-bg-icon wow fadeInLeft" data-wow-delay="300ms">
        <div class="container">
            <div class="row wow fadeInRight" data-wow-delay="300ms">
                {!! Form::open(['route'=>'login.post']) !!}
                    <div class="col-lg-6">
                    @if(session()->has('success'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session()->get('success') }}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="log-reg-form signup-modal form-style1 bgc-white p50 p30-sm default-box-shadow2 bdrs12">
                        <div class="text-center mb40">
                            <img class="mb25" src="images/header-logo2.svg" alt="">
                            <h2>Sign in</h2>
                            <p class="text">Sign in with this account across the following sites.</p>
                        </div>
                        <div class="mb25">
                            {!! Form::label('email','Email',['class'=>'form-label fw600 dark-color']) !!}
                            {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Enter email']) !!}
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb25">
                            {!! Form::label('password','Password',['class'=>'form-label fw600 dark-color']) !!}
                            {!! Form::password('password',['class'=>'form-control','placeholder'=>'Enter password']) !!}
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                            <label class="custom_checkbox fz14 ff-heading">Remember me <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <a class="fz14 ff-heading" href="/forgot-password">Lost your password?</a>
                        </div>
                        <div class="d-grid mb20">
                            <button class="ud-btn btn-thm" type="submit">Sign in <i class="fal fa-arrow-right-long"></i>
                            </button>
                        </div>
                        <div class="hr_content mb20">
                            <hr>
                            <span class="hr_top_text">OR</span>
                        </div>
{{--                        <div class="d-grid mb10">--}}
{{--                            <button class="ud-btn btn-white fw400" type="button">--}}
{{--                                <i class="fab fa-google"></i> Continue Google </button>--}}
{{--                        </div>--}}
{{--                        <div class="d-grid mb10">--}}
{{--                            <button class="ud-btn btn-fb fw400" type="button">--}}
{{--                                <i class="fab fa-facebook-f"></i> Continue Facebook </button>--}}
{{--                        </div>--}}
{{--                        <div class="d-grid mb20">--}}
{{--                            <button class="ud-btn btn-apple fw400" type="button">--}}
{{--                                <i class="fab fa-apple"></i> Continue Apple </button>--}}
{{--                        </div>--}}
                        <p class="dark-color text-center mb0 mt10">Not signed up? <a class="dark-color fw600" href="javascript:void(0)">Create an account.</a>
                        </p>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
    <a class="scrollToHome" href="javascript:void(0)">
        <i class="fas fa-angle-up"></i>
    </a>
@endsection
