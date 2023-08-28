<?php include '../../includes/header.php'; ?>


<!-- sidebar -->
<?php include '../../includes/sidebar.php' ?>
<!-- main content -->
<div class="main-content main-content-max-width" id="nav">

  <?php include '../../includes/navbar.php'; ?>
  <!-- content here ✌️ -->
  <div class="content">

    <div class="subject">
      <div class="content-field">
        <div class="subject-container hide " id="subject">
          <div class="form-container">
            <div class="form-container-head">
              <h2>Add subject</h2>
              <button class="add-btn closeSemesterForm" onclick="show()">Back</button>
            </div>
            <form action="" method="post">
              <div class="form-group">
                <label for="">subject</label>
                <input type="text" name="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="">faculty</label>
                <select name="faculty_id" id="faculty_id">
                <option value="">Select faculty</option>
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
              <button class="add-btn" style="display: block; margin-top: 20px;">Upload</button>
            </form>
          </div>
        </div>
        <div class="content-box">
          <div class="content-header">
            <div class="title">
              <h2>Subjects</h2>
            </div>
            <button class="add-btn" onclick="show()"><i class='bx bx-plus-medical'></i> Add</button>
          </div>
          <div class="content-body">
            <table>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Subjects</th>
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
    const div = document.getElementById("subject");

    function show() {
      div.classList.toggle("hide");
    }
  </script>

  <?php include '../../includes/footer.php' ?>