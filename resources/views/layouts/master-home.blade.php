<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    

      
    
    
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    @yield('css')
    <link href="{{ URL::asset('css/layout.css') }}" rel="stylesheet">

 </head>

<body>
    @include('layouts.master-header')
    @include('layouts.master-sidebar')
    <div id="container">
      
  

        <div id="content">
                @yield('content')  
         </div>
    
    </div>

	
</body>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <!--materialize js cdn-->
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="{{ URL::asset('js/layout.js') }}"></script>
@yield('script')

@include('layouts.showerrors')
</html>