<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sanjivani Leaving Certificate System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- link css -->
    <link rel="stylesheet" href="{{asset('assets/css/Dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/clock.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/calender.css')}}">

</head>

<body>
<div class="page-wrapper chiller-theme toggled">
    
    @include('sidebar');
 
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container inline-flex">
      <h2>Dashboard</h2>
      <hr>

<br><br><br><br>

    <div class="signboard outer">
        <div class="signboard front inner anim04c">
            <li class="year anim04c">
                <span></span>
            </li>
            <ul class="calendarMain anim04c">
                <li class="month anim04c">
                    <span></span>
                </li>
                <li class="date anim04c">
                    <span></span>
                </li>
                <li class="day anim04c">
                    <span></span>
                </li>
            </ul>
            <li class="clock minute anim04c">
                <span></span>
            </li>
            <li class="calendarNormal date2 anim04c">
                <span></span>
            </li>
        </div>
        <div class="signboard left inner anim04c">
            <li class="clock hour anim04c">
                <span></span>
            </li>
            <li class="calendarNormal day2 anim04c">
                <span></span>
            </li>
        </div>
        <div class="signboard right inner anim04c">
            <li class="clock second anim04c">
                <span></span>
            </li>
            <li class="calendarNormal month2 anim04c">
                <span></span>
            </li>
        </div>
    </div>

    <div class="row">
    <div class="col-sm">
<div class="card border-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Total Student's</div>
  <div class="card-body text-primary">
    <h5 class="card-title">Total Number of Student</h5>
    <p class="card-text"></p>
  </div>
</div>
</div>

<!-- card2 -->
<div class="col-sm">
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header">Completed Student's</div>
  <div class="card-body text-success">
    <h5 class="card-title">Total Completed Student</h5>
    <p class="card-text"></p>
  </div>
</div>
</div>
<!-- card 3 -->
<div class="col-sm">
<div class="card border-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Pending Student's</div>
  <div class="card-body text-danger">
    <h5 class="card-title">Total Pending Students</h5>
    <p class="card-text"></p>
  </div>
</div>
</div>
</div>
     
      
        @include('footer');
      
    </div>
  </main>

</div>
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>
<script>
  $(document).ready(function () {

var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
var dayNames= [ "Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday" ];

var newDate = new Date();
newDate.setDate(newDate.getDate());
	
setInterval( function() {
	var hours = new Date().getHours();
	$(".hour").html(( hours < 10 ? "0" : "" ) + hours);
    var seconds = new Date().getSeconds();
	$(".second").html(( seconds < 10 ? "0" : "" ) + seconds);
    var minutes = new Date().getMinutes();
	$(".minute").html(( minutes < 10 ? "0" : "" ) + minutes);
    
    $(".month span,.month2 span").text(monthNames[newDate.getMonth()]);
    $(".date span,.date2 span").text(newDate.getDate());
    $(".day span,.day2 span").text(dayNames[newDate.getDay()]);
    $(".year span").html(newDate.getFullYear());
}, 1000);	

$(".outer").on({
    mousedown:function(){
        $(".dribbble").css("opacity","1");
    },
    mouseup:function(){
        $(".dribbble").css("opacity","0");
    }
});

});
</script>

</html>