@extends('layouts.adminapp')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 form">
                        <button class="btn btn-success">
                                <a href="{{ route('admin.department.create') }}" class="btn btn-success btn-sm"><i class="material-icons">Add New Department</i></a>
                             </button>

                  <div class="box">

                    @if(session('successMsg'))
                        <div class="alert alert-success">
                            <button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none'">×</button>
                            <span> {{ session('successMsg') }}</span>
                        </div>
                    @endif

                    <div class="box-header">
                      <h3 class="box-title">Department List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered ">
                        <thead>
                          <tr>
                            <th>Sl.</th>
                            <th>Department</th>
                               
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;?>
                      @foreach($departments as $department)
                        <tr>
                            <td>{{$i++}}</td>
                          <td>{{$department->name}}</td>
                        
                           <td>
                             <button class="btn btn-success">
                                <a  style="color:#fff;" href="{{ route('admin.department.edit',$department->id) }}"><i class="material-icons">Edit</i></a>
                             </button>

                             <form id="delete-form-{{ $department->id }}" action="{{ route('admin.department.destroy',$department->id) }}" style="display: none;" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $department->id }}').submit();
                                }else {
                                    event.preventDefault();
                                        }"><i class="material-icons">delete</i></button>
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
