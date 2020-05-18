<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>KKT HOMES</title>

  
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style01.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">




      <style>
              td{

              color: black;
              font-weight: bold;

           }


      </style>
 
</head>

<body>
  <section id="container">
    
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="/index" class="logo"><b>KKT<span>HOMES</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
      <li><a class="logout" href="{{route('logout')}}">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="images/a2.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">KKT HOMES</h5>
          <li class="mt">
            <a href="/message">
              <i class="fa fa-home"></i>
              <span>Message</span>
              </a>
          </li>
		  
         
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
   
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3>  Requests</br></h3>
        <div class="row mt">
          <div class="col-lg-12">
          
     
     <form class="form-horizontal" >
      
      <div class="form-group">
      <div class="table-responsive">
      
      <table class="table table-striped">
      
      <tr>       
        <td>Id</td>
        <td>Name </td>
        <td>Phone Number</td>
        <td>Email </td>
        <td>Message</td>       
        <td>Action</td>
        <td></td>

        
      </tr>
      
      @foreach($messages as $message)
      <tr>    
     
        <td>{{$message->id}}</td>
        <td>{{$message->name}} </td> 
        <td>{{$message->phone_number}} </td>
        <td>{{$message->email}} </td>
        <td>{{$message->messages}}</td>          
     
       
      
       
       <td>@if(!$message->Read)
       <a button class="btn_check"onclick="return confirm('Do You want to Read?')" href="/markasapproved/{{$message->id}}"><i class="fa fa-check" ></i></a></button>
       @else
        
         <a class="btn btn-danger" onclick="return confirm('Do You want to Un Read?')" href="/markasreject/{{$message->id}}"><i class="fa fa-close"></i></a>
         @endif 
                </td>
             
        
      </tr>
      @endforeach
      </table>
      
      
      
    </div>
  </form>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
   
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <script src="css/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="css/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="css/jquery.dcjqaccordion.2.7.js"></script>
  <script src="css/jquery.scrollTo.min.js"></script>
  <script src="css/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="css/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html> -->
