@extends('layouts.adminapp')
@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Add New Course</h4>
                        </div>
                        <form method="POST" action="{{ route('admin.course.store') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group row">
                                    <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Course code') }}</label>
                    
                                    <div class="col-md-5">
                                        <input id="code" type="text" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" >
                    
                                        @if ($errors->has('code'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('code') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                    
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course name') }}</label>
                    
                                    <div class="col-md-5">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  required autofocus>
                    
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                    
                                <div class="form-group row">
                                    <label for="department_id" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>
                    
                                    <div class="col-md-5">
                                        <select id="department_id" name="department_id" class="form-control {{ $errors->has('department_id') ? ' is-invalid' : '' }}">
                                        
                                        <option>--select department--</option>
                                          @foreach($departments as $department)
                                          <option value="{{$department->id}}">{{$department->name}}</option>
                                          @endforeach
                        
                                        </select>
                                        @if ($errors->has('department_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('department_id')}}</strong>
                                        </span>
                                        @endif
                                      </div>
                                </div>
                    
                                <div class="form-group row">
                                    <label for="year" class="col-md-4 col-form-label text-md-right ">{{ __('YEAR') }}</label>
                          
                                    <div class="col-md-5">
                                      <select id="year" name="year" class="form-control {{ $errors->has('year') ? ' is-invalid' : '' }}">
                                      <option>--select year--</option>
                                        <option value="1">1st Year</option>
                                        <option value="2">2nd Year</option>
                                        <option value="3">3rd Year</option>
                                        <option value="4">4th Year</option>
                          
                                      </select>
                                      @if ($errors->has('year'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('year') }}</strong>
                                      </span>
                                      @endif
                                    </div>
                                  </div>
                    
                    
                                  <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Term') }}</label>
                          
                                    <div class="col-md-5">
                                      <select id="term" name="term" class="form-control {{ $errors->has('term') ? ' is-invalid' : '' }}">
                                      <option >--select term--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                      </select>
                                      @if ($errors->has('term'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('term') }}</strong>
                                      </span>
                                      @endif
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                        <label for="credit" class="col-md-4 col-form-label text-md-right">{{ __('Credit') }}</label>
                                
                                        <div class="col-md-5">
                                            <select id="credit" name="credit" class="form-control {{ $errors->has('credit') ? ' is-invalid' : '' }}">
                                            <option >--select credit--</option>
                                            <option value="1">1.00</option>
                                            <option value="2">2.00</option>
                                            <option value="3">3.00</option>
                                            
                                            </select>
                                            @if ($errors->has('credit'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('credit') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                    
                               
                                
                                
                                
                    
                               
                                <div class="form-group row mb-0">
                                    <div class="col-md-4 offset-md-5">
                                        <button  type="submit" class="btn btn-primary btn-block">
                                            {{ __('Add') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
           
        </div>
    </div>
</div>
@endsection
