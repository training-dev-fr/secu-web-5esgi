
document.querySelector("#connect").addEventListener("click", connect)

const connect = async (e) => {
    if (document.querySelector("#email").reportValidity()) {
        e.preventDefault();
        let formData = new FormData();
        formData.append("email", document.querySelector("#email").value);
        formData.append("password", document.querySelector("#password").value);
        let result = await fetch("http://localhost/secu-web-5esgi/login.php", {
            method: "POST",
            body: formData
        });
        let data = await result.json();
        if(data.error){
            alert(data.error);
        }else{
            localStorage.setItem("userId",data.id);
            window.location.assign("profile.php");
        }
    }
}