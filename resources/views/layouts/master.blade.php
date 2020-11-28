
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('partials.meta')

    <!-- Bootstrap CSS -->
  @include('partials.style')


    <title>@yield('title')</title>
  </head>
  <body>
<!-- wrapper start-->
  <div class="wrapper">
  
 <!-- container start -->
       
        <div class="content">
        <!-- navbar start -->
           
 @include('partials.header')
 @include('partials.navbar')
            
      <!-- navbar end -->
          </div>
          <!-- content end -->

   
      
      <div class="container margin-top-20">
      
<!--sidebar start-->
         
        @include('partials.sidebar')
          
          
<!--          end of sidebar-->
          
          
          
  <div class="col-md-10">        
          
        
          
@yield('content')
      
          </div>   
      
      
     </div> 
     
      
      </div>
      
     
     @include('partials.icon-grid')       
<!--end of wrapper-->
      
  @include('partials.footer-col')
       @include('partials.testimonials')
         
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.5277143677677!2d91.78278451426985!3d22.37145504596312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6d8a3f832aed5ca3!2sFirozshah%20Colony%20City%20Corporation%20Girls%20High%20School!5e0!3m2!1sen!2sbd!4v1585912108973!5m2!1sen!2sbd" width="1200" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  @include('partials.footer')


     

 @include('partials.scripts')
       
  </body>
</html>