@extends('layouts.adminapp')
@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Add New Department</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('admin.department.store') }}" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                <a href="{{ route('admin.department.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
           
        </div>
    </div>
</div>
@endsection
