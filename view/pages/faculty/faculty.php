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
        <div class="faculty-container hide">
          <div class="form-container">
            <div class="form-container-head">
              <h2>Add Faculty</h2>
              <button class="add-btn closeFacultyForm">Back</button>
            </div>
            <form action="" method="post">
              <div class="form-group">
                <label for="">Faculty</label>
                <input type="text" name="name" placeholder="Name">
              </div>
              <button class="add-btn" style="display: block; margin-top: 20px;">Upload</button>
            </form>
          </div>
        </div>
        <!-- Edit Faculty -->
        <div class="edit-faculty-container hide">
          <div class="form-container">
            <div class="form-container-head">
              <h2>Edit</h2>
              <button class="add-btn closeEditForm">Back</button>
            </div>
            <form id="editFacultyForm" method="post">
              <div class="form-group">
                <label for="">Faculty</label>
                <input type="text" name="name" placeholder="Name">
                <input type="hidden" name="edit_id">
              </div>
              <button class="add-btn" name="update" style="display: block; margin-top: 20px;">Update</button>
            </form>
          </div>
        </div>
        <!-- index -->
        <div class="content-box">
          <div class="content-header">
            <div class="title">
              <h2>Faculty</h2>
            </div>
            <button class="add-btn openFacultyForm"><i class='bx bx-plus-medical'></i> Add</button>
          </div>
          <div class="content-body">
            <table>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Faculty Name</th>
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
  const facultyForm = document.querySelector(".faculty-container");
  const facultyFormOpen = document.querySelector(".openFacultyForm");
  const facultyFormClose = document.querySelector(".closeFacultyForm");

  // edit faculty form

  const editFacultyForm = document.querySelector(".edit-faculty-container");
  const editFacultyFormOpen = document.querySelector(".openEditForm");
  const editFacultyFormClose = document.querySelector(".closeEditForm");

  facultyFormOpen.addEventListener("click", () => {
    facultyForm.classList.remove("hide");
  });
  facultyFormClose.addEventListener("click", () => {
    facultyForm.classList.add("hide");
  });

  editFacultyFormOpen.addEventListener("click", () => {
    editFacultyForm.classList.remove("hide");
  });
  editFacultyFormClose.addEventListener("click", () => {
    editFacultyForm.classList.add("hide");
  })


  const editForm = editFacultyForm.querySelector("form");
  const openEditFormButtons = document.querySelectorAll(".openEditForm");
  openEditFormButtons.forEach(button => {
    button.addEventListener("click", () => {
      const edit_id = button.getAttribute("data-faculty-id");
      const name = button.getAttribute("data-faculty-name");

      editForm.querySelector("input[name='edit_id']").value = edit_id;
      editForm.querySelector("input[name='name']").value = name;

      editFacultyForm.classList.remove("hide");
    });
  });


 

</script>

<?php include '../../includes/footer.php' ?>
