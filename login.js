var login1 = document.getElementById("login1");
var login2 = document.getElementById("login2");
var done = document.getElementById("submit");

done.addEventListener('click',()=>{
  if (login1.value == "") {
    document.getElementById("mid").style.webkitAnimationName = "shake";
    document.getElementById("mid").style.msAnimationName = "shake";
    document.getElementById("mid").style.mozAnimationName = "shake";
    document.getElementById("mid").style.oAnimationName = "shake";
    document.getElementById("mid").style.AnimationName = "shake";
  } else if (login2.value == "") {
    document.getElementById("mid").style.webkitAnimationName = "shake";
    document.getElementById("mid").style.msAnimationName = "shake";
    document.getElementById("mid").style.mozAnimationName = "shake";
    document.getElementById("mid").style.oAnimationName = "shake";
    document.getElementById("mid").style.AnimationName = "shake";
  } else {

  }
  setTimeout(function () {
    document.getElementById("mid").style.webkitAnimationName = "";
    document.getElementById("mid").style.msAnimationName = "";
    document.getElementById("mid").style.mozAnimationName = "";
    document.getElementById("mid").style.oAnimationName = "";
    document.getElementById("mid").style.AnimationName = "";
  }, 0810);
});
