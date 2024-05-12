<?php 

include "../header.php";

?>

<?php 
session_start();
if (isset($_SESSION['admin_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'Admin') {
 ?>

<body>
<?php

include "../nav.php";

?>
<div class="container mt-5">
         <div class="container text-center">
             <div class="row row-cols-5">
               <a href="teacher.php" 
                  class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-user-md fs-1" aria-hidden="true"></i><br>
                  Teachers
               </a> 
               <a href="student.php" class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-graduation-cap fs-1" aria-hidden="true"></i><br>
                  Students
               </a> 
               <a href="registrar-office.php" class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-pencil-square fs-1" aria-hidden="true"></i><br>
                  Registrar Office
               </a> 
               <a href="class.php" class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-cubes fs-1" aria-hidden="true"></i><br>
                  Class
               </a> 
               <a href="section.php" class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-columns fs-1" aria-hidden="true"></i><br>
                  Section
               </a> 
               <a href="grade.php" class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-level-up fs-1" aria-hidden="true"></i><br>
                  Grade
               </a> 
               <a href="course.php" class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-book fs-1" aria-hidden="true"></i><br>
                  Course
               </a> 
               <a href="message.php" class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-envelope fs-1" aria-hidden="true"></i><br>
                  Message
               </a> 
               <a href="settings.php" class="col btn btn-primary m-2 py-3 col-5">
                 <i class="fa fa-cogs fs-1" aria-hidden="true"></i><br>
                  Settings
               </a> 
               <a href="../logout.php" class="col btn btn-warning m-2 py-3 col-5">
                 <i class="fa fa-sign-out fs-1" aria-hidden="true"></i><br>
                  Logout
               </a> 
             </div>
         </div>
     </div>

</body>

<?php

include "../footer.php";

?>

<?php 

  }else {
    header("Location: ../login.php");
    exit;
  } 
}else {
	header("Location: ../login.php");
	exit;
} 

?>
