@extends('layouts.app')
@section('css')
<link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

@endsection
@section('content')
<div class="container" >
  <div class="row justify-content-center">
    <div class="col-md-12 content">
      <h3>SELECT YEAR/SEMESTER AND SESSION FOR COURSE REGISTRATION IN THIS SEMESTER</h3>

      <form action="{{ route('student.register.update',$updateregi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group row">
          <label for="studentid" class="col-md-4 col-form-label text-md-right ">{{ __('YEAR') }}</label>

          <div class="col-md-5">
            <select id="year" name="year" class="form-control {{ $errors->has('year') ? ' is-invalid' : '' }}">
            <option value="{{$updateregi->year}}">
              @if($updateregi->year == 1)
                1st Year
              @elseif($updateregi->year == 2)
                2nd Year
              @elseif($updateregi->year == 3)
                3rd Year
              @elseif($updateregi->year == 2)
                4th Year
              @endif
            
            
            </option>
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
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('SEMESTER') }}</label>

          <div class="col-md-5">
            <select id="term" name="term" class="form-control {{ $errors->has('term') ? ' is-invalid' : '' }}">
            <option value="{{$updateregi->term}}">
              @if($updateregi->term == 1)
              1st Semester
              @elseif($updateregi->term == 2)
              2nd Semester
              @endif
            
            </option>
              <option value="1">1st Semester</option>
              <option value="2">2nd Semester</option>

            </select>
            @if ($errors->has('term'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('term') }}</strong>
            </span>
            @endif
          </div>
        </div>

        <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('SESSION') }}</label>

          <div class="col-md-5">
          <input type="text" id="session" value="{{$updateregi->session}}" class="form-control {{ $errors->has('session') ? ' is-invalid' : '' }}" placeholder="2014-2015p" name="session">
          
            @if ($errors->has('session'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('session') }}</strong>
            </span>
            @endif
        </div>
        </div>

        <div class="form-group row">
          <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('DEPARTMENT') }}</label>

          <div class="col-md-5">
            <select id="department_id" name="department_id" class="form-control {{ $errors->has('department_id') ? ' is-invalid' : '' }}">
            <option value="{{$updateregi->department_id}}">{{$deptname->name}}</option>
              @foreach($departments as $department)
            <option value="{{$department->id}}">{{$department->name}}</option>
              @endforeach
            </select>

            @if ($errors->has('department_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('department_id') }}</strong>
            </span>
            @endif
          </div>
        </div>


        <div class="form-group row">
          <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('RESIDIENT HALL NAME') }}</label>

          <div class="col-md-5">
            <select id="halls_id" name="halls_id" class="form-control {{ $errors->has('halls_id') ? ' is-invalid' : '' }}">
            <option value="{{$updateregi->halls_id}}">{{$hallname->name}}</option>
        @foreach($halls as $hall)
            <option value="{{$hall->id}}">{{$hall->name}}</option>
        @endforeach
            </select>

            @if ($errors->has('halls_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('halls_id') }}</strong>
            </span>
            @endif
          </div>
        </div>

        <div class="form-group row mb-0">
          <div class="col-md-2 offset-md-4">
            <button  type="submit" class="btn btn-primary btn-block">
              {{ __('Submit') }}
            </button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection
@section('js')
<script src="{{asset('js/toastr.min.js')}}"></script>

<script type="text/javascript">
    @if(Session::has('success'))

        toastr.success("{{Session::get('success')}}");
    @endif
</script>
@endsection