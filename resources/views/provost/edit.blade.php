@extends('layouts.provostapp')
@section('content')
<div class="container" >
  <div class="row justify-content-center">
    <div class="col-md-12 content">
        <h3>UPDATE YOUR PERSONAL INFORMATION</h3>

        <form action="{{ route('provost.profile.update',$profile->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('Student ID') }}</label>

                <div class="col-md-5">
                    <input id="user_id" type="text" class="form-control{{ $errors->has('user_id') ? ' is-invalid' : '' }}" name="user_id" value="{{$profile->user_id }}" disabled>

                    @if ($errors->has('user_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('user_id') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                <div class="col-md-5">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $profile->name }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-5">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $profile->email }}" required>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="contact_no" class="col-md-4 col-form-label text-md-right">{{ __('Contact No.') }}</label>

                <div class="col-md-5">
                    <input id="contact_no" type="text" class="form-control{{ $errors->has('contact_no') ? ' is-invalid' : '' }}" name="contact_no" value="{{ $profile->contact_no }}" required>

                    @if ($errors->has('contact_no'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('contact_no') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-5">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-5">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-4 offset-md-5">
                    <button  type="submit" class="btn btn-primary btn-block">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>
        </form>
        
    </div>
</div>
</div>
@endsection


