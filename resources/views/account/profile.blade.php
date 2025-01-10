@extends(' layouts.account')
@section('content')
    <div class="dashboard__content property-page bgc-f7">
        <div class="row pb40 d-block d-lg-none">
            <div class="col-lg-12">
                @include(' components.account._sidebar-mobile')
            </div>
        </div>
        <div class="row align-items-center pb40">
            <div class="col-lg-12">
                <div class="dashboard_title_area">
                    <h2>My Profile</h2>
                    <p class="text">We are glad to see you again!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
{{--                    <div class="col-xl-7">--}}
{{--                        <div class="profile-box position-relative d-md-flex align-items-end mb50">--}}
{{--                            <div class="profile-img position-relative overflow-hidden bdrs12 mb20-sm">--}}
{{--                                <img class="w-100" src="images/listings/profile-1.jpg" alt="">--}}
{{--                                <a href="javascript:void(0)" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Image" aria-label="Delete Item">--}}
{{--                                    <span class="fas fa-trash-can"></span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="profile-content ml30 ml0-sm">--}}
{{--                                <a href="javascript:void(0)" class="ud-btn btn-white2 mb30">Upload Profile Files <i class="fal fa-arrow-right-long"></i>--}}
{{--                                </a>--}}
{{--                                <p class="text">Photos must be JPEG or PNG format and least 2048x768</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-lg-12">
                        {!! Form::model($userProfile,['route'=>'profile.save','class'=>'form-style1']) !!}
                            @php
                                $userName = explode(' ',$user->name);
                            @endphp
                            <div class="row">
                                <div class="col-sm-6 col-xl-4">
                                    <div class="mb20">
                                        {!! Form::label('first_name','First Name',['class'=>'heading-color ff-heading fw600 mb10']) !!}
                                        {!! Form::text('first_name',@$userName[0],['class'=>'form-control','placeholder'=>'Name']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="mb20">
                                        {!! Form::label('last_name','Last Name',['class'=>'heading-color ff-heading fw600 mb10']) !!}
                                        {!! Form::text('last_name',@$userName[1],['class'=>'form-control','placeholder'=>'Name']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="mb20">
                                        {!! Form::label('display_name','Display Name',['class'=>'heading-color ff-heading fw600 mb10']) !!}
                                        {!! Form::text('display_name',null,['class'=>'form-control','placeholder'=>'Name']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="mb20">
                                        {!! Form::label('email','Email',['class'=>'heading-color ff-heading fw600 mb10']) !!}
                                        {!! Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'Enter email']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="mb20">
                                        {!! Form::label('phone','Phone',['class'=>'heading-color ff-heading fw600 mb10']) !!}
                                        {!! Form::text('phone',$user->phone,['class'=>'form-control','placeholder'=>'Phone']) !!}
                                    </div>
                                </div>
                                <hr/>
                                <h4>More about you</h4>
                                <p>Tell us more about you and your real estate needs.</p>
                                <div class="col-md-3">
                                    {!! Form::label('i_am','I am a') !!}
                                    {!! Form::select('i_am',\App\Models\User::$iama,null,['class'=>'form-control']) !!}
                                </div>
                                <div class="col-md-3">
                                    {!! Form::label('birth_year','Birth Year') !!}
                                    {!! Form::select('birth_year',\App\Models\User::getYears(),null,['class'=>'form-control']) !!}
                                </div>

                                <div class="col-md-3">
                                    {!! Form::label('gender','Gender') !!}
                                    {!! Form::select('gender',['male'=>'Male','female'=>'Female'], null,['class'=>'form-control','placeholder'=>'']) !!}
                                </div>
                                <div class="col-md-3">
                                    {!! Form::label('marital_status','Marital Status') !!}
                                    {!! Form::select('marital_status',\App\Models\User::$meritalStatus,null,['class'=>'form-control','placeholder'=>'Select']) !!}
                                </div>

                                <br/>

                                <h4 class="mt-3">Contact Information</h4>
                                <p>Keep your contact details up to date.</p>
                                <div class="col-md-4">
                                    {!! Form::label('country','Country') !!}
                                    {!! Form::select('country',\App\Models\User::$countries,null,['class'=>'form-control','placeholder'=>'City']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('province','Province') !!}
                                    {!! Form::select('province',\App\Models\User::$province,null,['class'=>'form-control','placeholder'=>'No preference']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('city','City') !!}
                                    {!! Form::text('city',null,['class'=>'form-control','placeholder'=>'City']) !!}
                                </div>
                                <div class="col-md-6 mt-2">
                                    {!! Form::label('home_phone','Home Phone') !!}
                                    {!! Form::text('home_phone',null,['class'=>'form-control','placeholder'=>'Enter home phone']) !!}
                                </div>
                                <div class="col-md-6 mt-2">
                                    {!! Form::label('mobile_number','Mobile Phone') !!}
                                    {!! Form::text('mobile_number',null,['class'=>'form-control','placeholder'=>'Enter mobile phone']) !!}
                                </div>


                                <div class="col-md-12 mt-3">
                                    <div class="text-end">
                                        {!! Form::submit('Save Details',['class'=>'ud-btn btn-dark']) !!}
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                    <h4 class="mt-3">Communications</h4>
                    <p>Stay connected with REALTOR.ca by subscribing to emails.</p>
                    <form class="form-style1">
                        <div class="row">
                            <div class="col-sm-6 col-xl-4">
                                <div class="mb20">
                                    {!! Form::label('communication_language','Communication Language',['class'=>'heading-color ff-heading fw600 mb10']) !!}
                                    {!! Form::select('communication_language',['English'=>'English','French'=>'French'],null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb20">
                                    <label>
                                        {!! Form::checkbox('send_updates',1,null,['class'=>'form-check-input']) !!}
                                        &nbsp;Send me updates on the latest REALTOR.ca features, promotions, trends and insights.
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb20">
                                    <label>
                                        {!! Form::checkbox('confirm_email',1,null,['class'=>'form-check-input']) !!}
                                        &nbsp;Send me a confirmation email when I contact the REALTOR
                                    </label>
                                </div>
                            </div>
                            <br/>
                            <br/>
                            <div class="col-sm-12">
                                <div class="mb20">
                                    <label>
                                        {!! Form::checkbox('add_my_notes',1,null,['class'=>'form-check-input']) !!}
                                        &nbsp;Yes, always add My Notes to email I send to friends.
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-end">
                                    <a class="ud-btn btn-dark" href="javascript:void(0)">Save <i class="fal fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                    <h4 class="title fz17 mb30">Change password</h4>
                    <form class="form-style1">
                        <div class="row">
                            <div class="col-sm-6 col-xl-4">
                                <div class="mb20">
                                    <label class="heading-color ff-heading fw600 mb10">Old Password</label>
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xl-4">
                                <div class="mb20">
                                    <label class="heading-color ff-heading fw600 mb10">New Password</label>
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="mb20">
                                    <label class="heading-color ff-heading fw600 mb10">Confirm New Password</label>
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-end">
                                    <a class="ud-btn btn-dark" href="javascript:void(0)">Change Password <i class="fal fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
