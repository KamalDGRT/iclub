function valid() {
    if (document.chngpwd.cpass.value == "") {
        alert("Current Password Filed is Empty !!");
        document.chngpwd.cpass.focus();
        return false;
    } else if (document.chngpwd.npass.value == "") {
        alert("New Password Filed is Empty !!");
        document.chngpwd.npass.focus();
        return false;
    } else if (document.chngpwd.cfpass.value == "") {
        alert("Confirm Password Filed is Empty !!");
        document.chngpwd.cfpass.focus();
        return false;
    } else if (document.chngpwd.npass.value != document.chngpwd.cfpass.value) {
        alert("Password and Confirm Password Field do not match  !!");
        document.chngpwd.cfpass.focus();
        return false;
    }
    return true;
}