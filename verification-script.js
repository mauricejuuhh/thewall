var ww = document.getElementById("wachtwoord");
var ww2 = document.getElementById("wachtwoord2");
var done = document.getElementById("done");


done.addEventListener('click',()=>{

  if (ww.value == "" && ww2.value == "") {
    document.getElementById("mid").style.webkitAnimationName = "shake";
    document.getElementById("mid").style.msAnimationName = "shake";
    document.getElementById("mid").style.mozAnimationName = "shake";
    document.getElementById("mid").style.oAnimationName = "shake";
    document.getElementById("mid").style.AnimationName = "shake";
  } else if (ww.value == ww2.value) {
    setTimeout(function () {document.getElementById("een").style.display = "none";}, 0900);
    document.getElementById("een").style.webkitAnimationName = "eeen";
    document.getElementById("een").style.msAnimationName = "eeen";
    document.getElementById("een").style.mozAnimationName = "eeen";
    document.getElementById("een").style.oAnimationName = "eeen";
    document.getElementById("een").style.AnimationName = "eeen";

    document.getElementById("twee").style.webkitAnimationName = "tweee";
    document.getElementById("twee").style.msAnimationName = "tweee";
    document.getElementById("twee").style.mozAnimationName = "tweee";
    document.getElementById("twee").style.oAnimationName = "tweee";
    document.getElementById("twee").style.AnimationName = "tweee";
    document.getElementById("twee").style.display = "block";

    document.getElementById("midavatar").style.webkitAnimationName = "midava";
    document.getElementById("midavatar").style.msAnimationName = "midava";
    document.getElementById("midavatar").style.mozAnimationName = "midava";
    document.getElementById("midavatar").style.oAnimationName = "midava";
    document.getElementById("midavatar").style.AnimationName = "midava";
    setTimeout(function () { document.getElementById("midavatar").style.zIndex = "1"; }, 2000);

    document.getElementById("login-logo").style.webkitAnimationName = "opa";
    document.getElementById("login-logo").style.msAnimationName = "opa";
    document.getElementById("login-logo").style.mozAnimationName = "opa";
    document.getElementById("login-logo").style.oAnimationName = "opa";
    document.getElementById("login-logo").style.AnimationName = "opa";

  } else {
    document.getElementById("mid").style.webkitAnimationName = "shake";
    document.getElementById("mid").style.msAnimationName = "shake";
    document.getElementById("mid").style.mozAnimationName = "shake";
    document.getElementById("mid").style.oAnimationName = "shake";
    document.getElementById("mid").style.AnimationName = "shake";
  }
  setTimeout(function () {
    document.getElementById("mid").style.webkitAnimationName = "";
    document.getElementById("mid").style.msAnimationName = "";
    document.getElementById("mid").style.mozAnimationName = "";
    document.getElementById("mid").style.oAnimationName = "";
    document.getElementById("mid").style.AnimationName = "";
}, 0810);
});
