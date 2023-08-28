<?php include '../../includes/header.php'; ?>



<!-- sidebar -->
<?php include '../../includes/sidebar.php' ?>
<!-- main content -->
<div class="main-content main-content-max-width" id="nav">

  <?php include '../../includes/navbar.php'; ?>
  <!-- content here ✌️ -->
  <div class="content">
    <div class="assignment ">
      <div class="content-field">
        <div class="assignment-container hide" id="assignment_container">




          <div class="form-container ">
            <div class="form-container-head">
              <h2>Add Assignment</h2>
              <button class="add-btn closeTeacherForm" onclick="assignment_adder()">Back</button>
            </div>
            <form action="" method="post">
              <table>
                <tr>
                  <td style="text-align: right;">
                    <label for="title">Assignment title</label>
                  </td>
                  <td>
                    <input type="text" placeholder="Title" name="title" id="title" class="login-input">
                  </td>
                </tr>
                <tr>
                  <td style="text-align: right;">
                    <label for="subject">Subject</label>
                  </td>
                  <td>
                    <input type="text" placeholder="Subject" name="subject" id="subject" class="login-input">
                  </td>
                </tr>
                <tr>
                  <td style="text-align: right;">
                    <label for="description">Description</label>
                  </td>
                  <td>
                    <input type="text" placeholder="Description" name="description" id="description"
                      class="login-input">
                  </td>
                </tr>
                <tr>
                  <td style="text-align: right;">
                    <label for="assigned_by">Assigned By</label>
                  </td>
                  <td>
                    <input type="text" placeholder="Assigned By" name="assigned_by" id="assigned_by"
                      class="login-input">
                  </td>
                </tr>
                <tr>
                  <td style="text-align: right;">
                    <label for="submission_date">Date of submission</label>
                  </td>
                  <td>
                    <input type="text" placeholder="Date of submission" name="submission_date" id="submission_date"
                      class="login-input">
                  </td>
                </tr>
              </table>
              <button class="add-btn" style="display: block; margin-top: 20px;">Upload</button>
            </form>

          </div>
        </div>




        <div class="content-box">
          <div class="content-header">
            <div class="title">
              <h2>Assignments</h2>
            </div>
            <button class="add-btn" id="add-assignment" onclick="assignment_adder()" ><i class='bx bx-plus-medical'></i> Add</button>
          </div>
          <div class="content-body">
            <table>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Semester</th>
                  <th>Subject</th>
                  <th>Assignment</th>
                  <th>Assigned By</th>
                  <th>Date of Submission</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>BCA</td>
                  <td>Web Technology</td>
                  <td>Admin Dashboard</td>
                  <td>Ghanashyam Adhikari</td>
                  <td>2080-03-19</td>
                  <td>
                    <button class="edit-btn">Edit</button>
                    <button class="del-btn">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>BCA</td>
                  <td>Web Technology</td>
                  <td>Admin Dashboard</td>
                  <td>Ghanashyam Adhikari</td>
                  <td>2080-03-19</td>
                  <td>
                    <button class="edit-btn">Edit</button>
                    <button class="del-btn">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>BCA</td>
                  <td>Web Technology</td>
                  <td>Admin Dashboard</td>
                  <td>Ghanashyam Adhikari</td>
                  <td>2080-03-19</td>
                  <td>
                    <button class="edit-btn">Edit</button>
                    <button class="del-btn">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>BCA</td>
                  <td>Web Technology</td>
                  <td>Admin Dashboard</td>
                  <td>Ghanashyam Adhikari</td>
                  <td>2080-03-19</td>
                  <td>
                    <button class="edit-btn">Edit</button>
                    <button class="del-btn">Delete</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
const div =document.getElementById("assignment_container")
// const add-assignment =document.getElementById("add-assignment")
function assignment_adder(){
  div.classList.toggle("hide")
}
  </script>

  <?php include '../../includes/footer.php' ?>