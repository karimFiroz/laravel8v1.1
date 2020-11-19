@extends('layouts.master')

<?php echo "<br />"; ?>
        
        
        <title> Home Page - @yield('title')</title>


<?php echo "<br />"; ?>
        @section('title', 'Page Title')
        

    
    
    <body>
        
       
          <h1>Dashboard</h1>
        <?php echo "<br />"; ?>
      
        @yield('content')
        
        
        
        
        <?php echo "<br />"; ?> 
        
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection
<?php echo "<br />"; ?> 
        
        
        
@section('content')
    <p>This is my body content.</p>
@endsection
        
        
        
         Hello, {!! $name !!}.
        
        <?php echo "<br />"; ?>
        
        
        The current UNIX timestamp is {{ time() }}.
  
        <?php echo "<br />"; ?>
        
        
    {{'Hello echo using blade'}}
        
        
<?php echo "<br />"; ?>
        
        
     Hello  {{$name}}
        
 <?php echo "<br />"; ?>       
        
        
        
        
        
        
          
        <div class="container">
            @yield('content')
        </div>
      
 
  

        
        
    </body>
    
</html>


  