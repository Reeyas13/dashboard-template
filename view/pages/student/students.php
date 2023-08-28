<?php include '../../includes/header.php'; ?>

<!-- sidebar -->
<?php include '../../includes/sidebar.php' ?>
<!-- main content -->
<div class="main-content main-content-max-width" id="nav">

  <?php include '../../includes/navbar.php'; ?>
  <!-- content here ✌️ -->
  <div class="content">
    <div class="student ">
      <div class="content-field">
        <div class="student-container hide">
          <div class="form-container">
            <div class="form-container-head">
              <h2>Add Students</h2>
              <button class="add-btn closeStdForm">Back</button>
            </div>
            <form action="" method="post">
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="">Roll_no</label>
                <input type="text" name="roll_no" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="">faculty</label>
                <select name="faculty_id" id="faculty_id">
                <option value="">Select faculty</option>
                <option value="">Select faculty</option>
                  <option value="">Select faculty</option>
                  
                </select>
              </div>
              <div class="form-group">
                <label for="">semester</label>
                <select name="semester_id" id="semester_id">
                <option value="">Select semester</option>
                <option value="">Select semester</option>
                  <option value="">Select semester</option>
                  
                </select>
              </div>
              <div class="form-group">
                <label for="">Class Role</label>
                <select name="class_role" id="">
                  <option value="">Select Class Role</option>
                  <option value="monitor">Monitor</option>
                  <option value="classrepresentative">Class Representative</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="">Phone</label>
                <input type="number" name="phone" placeholder="Phone">
              </div>
              <div class="form-group">
                <label for="">Address</label>
                <input type="address" name="address" placeholder="eg. itahari">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="password">
              </div>
              <button class="add-btn " style="display: block; margin-top: 20px;">Upload</button>
            </form>
          </div>
        </div>
        <div class="content-box">
          <div class="content-header">
            <div class="title">
              <h2>Students</h2>
            </div>
            <button class="add-btn studentform"><i class='bx bx-plus-medical'></i> Add</button>
          </div>
          <div class="content-body">
            <table>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Faculty</th>
                  <th>Semester</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    const studentForm = document.querySelector(".student-container");
    const studentFormOpen = document.querySelector(".studentform");
    const studentFormClose = document.querySelector(".closeStdForm");
    studentFormOpen.addEventListener("click", () => {
      studentForm.classList.remove("hide");
    });
    studentFormClose.addEventListener("click", () => {
      studentForm.classList.add("hide");
    });
  </script>

  <?php include '../../includes/footer.php' ?>