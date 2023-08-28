document.addEventListener("DOMContentLoaded", function () {
    const currentPath = window.location.pathname;
    const currentPage = currentPath.split("/").pop();
    const sidebarItems = document.querySelectorAll(".sidebar-content li");
  sidebarItems.forEach((item) => {
    const link = item.querySelector("a").getAttribute("href");
    const linkPage = link.split("/").pop(); // Get the last part of the link
    if (currentPage === linkPage) {
      item.classList.add("active-link");
    }
  });


});
