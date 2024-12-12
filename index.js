const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle"),
      sidebar = body.querySelector("nav"),
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if(getMode && getMode === "dark") {
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus === "close") {
    sidebar.classList.toggle("close");
}

if (modeToggle) {
    modeToggle.addEventListener("click", () => {
        body.classList.toggle("dark");
        if (body.classList.contains("dark")) {
            localStorage.setItem("mode", "dark");
        } else {
            localStorage.setItem("mode", "light");
        }
    });
}

if (sidebarToggle) {
    sidebarToggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
        if (sidebar.classList.contains("close")) {
            localStorage.setItem("status", "close");
        } else {
            localStorage.setItem("status", "open");
        }
    });
}

// JavaScript to make the search bar functional
const searchBar = document.getElementById("search-bar");
const destinations = document.querySelectorAll(".data.destination .data-list");
const travelers = document.querySelectorAll(".data.names .data-list");

searchBar.addEventListener("input", () => {
    const searchQuery = searchBar.value.toLowerCase();

    destinations.forEach((destination, index) => {
        const destinationText = destination.textContent.toLowerCase();
        const traveler = travelers[index];

        if (destinationText.includes(searchQuery)) {
            destination.style.display = "block";
            traveler.style.display = "block";
        } else {
            destination.style.display = "none";
            traveler.style.display = "none";
        }
    });
});