<?php include '../../includes/header.php'; ?>



<!-- sidebar -->
<?php include '../../includes/sidebar.php' ?>
<!-- main content -->
<div class="main-content main-content-max-width" id="nav">

  <?php include '../../includes/navbar.php'; ?>
  <!-- content here ✌️ -->
  <div class="content">
    <div class="teacher ">
      <div class="content-field">
        <div class="teacher-container hide">
          <div class="form-container">
            <div class="form-container-head">
              <h2>Add Teachers</h2>
              <button class="add-btn closeTeacherForm">Back</button>
            </div>
            <form action="" method="post">
              <table>
                <tr>
                  <td>
                    <div class="form-group">
                      <label for="name">Name</label>
                    </div>
                  </td>
                  <td>
                    <input type="text" placeholder="Name" name="name" class="login-input" style="width:250px">
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-group">
                      <label for="email">Email</label>
                    </div>
                  </td>
                  <td>
                    <input type="email" placeholder="Email" name="email" class="login-input" style="width:250px">
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-group">
                      <label for="phone">Phone</label>
                    </div>
                  </td>
                  <td>
                    <input type="text" placeholder="Phone" name="phone" class="login-input" style="width:250px">
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-group">
                      <label for="password">Password</label>
                    </div>
                  </td>
                  <td>
                    <input type="password" placeholder="Password" name="password" class="login-input"
                      style="width:250px">
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-group">
                      <label for="address">Address</label>
                    </div>
                  </td>
                  <td>
                    <input type="text" placeholder="Address" name="address" class="login-input" style="width:250px">
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-group">
                      <label for="qualification">Qualification</label>
                    </div>
                  </td>
                  <td>
                    <input type="text" placeholder="Qualification" name="qualification" class="login-input"
                      style="width:250px">
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-group">
                      <label for="faculty_id">Faculty</label>
                    </div>
                  </td>
                  <td>
                    <select name="faculty_id" id="" class="login-input" style="width:250px">
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-group">
                      <label for="subject_id">Subject</label>
                    </div>
                  </td>
                  <td>
                    <select name="subject_id" id="" class="login-input" style="width:250px">
                     <option value=""></option>
                     <option value=""></option>
                     <option value=""></option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align: center;">
                    <button class="add-btn" style="display: block; margin-top: 20px;">Upload</button>
                  </td>
                </tr>
              </table>

            </form>
          </div>
        </div>
        <div class="content-box">
          <div class="content-header">
            <div class="title">
              <h2>Teachers</h2>
            </div>
            <button class="add-btn openTeacherForm"><i class='bx bx-plus-medical'></i> Add</button>
          </div>
          <div class="content-body">
            <table>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Subject</th>
                  <th>Qualification</th>
                  <th>faculty</th>
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
    const teacherForm = document.querySelector(".teacher-container");
    const teacherFormOpen = document.querySelector(".openTeacherForm");
    const teacherFormClose = document.querySelector(".closeTeacherForm");
    teacherFormOpen.addEventListener("click", () => {
      teacherForm.classList.remove("hide");
    });
    teacherFormClose.addEventListener("click", () => {
    teacherForm.classList.add("hide");
    });
  </script>

  <?php include '../../includes/footer.php' ?>