var loginphoto = document.getElementById("image");
document.getElementById("files").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        loginphoto.style.backgroundImage = "url(" + e.target.result + ")";
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
