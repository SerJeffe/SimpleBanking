function openDrop() {
    var ul = document.getElementById("navbaritemsid");
    var logo = document.getElementById("logoid");
    var butt = document.getElementById("dropDownB");
    if ((ul.className === "navbaritems") && (logo.className === "logo")) {
        ul.className = ul.className + " responsive";
        logo.className = logo.className + " responsive";
        butt.className = butt.className + " responsive";
    }
    else {
        ul.className = "navbaritems";
        logo.className = "logo";
        butt.className = "dropDown";
    }
}