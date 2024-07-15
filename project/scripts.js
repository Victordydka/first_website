document
  .getElementById("register")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const email = document.getElementById("reg-email").value;
    const username = document.getElementById("reg-username").value;
    const password = document.getElementById("reg-password").value;

    localStorage.setItem("email", email);
    localStorage.setItem("username", username);
    localStorage.setItem("password", password);

    alert("Регистрация прошла успешно!");
    showLoginForm();
  });

document.getElementById("login").addEventListener("submit", function (event) {
  event.preventDefault();
  const email = document.getElementById("login-email").value;
  const password = document.getElementById("login-password").value;

  const storedEmail = localStorage.getItem("email");
  const storedPassword = localStorage.getItem("password");

  if (email === storedEmail && password === storedPassword) {
    document.getElementById("profile-email").textContent = storedEmail;
    document.getElementById("profile-username").textContent =
      localStorage.getItem("username");
    showProfile();
  } else {
    alert("Неправильный email или пароль.");
  }
});

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
