<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Online Course Registration') }}</title>
    <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	

    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    @yield('css')
   {{-- <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body style="background-color: #FFFFFF;">
    <div id="app">
        <div class="logo">
            <img class="img-fluid" src="{{ asset('images/header.jpg') }}"/>
        </div>
        <nav class="navbar navbar-expand-lg  navbar-light bg-primary">
          <a class="navbar-brand" href="#">{{Auth::User()->name}}</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <span class="break"></span>
              <li class="nav-item active">
              <a class="nav-link" href="{{'/'}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <span class="break"></span>
            
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.department.index')}}">Department</a>
            </li>
            <span class="break"></span>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.course.index')}}">Course</a>
            </li>
            
            <span class="break"></span>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.user.index')}}">User</a>
            </li>
            
            <span class="break"></span>
            
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.profile.index')}}">Profile</a>
            </li>
            <span class="break"></span>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </li>
            
        </ul>
    </div>
</nav>

<main class="py-4">
    @yield('content')
</main>

<!-- Footer -->
<footer class="page-footer font-small blue" style="background-color:#3490DC;">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="color:#fff">Copyright © 2019 
          <a style="color:#fff" href="#"> website.com</a>
        </div>
        <!-- Copyright -->
      
      </footer>
      <!-- Footer -->
</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>

{{--<script type="text/javascript">
    @if(Session::has('success'))

        toastr.success("{{Session::get('success')}}");
    @endif
</script> --}}

<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>

  <script>
    $(function () {
      $('#example1').DataTable()
      
    })
    </script>
    @yield('script')

</body>
</html>
