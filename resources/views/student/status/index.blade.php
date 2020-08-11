@extends('layouts.app')
@section('content')
<div class="container" >
  <div class="row justify-content-center">
    <div class="col-md-12 content">
      <!--  <h3>show message</h3> -->

    
        <div class="circle list-inline-item">
            <h3 style="color:cornsilk;">Payment Status</h3>
            <h5>@if($status->payment_status==2)
                <span style="color:greenyellow; font-weight:bold;">Complete</span>
                @else
                <span style="color:red;">Incomplete</span>
                @endif
            
            </h5>
           
        </div>

        <div class="circle list-inline-item">
            <h3 style="color:cornsilk;">Head Approval Status</h3>
            <h5>@if($status->head_status==2)
                <span style="color:greenyellow; font-weight:bold">Approved</span>
                @else
                <span style="color:red;">Unapproved</span>
                @endif
            
            </h5>
        </div>

        <div class="circle circle list-inline-item">
            <h3 style="color:cornsilk;font-size:15px;">Provost Approval status</h3>
            <h5>@if($status->provost_status==2)
                    <span style="color:greenyellow; font-weight:bold">Approved</span>
                    @else
                    <span style="color:red;">Unapproved</span>
                    @endif
                
                </h5>
        </div>

        

        
       
        
    </div>
</div>
</div>

@endsection


