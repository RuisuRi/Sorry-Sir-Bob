const authenticator = new CustomEvent("authenticate_input");


function login() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  console.log("Username:", username); //store username in console
  localStorage.setItem('username', username);

  if (username == AccountName[0] && password == Password[0]) {
    alert('Form submitted!');
    localStorage.setItem("LoggedIn", 1);
    document.dispatchEvent(authenticator);
    return false;
  } else if (username == AccountName[1] && password == Password[1]) {
    alert('Form submitted!');
    localStorage.setItem("LoggedIn", 2);
    document.dispatchEvent(authenticator);
    return false;
  } else if (username == AccountName[2] && password == Password[2]) {
    alert('Form submitted!');
    localStorage.setItem("LoggedIn", 3);
    document.dispatchEvent(authenticator);
    return false;
  } else {
    alert('Invalid Username or Password!');
    return false;
  }
}

document.addEventListener("authenticate_input", authorize);

function authorize() {
  window.location.href = "front-page.html";
}

document.addEventListener("authenticate_resume", authorize_resume);

function authorize_resume() {
  if (localStorage.getItem("LoggedIn") == 1) {
    window.location.href = "Resumes/Jarrod/jarrod_resume.html";
    return false;
  } else if (localStorage.getItem("LoggedIn") == 2) {
    window.location.href = "Resumes/Aeon/Aeon_Resume.html";
    return false;
  } else if (localStorage.getItem("LoggedIn") == 3) {
    window.location.href = "Resumes/Hexel/hexel_resume.html";
    return false;
  }
}

function signup() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var YrLvl = document.getElementById("YrLvl").value;
  var FavColor = document.getElementById("FavColor").value;
  var FavFood = document.getElementById("FavFood").value;

  alert("You have successfully made an account!" +
    "\nUsername: " + username +
    "\nPassword: " + password +
    "\nYear Level: " + YrLvl +
    "\nFavorite Color: " + FavColor +
    "\nFavorite Food: " + FavFood
  );  
}
