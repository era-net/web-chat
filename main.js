let join = document.getElementById("join-form");
let username = document.getElementById("username");
let gender = document.getElementById("gender");
let joinSubmitBtn = document.getElementById("join-submit-btn");
let error = document.getElementById("errors");

join.addEventListener("submit", e => {
    e.preventDefault();

    let data = {
        username: username.value,
        gender: gender.value
    }

    let x = new xhr();
    x.post("POST", "./inc/login/index.php", (rsp) => {
        let re = JSON.parse(rsp);
        if (re.status !== false) {
            window.location.replace(re.url);
        } else {
            if (re.type === "username") {
                username.value = "";
            }
            if (re.type === "gender") {
                gender.value = "";
            }
            error.textContent = re.msg;
        }
    }, data);
}, false);


let generateBtn = document.getElementById("generate-user-btn");

function generateUsername() {
    let randomIntStr = String(Math.floor(Math.random() * 9) + 1) + String(Math.floor(Date.now() / 1000) % 1000) + String(Math.floor(Math.random() * 9) + 1);
    let randomInt = parseInt(randomIntStr);
    username.value = "Guest" + randomInt;
}
generateBtn.addEventListener("click", generateUsername, false);