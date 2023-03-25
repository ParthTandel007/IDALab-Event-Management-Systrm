<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!---<title> Responsive Registration Form | CodingLab </title>--->
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <li><select class="n_panel" id="cars" name="program" style="float:left" size="1"
          onchange="window.location.href=this.value;" required>
          <option value="select" class="input-box">Participant Register</option>
          <option value="reg_alumni.html" class="input-box" a href="reg_alumni.html">Alumni</a></option>
          <option value="reg_student.html" class="input-box"><a href="reg_student.html">Student</a></option>
          <option value="reg_other_institute_student.html" class="input-box"><a href="reg_other_student.html">Other
              Institute Student</a></option>
          <option value="reg-school-learner.html" class="input-box"><a href="reg-school-learner.html">School
              Learners</a></option>
          <option value="reg_school_teacher.html" class="input-box"><a href="reg_school_teacher.html">School
              Teachers</a></option>
          <option value="reg_other_institute_faculty.html" class="input-box"><a
              href="reg_other_institute_faculty.html">Other Institute Faculty</a></option>
          <option value="reg_industry.html" class="input-box"><a href="reg_industry.html">Industry</a></option>
          <option value="reg_entrepreneur.html" class="input-box">
            <a href="reg_alumni.html">Entrepreneur/start-up</a>
          </option>
        </select></li>
      <li><a href="" style="float: left">Scheme Document</a></li>
      <li><select class="n_panel" size="1" onchange="window.location.href=this.value;" style="float:right" name="login"
          id="---" required>
          <option value="select" class="input-box" selected>Login</option>
          <option value="login_main.php" class="input-box"><a href="#">Admin</a></option>
          <option value="login_coordinator.php" class="input-box"><a
              href="reg_entrepreneur_startup.html">Co-ordinator</a></option>
        </select></li>
      <li><a href="reg_coordinator.html" style="float:right">Cordinator Register</a></li>
    </ul>
  </nav>
  <div class="box">
  <div class="container">
    <div class="title">Login Coordinator</div>
    <div class="content">
      <br>
      <form action="login.php" method="post">
        <!-- <div class="input-box">
          <select name="cars" id="cars" name="program" class="input-box" required>
            <option value="select" class="input-box">--Select Participant Type--</option>
            <option value="Alumni" class="input-box"><a href="#">Admin</a></option>
            <option value="Student" class="input-box"><a href="#.html">Student</a></option>
            <option value="Other Institute Student" class="input-box"><a href="#">Cordiantors</a></option>
          </select>
        </div> -->

        <div class="input-box">
          <span class="details">Email ID </span>
          <input type="text" placeholder="Enter your Email ID" name="uname">
        </div>
        <div class="input-box">
          <span class="details">Password</span>
          <input type="password" placeholder="Enter your Password" name="password">
        </div>
        <div class="button">
          <input type="submit" value="Login">
        </div>
        <div class="input-box">
          <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
        </div>

      </form>
    </div>
  </div>
  </div>
</body>

</html>