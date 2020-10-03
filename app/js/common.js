$(function () {
  // input mask phone
  $("input[name*='phone']").inputmask("+7 (999) 999-99-99");

  //burger
  $(".burger").click(function () {
    $(this).toggleClass("active");
    $(".burger-menu").fadeToggle(200);
  });
  // свернуть меню при клике
  $(".burger-menu__url").click(function () {
    $(".burger-menu").fadeToggle(200);
    $(".burger").toggleClass("active");
  });
  //popup
  $(".open-popup").magnificPopup({
    type: "inline",
    midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
  });

  //
  // const anchors = document.querySelectorAll('a[href*="#"]');

  // for (let anchor of anchors) {
  //   anchor.addEventListener("click", function (e) {
  //     e.preventDefault();

  //     const blockID = anchor.getAttribute("href").substr(1);

  //     document.getElementById(blockID).scrollIntoView({
  //       behavior: "smooth",
  //       block: "start",
  //     });
  //   });
  // }
});
