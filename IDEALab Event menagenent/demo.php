<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <ul class="logo navigation_panel">
        <li><img src="logoIdeaLab.png" alt="" style="float: left" width="150px">
            <h2><b>AICTE-IDEA Labs Network</b></h2>
        </li>
    </ul>
    <nav>
        <ul class="ul1 navigation_panel">
        <li><a href="index.html" style="float: left">Home</a></li>
            <li><a href="about_idealab.html" style="float: left">About Idealab</a></li>
            <li><a href="news_latter.html" style="float: left">News-Letter</a></li>
            <li><a href="event.html" style="float: left">Events</a></li>
            <li><a href="Equipments_List.html" style="float: left">Equipments List</a></li>
            <li><a href="" style="float: left">Scheme Document</a></li>

            <li><a class="nav_logout" href="logout.php" style="float:right">Logout</a></li>
            <li><a href="" style="float: right"><img src="logoIdeaLab.png" alt="" style="float: left"
                        width="40px" class="round">&nbsp; Profile</a></li>
            <br>

        </ul>
    </nav>
    <div class="box">
        <div class="container">
            <div class="title">Add New Event</div>
            <div class="content">
              <br>
              <form action="">
                <!-- <div class="input-box">
                  <select name="cars" id="cars" name="program" class="input-box"  required>
                    <option value="select" class="input-box">--Select Participant Type--</option>
                    <option value="Alumni" class="input-box"><a href="reg_alumni.html">Alumni</a></option>
                    <option value="Student" class="input-box"><a href="reg_student.html">Student</a></option>
                    <option value="Other Institute Student" class="input-box"><a href="reg_other_student.html">Other Institute Student</a></option>
                    <option value="School Learners" class="input-box"><a href="#">School Learners</a></option>
                    <option value="School Teachers" class="input-box"><a href="reg_school_teacher.html">School Teachers</a></option>
                    <option value="Other Institute Faculty" class="input-box"><a href="reg_other_institute_faculty.html">Other Institute Faculty</a></option>
                    <option value="Industry" class="input-box"><a href="reg_industry.html">Industry</a></option>
                    <option value="Entrepreneur/start-up" class="input-box"><a href="reg_entrepreneur_startup.html">Entrepreneur/start-up</a></option>
                </select>
                </div> -->
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Event Title Name</span>
                    <input type="text" placeholder="Enter your Event Title" name="name_of_industry" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Types Of Events</span>
                    <select id="cars" name="program" class="input-box" required>
                      <option value="select">--Select Types Of Events --</option>
                        <option value="volvo" class="input-box">Faculty Development Programme</option>
                        <option value="saab" class="input-box">Skilling Program</option>
                        <option value="volvo" class="input-box">Bootcamp</option>
                        <option value="audi" class="input-box">Ideation workshop</option>
                        <option value="opel" class="input-box">Awareness workshops for industry</option>
                        <option value="opel" class="input-box">Profrssional Skilling Programmes</option>
                        <option value="opel" class="input-box">School Teachers Awareness Programme</option>
                        <option value="opel" class="input-box">Open Day for School Students</option>
                        <option value="opel" class="input-box">Annual Cofference</option>
                        <option value="opel" class="input-box">Symposium of All Idealab</option>
                        <option value="opel" class="input-box">Other</option>
                    </select>
                    
                  </div>
                  <div class="input-box">
                    <span class="details">Event start date</span>
                    <input type="date" name="mobile_number" required>
                  </div>
                  <div class="input-box">
                    <span class="details">End start date</span>
                    <input type="date" name="mobile_number" required>
                  </div>
                </div>
                <div class="input-box top_pad">
                    <span class="details"> Event Brochure upload </span>
                    <input type="file" name="file" required>
                </div>
        
                <div class="input-box top_pad">
                    <p>Image Must Be Type Of JPEG,PNG,JPG,PDF.</p>
                </div>
                <div class="button">
                  <input type="submit" value="Add Participant">
                </div>
              </form>
            </div>
          </div>
    </div>
    <!-- <div class="w3-content" style="max-width:1200px">
        <img class="mySlides" src="newslider1 (1).jpg" style="width:100%;display:none">
        <img class="mySlides" src="newslider2.jpg" style="width:100%">
        <img class="mySlides" src="newslider3.jpg" style="width:100%;display:none">
      
        <div class="w3-row-padding w3-section">
          <div class="w3-col s4">
            <div onclick="currentDiv(1)" style="justify-content: center; display: flex; align-items: center; padding: 30px;">Rajveer</div>
          </div>
          <div class="w3-col s4">
            <div onclick="currentDiv(2)" style="justify-content: center; display: flex; align-items: center; padding: 30px;">Parth</div>
          </div>
          <div class="w3-col s4">
            <div onclick="currentDiv(3)" style="justify-content: center; display: flex; align-items: center; padding: 30px;">Ishika</div>
          </div>
        </div>
      </div>
      
      <script>
      function currentDiv(n) {
        showDivs(slideIndex = n);
      }
      
      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-opacity-off";
      }
      </script> -->
</body>

</html>
<?php 
}else{
     header("Location: login_main.php");
     exit();
}
 ?>