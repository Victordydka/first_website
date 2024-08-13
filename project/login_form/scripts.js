function showLoginForm() {
  document.getElementById("registration-form").classList.add("hidden");
  document.getElementById("login-form").classList.remove("hidden");
}

function showRegisterForm() {
  document.getElementById("login-form").classList.add("hidden");
  document.getElementById("registration-form").classList.remove("hidden");
}

function showProfile() {
  document.getElementById("login-form").classList.add("hidden");
  document.getElementById("profile").classList.remove("hidden");
}

function logout() {
  document.getElementById("profile").classList.add("hidden");
  document.getElementById("login-form").classList.remove("hidden");
}
