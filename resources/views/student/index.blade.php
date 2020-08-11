@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3 class="text-center" style="color: green; font-weight:bold;">Hello, <strong style="color: red;">{{Auth::User()->name}}</strong>  Welcome to NSTU Online Course Registration!!</h3>


            <h5 class="text-justify rulehead">Read The following information and complete your online course registration accordingly.</h5>

            <ol class="text-justify rule">
               <li>You should change your password first from [profile]</li>
               <li>Check offering course information of current semester [Offered Course List]</li> 
               <li>Fill up your course registration form by clicking on checkbox and then submit your registration form.</li> 
               <li>After submitting your registration form you should clear your all Hall's Due from your resident hall office. Need to clearance confirmation from your hall provost.</li> 
               <li>Print your registration card using [Print Registration Dorm] that is locate under registration link</li> 

               <li>After Printing your registration card you should meet with Advisor for confirming course registration.</li> 
               <li>Now you should check your registration status regularly by clicking [Check Status]</li>
               <li>When all of your status (ie. Hall, Advisor and Head) are approved then you can print your final copy of your registration card</li>
               <li>Now you have to submit you print copy to your department.</li>
            </ol>
            
        </div>
    </div>
</div>
@endsection
