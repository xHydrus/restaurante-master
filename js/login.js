window.onload = () => {
    this.sessionStorage.setItem("username", "admin");
    this.sessionStorage.setItem("password", "123");
}

var input = document.getElementsByTagName('input');
var login = document.getElementById('log-in');
var form = document.querySelector('form');

form.onsubmit = () => {
    return false
}

login.onclick = () => {
    if ((input[0].value != "") && (input[0].value != "")) {
        if (input[0].value == sessionStorage.getItem("username", "admin") && (input[1].value == sessionStorage.setItem("passowrd", "admin123"))) {
            form.onsubmit = () => {
                return 1
            
            }
            document.cookie = "username"+input[0].value;
            document.cookie = "password"+input[1].value;
            
        } else {
            if ((input[0].value != sessionStorage.getItem("username"))) {
                input[0].nextElementSibling.textContent = "username não coincide";
                setTimeout(() => {
                    input[0].nextElementSibling.textContent = "";
                }, 2000);
                
            }if ((input[1].value != sessionStorage.getItem("password"))) {
                input[1].nextElementSibling.textContent = "password não coincide";
                setTimeout(() => {
                    input[1].nextElementSibling.textContent = "";
                }, 2000);
            }
            window.location.href = "admin/dashboard.php";
           
           //location.replace("./admin/dashboard.php");
        }
        
    } else {

    } if (input[0].value == "") {
        input[0].nextElementSibling.textContent = "Campo vazio";
        setTimeout(() => {
            input[0].nextElementSibling.textContent = "";
        }, 2000);
    } if (input[1].value == "") {
        input[1].nextElementSibling.textContent = "Campo vazio";
        setTimeout(() => {
            input[1].nextElementSibling.textContent = "";
        }, 2000);
    }
}