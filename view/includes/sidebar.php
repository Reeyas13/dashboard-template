<!-- sidebar  -->
<div class="sidebar sidebar-max-width" id="sideBar">
  <div class="logo-detail" style="
          display: flex;
          align-items: center;
          justify-content: space-between;
        ">
    <img src="../../../public/images/clzLogo.png" alt="" style="width: 100px" id="logo" />
    <div id="sidebarHandel" style="cursor: pointer;" onclick="side_bar()">

      <i class="bx bx-x " style="font-size: 40px" id="cross"></i>
      <i class='bx bx-menu hide' style="font-size: 40px" id="menu"> </i>
    </div>
  </div>
  <div class="sidebar-content">
    <ul>
      <li class="dashboardlink ">
        <a href="../dashboard/dashboard.php">
          <i class="bx bxs-dashboard"></i>
          <span class="sidebarSpan">Dashboard</span>
        </a>
      </li>
      <li class="teacher-link">
        <a href="../teacher/teacher.php">
          <i class="bx bxl-microsoft-teams"></i>
          <span class="sidebarSpan">Teachers</span>
        </a>
      </li>
      <li class="student-link">
        <a href="../student/students.php">
          <i class="bx bxs-group"></i>
          <span class="sidebarSpan">Students</span>
        </a>
      </li>
      <li class="faculty-link">
        <a href="../faculty/faculty.php">
          <i class="bx bxs-category"></i>
          <span class="sidebarSpan">Faculty</span>
        </a>
      </li>
      <li class="assignment-link">
        <a href="../assignment/assignment.php">
          <i class="bx bxs-book-reader"></i>
          <span class="sidebarSpan">Assignment</span>
        </a>
      </li>
      <li class="feedback-link">
        <a href="../feedback/feedback.php">
          <i class="bx bx-revision"></i>
          <span class="sidebarSpan">Feedback</span>
        </a>
      </li>
      <li class="semester-link">
        <a href="../semester/semester.php">
          <i class="bx bxs-home-alt-2"></i>
          <span class="sidebarSpan">Semester</span>
        </a>
      </li>
      <li class="subject-link">
        <a href="../subject/subject.php">
          <i class="bx bxs-book-content"></i>
          <span class="sidebarSpan">Subject</span>
        </a>
      </li>
    </ul>
  </div>
</div>

<script>
  
  function side_bar() {
    const cross = document.getElementById("cross");
    const menu = document.getElementById("menu");
    const sideBar = document.getElementById("sideBar");
    const sidebarHandel = document.getElementById("sidebarHandel");
    console.log(sidebarHandel);
    const logo = document.getElementById("logo");
    const nav = document.getElementById("nav");
    const sidebarSpans = Array.from(document.querySelectorAll(".sidebarSpan"));

    sidebarSpans.forEach((item) => {
      setTimeout(() => {
        item.classList.toggle("hide");
      });
    });
    cross.classList.toggle("hide");
    menu.classList.toggle("hide");
    sideBar.classList.toggle("sidebar-max-width");
    sideBar.classList.toggle("sidebar-min-width");
    logo.classList.toggle("hide");
    nav.classList.toggle("main-content-max-width");
    nav.classList.toggle("main-content-min-width");
  };

</script>