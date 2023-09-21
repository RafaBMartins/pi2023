/*display on or off when clicking on the mobile menu*/
function mobileMenu() {
    var options = document.getElementById("header_options");
    if (options.style.display === "flex") {
      options.style.display = "none";
    } else {
      options.style.display = "flex";
    }
  }
