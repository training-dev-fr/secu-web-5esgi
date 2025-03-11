document.querySelector("#connect").addEventListener("click",(e) => {
    e.preventDefault();
    let formData = new FormData();
    formData.append("email",document.querySelector("#email").value);
    formData.append("password",document.querySelector("#password").value);
    fetch("http://localhost/secu-web-5esgi/login.php",{
        method: "POST",
        body: formData
    })
})