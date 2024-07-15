document.addEventListener("DOMContentLoaded", () => {
  const loginModal = document.getElementById("loginModal");
  const registerModal = document.getElementById("registerModal");

  const loginBtn = document.getElementById("loginBtn");
  const registerBtn = document.getElementById("registerBtn");

  const closeLogin = document.getElementById("closeLogin");
  const closeRegister = document.getElementById("closeRegister");

  loginBtn.addEventListener("click", () => {
    loginModal.style.display = "block";
  });

  registerBtn.addEventListener("click", () => {
    registerModal.style.display = "block";
  });

  closeLogin.addEventListener("click", () => {
    loginModal.style.display = "none";
  });

  closeRegister.addEventListener("click", () => {
    registerModal.style.display = "none";
  });

  window.addEventListener("click", (event) => {
    if (event.target == loginModal) {
      loginModal.style.display = "none";
    }
    if (event.target == registerModal) {
      registerModal.style.display = "none";
    }
  });
});
