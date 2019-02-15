// Searchbar
$(document).ready(function() {
  $("#searchbar-icon").click(function() {
    $("#searchbar-input").animate({ width: "toggle" });
    $("#searchbar-icon").toggle();
    $("#searchbar-cross").toggle(500);
  });

  $("#searchbar-cross").click(function() {
    $("#searchbar-input").animate({ width: "toggle" });
    $("#searchbar-cross").toggle();
    $("#searchbar-icon").toggle(500);
  });
});

//Scroll down events
let buttons = document.querySelectorAll(".down-arrow__link");
buttons.forEach(button => {
  button.addEventListener("click", e => {
    console.log(e);
  });
});
