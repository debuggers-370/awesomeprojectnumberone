

function setCookie() {
    var idname;
    var idpw;
    idname = document.register.ID.value;
    idpw = document.register.PW.value;
    document.cookie = "id=" + idname + ";" + "idpw=" +idpw;
}
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = document.cookie;
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
function checkCookie() {
    var user = getCookie("id");
    if (user != "") {
        alert("Welcome again " + user);
    }

}

