@extends('layouts.adminapp')
@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                        <div class="card-header">{{ __('Register') }}</div>
        
                        <div class="card-body">
                                <form method="POST" action="{{ route('admin.user.store') }}" enctype="multipart/form-data">
                                    @csrf
                                
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
        
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User Id') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="user_id" type="text" class="form-control{{ $errors->has('user_id') ? ' is-invalid' : '' }}" name="user_id" value="{{ old('user_id') }}" required autofocus>
        
                                        @if ($errors->has('user_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('user_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                        <label for="role_id" class="col-md-4 col-form-label text-md-right ">{{ __('Role') }}</label>
                              
                                        <div class="col-md-5">
                                          <select id="role_id" name="role_id" class="form-control {{ $errors->has('role_id') ? ' is-invalid' : '' }}">
                                          <option>--select Role--</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Student</option>
                                            <option value="3">Head</option>
                                            <option value="4">Provost</option>
                                            <option value="4">Accountant</option>
                              
                                          </select>
                                          @if ($errors->has('year'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('year') }}</strong>
                                          </span>
                                          @endif
                                        </div>
                                      </div>

                                
    
        
                               
        
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        
                                    <div class="col-md-6">
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
        
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        </div>
    </div>
</div>
@endsection
