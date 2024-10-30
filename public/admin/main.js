// Statistics Chart

const ctx = document.getElementById("myChart").getContext("2d");
const myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: [
      "Monday",
      "Tuesday",
      "Wednessday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday",
    ],
    datasets: [
      {
        label: "Previous Week",
        data: [283, 374, 80, 1025, 765, 193, 940],
        borderColor: "#afafaf",
        borderWidth: 2,
      },

      {
        label: "This Week",
        data: [483, 174, 780, 925, 865, 593, 640],
        borderColor: "#1CB0F6",
        borderWidth: 2,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

// Show Sidebar

const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".toggler");

menuBtn.addEventListener("click", () => {
  sideMenu.style.display = "block";
});

closeBtn.addEventListener("click", () => {
  sideMenu.style.display = "none";
});

//  Theme Toggler

themeToggler.addEventListener("click", () => {
  document.body.classList.toggle("dark-theme-variables");

  themeToggler.querySelector("span:nth-child(1)").classList.toggle("selected");
  themeToggler.querySelector("span:nth-child(2)").classList.toggle("selected");
});
