
<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Sanjivani COE</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>

      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>Home</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="{{url('/')}}/dashboard">
            <i class="fas fa-home"></i>
              <span>Dashboard</span>
            </a>
            <li class="sidebar-dropdown">
            <a href="{{Route('addstudent')}}">
            <i class="fas fa-list-ul"></i>
              <span>Add New Student</span>
            </a>
            
          </li>
          <li class="sidebar-dropdown">
            <a href="{{Route("uploadcsv")}}">
            <i class="fas fa-upload"></i>
              <span>Upload Student List</span>
            </a>

            </li>
          <li class="sidebar-dropdown">
            <a href="students_list.php">
            <i class="fas fa-list-ul"></i>
              <span>Student List</span>
            </a>
            
          </li>

            <li class="sidebar-dropdown">
            <a href="leavingCertification.php">
            <i class="far fa-id-card"></i>
              <span>Leaving Certificate</span>
            </a>
             </li>
             <li class="sidebar-dropdown">
            <a href=" total_completed_stud.php">
            <i class="far fa-id-card"></i>
              <span>Total Completed List</span>
            </a>
             </li>
          <li class="sidebar-dropdown">
            <a href="about_us.php">
            <i class="fas fa-users"></i>
              <span>About Us</span>
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="logout.php">
            <i class="fas fa-sign-out-alt"></i>
              <span>Logout</span>
            </a>
          </li>
     
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>