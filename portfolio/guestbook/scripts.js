document.getElementById("guestForm").onsubmit = validate;


function validate()
{
    let isValid = true;

    let errors = document.getElementsByClassName("err");
    for (let i =0; i<errors.length;i++){
        errors[i].style.display = "none";
    }

    //check first name
    let fname = document.getElementById("fname").value;
    if (fname === "")
    {
        let errFName = document.getElementById("err-fname");
        errFName.style.display = "inline";
        isValid = false;
    }

    //check last name
    let lname = document.getElementById("lname").value;
    if (lname === "")
    {
        let errLName = document.getElementById("err-lname");
        errLName.style.display = "inline";
        isValid = false;
    }

    //check how we met
    let meet = document.getElementById("meet").value;
    if (meet == "none")
    {
        let errMeet = document.getElementById("err-meet");
        errMeet.style.display = "inline";
        isValid = false;
    }


    //check email syntax
    let email = document.getElementById("email").value;
    if (document.getElementById("mailList").checked) {
        if (email === "") {
            let errEmail = document.getElementById("err-email");
            let validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            if (!email.match(validRegex)) {
                errEmail.style.display = "inline";
                return false;
            }
            isValid = false;
        }
    }

    //check email syntax
    let url = document.getElementById("linkedURL").value;
        if (url=== "") {
            let errURL = document.getElementById("err-url");
            let httpRegex = /((?:https?\:\/\/|www\.)(?:[-a-z0-9]+\.)*[-a-z0-9]+.*)/i;
            if (!url.match(httpRegex)) {
                errURL.style.display = "inline";
                return true;
            }
            isValid = false;
        }



    return isValid;
}

function show(){
    let mailHTML = document.getElementById("mailHTML");
    let mailText = document.getElementById("mailText");
    if (document.getElementById("mailList").checked)
    {

        mailHTML.style.display = "inline";
        mailText.style.display = "inline";
    }
    if (document.getElementById("mailList").checked === false)
    {
        mailHTML.style.display = "none";
        mailText.style.display = "none";
    }
}

function otherText()
{
    let other = document.getElementById("other");
    if (document.getElementById("meet").value === "other")
    {
        other.style.display = "inline";

    }
    if (document.getElementById("meet").value !== "other")
    {
        other.style.display = "none";
    }
}



