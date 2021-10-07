// Mobile Menu bar Effect Code
// function MobileMenuBar() {
const menuIcon = document.querySelector(".menu_ico");
const mobileMenu = document.querySelector(".mobile_Menu");
const overlay = document.querySelector(".overlay");

function MobileBtn() {
  if (menuIcon.classList.contains("active")) {
    menuIcon.classList.remove("active");
    mobileMenu.classList.remove("active");
    overlay.classList.remove("active");
  } else {
    menuIcon.classList.add("active");
    mobileMenu.classList.add("active");
    overlay.classList.add("active");
  }
};

// menuIcon.addEventListener("click", () => {
//   MobileBtn()
// });

// overlay.addEventListener("click", () => {
//   MobileBtn()
// });

// }
// MobileMenuBar();


