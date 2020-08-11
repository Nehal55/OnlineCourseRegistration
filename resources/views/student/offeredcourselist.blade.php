@extends('layouts.app')

@section('content')
<div class="container" >
  <div class="row justify-content-center">
    <div class="col-md-12 content">
        <h3>SELECT YEAR/SEMESTER FOR CHECKING OFFERED COURSE INFORMATION IN THIS SEMESTER</h3>

        <form action="{{ route('student.courselist') }}" method="POST" enctype="multipart/form-data">
          @csrf

            <div class="form-group row">
                <label for="studentid" class="col-md-4 col-form-label text-md-right">{{ __('YEAR') }}</label>
          
                <div class="col-md-6">
                    <select  name="year" class="form-control" required>
                    <option>select year</option>
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>

                  </select>
              </div>
          </div>

          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('SEMESTER') }}</label>

            <div class="col-md-6">
                <select name="term" class="form-control" required>
                    <option>select semester</option>
                    <option value="1">1st Semester</option>
                    <option value="2">2nd Semester</option>

              </select>
          </div>
      </div>



      <div class="form-group row">
        <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('DEPARTMENT') }}</label>

        <div class="col-md-6">
            <select name="department_id" class="form-control" required>
              <option name="department_id">select department</option>
              @foreach($departments as $department)
              <option value="{{$department->id}}">{{$department->name}}</option>
              
              @endforeach
          </select>
      </div>
  </div>



  <div class="form-group row mb-0">
    <div class="col-md-4 offset-md-5">
        <button  type="submit" class="btn btn-primary btn-block">
            {{ __('Check Offered Course') }}
        </button>
    </div>
</div>
</form>

</div>
</div>
@if($flag == 1)
  <div class="container" >
    <div class="row justify-content-center">
      <div class="col-md-12 content">
        <h3>DETAILS REGULAR COURSE INFORMATION FOR THIS SEMESTER</h3>
        <div class="card-content table-responsive">
          <table id="table" class="table table-bordered table-hover"  cellspacing="0" width="100%">
            <thead class="text-primary">
              <th>Course Code</th>
              <th>Course Title</th>
              <th>Credit Hour</th>
              <th>Year</th>
              <th>Semester</th>
            </thead>
            <tbody>
  
              <?php $result = 0 ?>
  @foreach($courses as $course)
              <tr>
                <td>{{$course->code}}</td>
                <td>{{$course->name}}</td>
              <td>{{$course->credit}}</td>
              <td>{{$course->year}}</td>
                <td>{{$course->term}}</td>
              </tr>
              <?php $result += $course->credit?>
  @endforeach
            </tbody>
            <tfoot>
              <td></td>
              <td class="text-right "><span class="bg-success" style="font-weight: bold;padding: 10px;">Total Credit</span></td>
            <td>{{$result}}.00</td>
              <td></td>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

@endif

</div>
@endsection