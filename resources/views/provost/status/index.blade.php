@extends('layouts.provostapp')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 form">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Student List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered ">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>year</th>
                            <th>term</th>
                            <th>session</th>
                            <th>Status</th>       
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                      @foreach($statuses as $status)
                        <tr>
                            <td>{{$status->student_name}}</td>
                          <td>{{$status->department_name}}</td>
                            <td>{{$status->year}}</td>
            
                            <td>{{$status->term}}</td>
                            <td>{{$status->session}}</td>
                            <td>
                              @if($status->provost_status == 2)
                             <span style="color:green; font-weight:bold"> Confirmed</span>  
                              @else
                              <span style="color:red;; font-weight:bold"> Unconfirmed</span>  
                             @endif
                            
                            </td>
                            
                           <td>
                             <button class="btn btn-info">
                                <a href="{{ route('provost.status.edit',$status->id) }}" class="btn btn-info btn-sm"><i class="material-icons">Confirm</i></a>
                             </button>

                             <button class="btn btn-info">
                                <a href="{{ route('provost.unconfirmed',$status->id) }}" class="btn btn-info btn-sm"><i class="material-icons">Unconfirm</i></a>
                              </button>
            
                            </td>
                      </tr>
                      @endforeach
                    </tbody>
                    
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
        </div>
    </div>
</div>
@endsection
