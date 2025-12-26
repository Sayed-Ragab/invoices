

document.getElementById('myform').addEventListener('submit',(e)=>{

let name = document.getElementById('name').value.trim();
let email = document.getElementById("email").value.trim();;
let password = document.getElementById("password").value.trim();

let error_name = document.getElementById("error_name");
let error_email = document.getElementById("error_email");
let error_password = document.getElementById("error_password");

let valid = true;
  
if(name === ""){
    error_name.innerHTML = "من قضلك قم بادخال الاسم الاول والاسم الاخير";
    valid = false;
}

if(email === "" ){
error_email.innerHTML = "من فضلك قم بادخال البريد الالكتروني";
valid = false;

}

if(password ===""){
error_password.innerHTML = "من فضلك قم بادخال كلمة المرور";
valid = false;
}


if(!valid){
e.preventDefault();
}



});




