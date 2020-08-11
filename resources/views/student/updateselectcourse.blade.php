@extends('layouts.app')

@section('content')
<div class="container" >
  <div class="row justify-content-center">
    <div class="col-md-12 content">
      <div class="text-center">
        <h5 class="font-weight-bold">Department: Information and Communication Engineering</h5>
        <h5 class="font-weight-bold">Year: 1  Semester: 1</h5>
        <h5 class="font-weight-bold">Session: 2014-2015</h5>
      </div> 

      <h3>SELECT YOUR COURSES FOR REGISTRATION IN THIS SEMESTER</h3>

      <h5 class="font-weight-bold">Course List</h5>


      <form action="{{ route('student.selectcourse.update',Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <?php $increment =1; ?>
        @foreach($courses as $course)
          <div class="form-check" style="margin-top: 10px;">
          <span style="margin-right: 35px;"> {{$increment++}}</span>
          <input class="form-check-input" type="checkbox" name="course_id[]" value="{{$course->id}}" id="defaultCheck1" 
          
          @foreach($finds as $find)
          @if($find == $course->id) checked
          @endif
          @endforeach

          >
            <label class="form-check-label" style="margin-left:15px;" for="defaultCheck1">
              {{$course->name}}
              
             
            </label>
          </div>
        @endforeach

        

        <div class="form-group row mb-0" style="margin-top: 30px;">
          <div class="col-md-2 offset-md-4">
            <button  type="submit" class="btn btn-primary btn-block">
              {{ __('Register Now') }}
            </button>
          </div>
        </div>
        
      </form>
    </div>
  </div>
</div>
@endsection
