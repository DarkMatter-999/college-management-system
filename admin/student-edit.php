<?php 
session_start();
if (isset($_SESSION['admin_id']) && 
    isset($_SESSION['role'])     &&
    isset($_GET['student_id'])) {

    if ($_SESSION['role'] == 'Admin') {
      
       include "../db_connection.php";
       include "data/subject.php";
       include "data/grade.php";
       include "data/student.php";
       include "data/section.php";
       $subjects = getAllSubjects($conn);
       $grades = getAllGrades($conn);
       $sections = getAllsections($conn);
       
       $student_id = $_GET['student_id'];
       $student = getStudentById($student_id, $conn);

       if ($student == 0) {
         header("Location: student.php");
         exit;
       }


 ?>
<?php
       include "../header.php";
?>
<body>
    <?php 
        include "../nav.php";
     ?>
     <div class="container mt-5">
        <a href="student.php"
           class="btn btn-dark">Go Back</a>

        <form method="post"
              class="shadow p-3 mt-5 form-w" 
              action="api/student-edit.php">
        <h3>Edit Student Info</h3><hr>
        <?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger" role="alert">
           <?=$_GET['error']?>
          </div>
        <?php } ?>
        <?php if (isset($_GET['success'])) { ?>
          <div class="alert alert-success" role="alert">
           <?=$_GET['success']?>
          </div>
        <?php } ?>
        <div class="mb-3">
          <label class="form-label">First name</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$student['fname']?>" 
                 name="fname">
        </div>
        <div class="mb-3">
          <label class="form-label">Last name</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$student['lname']?>"
                 name="lname">
        </div>
        <div class="mb-3">
          <label class="form-label">Address</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$student['address']?>"
                 name="address">
        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$student['email_address']?>"
                 name="email_address">
        </div>
        <div class="mb-3">
          <label class="form-label">Date of birth</label>
          <input type="date" 
                 class="form-control"
                 value="<?=$student['date_of_birth']?>"
                 name="date_of_birth">
        </div>
        <div class="mb-3">
          <label class="form-label">Gender</label><br>
          <input type="radio"
                 value="Male"
                 <?php if($student['gender'] == 'Male') echo 'checked';  ?> 
                 name="gender"> Male
                 &nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio"
                 value="Female"
                 <?php if($student['gender'] == 'Female') echo 'checked';  ?> 
                 name="gender"> Female
        </div>

        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$student['username']?>"
                 name="username">
        </div>
        <input type="text"
                value="<?=$student['student_id']?>"
                name="student_id"
                hidden>

        <div class="mb-3">
          <label class="form-label">Grade</label>
          <div class="row row-cols-5">
            <?php 
            $grade_ids = str_split(trim($student['semester']));
            foreach ($grades as $grade){ 
              $checked =0;
              foreach ($grade_ids as $grade_id ) {
                if ($grade_id == $grade['semester_id']) {
                   $checked =1;
                }
              }
            ?>
            <div class="col">
              <input type="radio"
                     name="grade"
                     <?php if($checked) echo "checked"; ?>
                     value="<?=$grade['semester_id']?>">
                     <?=$grade['semester_code']?>-<?=$grade['semester']?>
            </div>
            <?php } ?>
             
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Section</label>
          <div class="row row-cols-5">
            <?php 
            $section_ids = str_split(trim($student['section']));
            foreach ($sections as $section){ 
              $checked =0;
              foreach ($section_ids as $section_id ) {
                if ($section_id == $section['section_id']) {
                   $checked =1;
                }
              }
            ?>
            <div class="col">
              <input type="radio"
                     name="section"
                     <?php if($checked) echo "checked"; ?>
                     value="<?=$section['section_id']?>">
                     <?=$section['section']?>
            </div>
            <?php } ?>
             
          </div>
        </div>
        <br><hr>

        <div class="mb-3">
          <label class="form-label">Parent first name</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$student['parent_fname']?>"
                 name="parent_fname">
        </div>
        <div class="mb-3">
          <label class="form-label">Parent last name</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$student['parent_lname']?>"
                 name="parent_lname">
        </div>
        <div class="mb-3">
          <label class="form-label">Parent phone number</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$student['parent_phone_number']?>"
                 name="parent_phone_number">
        </div>

        

      <button type="submit" 
              class="btn btn-primary">
              Update</button>
     </form>

     <form method="post"
              class="shadow p-3 my-5 form-w" 
              action="api/student-change.php"
              id="change_password">
        <h3>Change Password</h3><hr>
          <?php if (isset($_GET['perror'])) { ?>
            <div class="alert alert-danger" role="alert">
             <?=$_GET['perror']?>
            </div>
          <?php } ?>
          <?php if (isset($_GET['psuccess'])) { ?>
            <div class="alert alert-success" role="alert">
             <?=$_GET['psuccess']?>
            </div>
          <?php } ?>

       <div class="mb-3">
            <div class="mb-3">
            <label class="form-label">Admin password</label>
                <input type="password" 
                       class="form-control"
                       name="admin_pass"> 
          </div>

            <label class="form-label">New password </label>
            <div class="input-group mb-3">
                <input type="text" 
                       class="form-control"
                       name="new_pass"
                       id="passInput">
                <button class="btn btn-secondary"
                        id="gBtn">
                        Random</button>
            </div>
            
          </div>
          <input type="text"
                value="<?=$student['student_id']?>"
                name="student_id"
                hidden>

          <div class="mb-3">
            <label class="form-label">Confirm new password  </label>
                <input type="text" 
                       class="form-control"
                       name="c_new_pass"
                       id="passInput2"> 
          </div>
          <button type="submit" 
              class="btn btn-primary">
              Change</button>
        </form>
     </div>
     
    <script>
        $(document).ready(function(){
             $("#navLinks li:nth-child(3) a").addClass('active');
        });

        function makePass(length) {
            var result           = '';
            var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var charactersLength = characters.length;
            for ( var i = 0; i < length; i++ ) {
              result += characters.charAt(Math.floor(Math.random() * 
         charactersLength));

           }
           var passInput = document.getElementById('passInput');
           var passInput2 = document.getElementById('passInput2');
           passInput.value = result;
           passInput2.value = result;
        }

        var gBtn = document.getElementById('gBtn');
        gBtn.addEventListener('click', function(e){
          e.preventDefault();
          makePass(4);
        });
    </script>

</body>
<?php
          include "../footer.php";
?>
<?php 

  }else {
    header("Location: student.php");
    exit;
  } 
}else {
	header("Location: student.php");
	exit;
} 

?>
