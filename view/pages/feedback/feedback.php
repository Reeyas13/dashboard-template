<?php include '../../includes/header.php'; ?>



<!-- sidebar -->
<?php include '../../includes/sidebar.php' ?>
<!-- main content -->
<div class="main-content main-content-max-width" id="nav">

  <?php include '../../includes/navbar.php'; ?>
  <!-- content here ✌️ -->
  <div class="content">

    <div class="feedback ">
      <div class="content-field">
        <div class="feedback-container hide" id="feedback_container">




          <div class="form-container ">
            <div class="form-container-head">
              <h2>Add Assignment</h2>
              <button class="add-btn closeTeacherForm" onclick="feedback_adder()">Back</button>
            </div>
            <form action="" method="post">
              <table>
                <tr>
                  <td style="text-align: right;">
                    <label for="title">Message</label>
                  </td>
                  <td>
                    <input type="text" placeholder="message" name="message" id="title" class="login-input">
                  </td>
                </tr>
                <tr>
                  <td style="text-align: right;">
                    <label for="subject">Given by</label>
                  </td>
                  <td>
                    <input type="text" placeholder="Given by" name="given_by" id="subject" class="login-input">
                  </td>
                </tr>
                <tr>
                  <td style="text-align: right;">
                    <label for="description">Given to</label>
                  </td>
                  <td>
                    <input type="text" placeholder="Given to" name="given_to" id="given_to"
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
                 
                  
                </tr>
              </table>
              <button class="add-btn" style="display: block; margin-top: 20px;">Upload</button>
            </form>

          </div>
        </div>
        <div class="content-box">
          <div class="content-header">
            <div class="title">
              <h2>Feedback</h2>
            </div>
            <button class="add-btn" onclick="feedback_adder()"><i class='bx bx-plus-medical'></i> Add</button>
          </div>
          <div class="content-body">
            <table>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Message</th>
                  <th>Given By</th>
                  <th>Given To</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>this is message</td>
                  <td>student</td>
                  <td>teacher</td>
                  <td>
                    <button class="edit-btn">Review</button>
                    <button class="del-btn">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>this is message</td>
                  <td>student</td>
                  <td>teacher</td>
                  <td>
                    <button class="edit-btn">Review</button>
                    <button class="del-btn">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>this is message</td>
                  <td>student</td>
                  <td>teacher</td>
                  <td>
                    <button class="edit-btn">Review</button>
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
    const div = document.getElementById("feedback_container")

    function feedback_adder() {
      div.classList.toggle("hide")

    }
  </script>

  <?php include '../../includes/footer.php' ?>