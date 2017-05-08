var login3 = document.getElementById("login3");
var done2 = document.getElementById("submit2");
done2.addEventListener('click',()=>{
if (login3.value == "") {
  document.getElementById("mid").style.webkitAnimationName = "shake";
  document.getElementById("mid").style.msAnimationName = "shake";
  document.getElementById("mid").style.mozAnimationName = "shake";
  document.getElementById("mid").style.oAnimationName = "shake";
  document.getElementById("mid").style.AnimationName = "shake";
  setTimeout(function () {
    document.getElementById("mid").style.webkitAnimationName = "";
    document.getElementById("mid").style.msAnimationName = "";
    document.getElementById("mid").style.mozAnimationName = "";
    document.getElementById("mid").style.oAnimationName = "";
    document.getElementById("mid").style.AnimationName = "";
  }, 0810);
} else {

}
});
