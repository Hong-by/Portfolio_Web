// Mobile Menu bar Effect Code
function MobileMenuBar() {
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
  menuIcon.addEventListener("click", () => {
    MobileBtn()
  });
  overlay.addEventListener("click", () => {
    MobileBtn()
  });

}
MobileMenuBar();


var typingBool = false;
var typingIdx = 0;
var liIndex = 0;
var liLength = $(".typing-txt>ul>li").length;

// 타이핑될 텍스트를 가져온다 
var typingTxt = $(".typing-txt>ul>li").eq(liIndex).text();
typingTxt = typingTxt.split(""); // 한글자씩 자른다. 
if (typingBool == false) { // 타이핑이 진행되지 않았다면 
  typingBool = true;
  var tyInt = setInterval(typing, 100); // 반복동작 
}

