<?php include '../../includes/header.php'; ?>
<!-- sidebar -->
<?php include '../../includes/sidebar.php' ?>



<!-- main content -->
<div class="main-content main-content-max-width" id="nav">
  <?php include '../../includes/navbar.php'; ?>
  <!-- content here ✌️ -->
  <div class="content">

    <div class="faculty">
      <div class="content-field">
        <!-- Add Faculty -->
        <div class="semester-container hide">
          <div class="form-container">
            <div class="form-container-head">
              <h2>Add Semester</h2>
              <button class="add-btn closeSemesterForm">Back</button>
            </div>
            <form action="" method="post">
              <div class="form-group">
                <label for="">Semester</label>
                <input type="text" name="name" placeholder="Name">
              </div>
              <button class="add-btn" style="display: block; margin-top: 20px;">Upload</button>
            </form>
          </div>
        </div>
        <!-- Edit Faculty -->
        <div class="edit-semester-container hide">
          <div class="form-container">
            <div class="form-container-head">
              <h2>Edit Semester</h2>
              <button class="add-btn closeEditForm">Back</button>
            </div>
            <form id="editSemesterForm" action="" method="post">
              <div class="form-group">
                <label for="">Semester</label>
                <input type="text" name="name" placeholder="Name">
                <input type="hidden" name="edit_id">
              </div>
              <button class="add-btn" style="display: block; margin-top: 20px;">Upload</button>
            </form>
          </div>
        </div>
        <!-- index -->
        <div class="content-box">
          <div class="content-header">
            <div class="title">
              <h2>Semester</h2>
            </div>
            <button class="add-btn openSemesterForm"><i class='bx bx-plus-medical'></i> Add</button>
          </div>
          <div class="content-body">
            <table>
              <thead>
                <tr>
                  <th>ID</th>
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
</div>
<script>


  
</script>

<?php include '../../includes/footer.php' ?>