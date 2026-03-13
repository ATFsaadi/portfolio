document.addEventListener("DOMContentLoaded", () => {

  const themeLink = document.getElementById("theme-style");
  const themeToggle = document.getElementById("theme-toggle");

  if (!themeLink || !themeToggle) return;

  const themeIcon = themeToggle.querySelector("i");

  const defaultTheme = "light";
  let currentTheme = localStorage.getItem("theme") || defaultTheme;

  applyTheme(currentTheme);

  themeToggle.addEventListener("click", () => {
    currentTheme = currentTheme === "light" ? "dark" : "light";

    localStorage.setItem("theme", currentTheme);

    applyTheme(currentTheme);
  });

  function applyTheme(theme) {

    const particleColors = {
      light: "#4CA8D6",
      dark: "#D6974C"
    };

    if (theme === "light") {
      themeLink.href = "assets/styles/sun.css";

      themeIcon.classList.remove("fa-moon");
      themeIcon.classList.add("fa-sun");
    } 
    else {
      themeLink.href = "assets/styles/moon.css";

      themeIcon.classList.remove("fa-sun");
      themeIcon.classList.add("fa-moon");
    }

    document.dispatchEvent(
      new CustomEvent("themeChange", {
        detail: { color: particleColors[theme] }
      })
    );
  }

});