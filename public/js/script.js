document.getElementById('hamburgerMenu').addEventListener('click', function () {
    const navMenu = document.getElementById('navMenu');
    navMenu.classList.toggle('active');
});

document.addEventListener("DOMContentLoaded", function () {
    const rowsPerPage = 5; 
    const table = document.getElementById("data-table");
    const tbody = table.querySelector("tbody");
    const rows = Array.from(tbody.querySelectorAll("tr"));
    const pagination = document.getElementById("pagination");

    function displayPage(page) {
        const startIndex = (page - 1) * rowsPerPage;
        const endIndex = startIndex + rowsPerPage;

        rows.forEach((row, index) => {
            row.style.display = index >= startIndex && index < endIndex ? "" : "none";
        });

        const buttons = pagination.querySelectorAll("button");
        buttons.forEach((button, index) => {
            button.classList.toggle("active", index + 1 === page);
        });
    }

    function setupPagination() {
        const pageCount = Math.ceil(rows.length / rowsPerPage);
        pagination.innerHTML = "";

        for (let i = 1; i <= pageCount; i++) {
            const button = document.createElement("button");
            button.textContent = i;
            button.addEventListener("click", () => displayPage(i));
            pagination.appendChild(button);
        }
    }

    setupPagination();
    displayPage(1);
});


const sortByToggle = document.getElementById("sortByToggle");
const sortingList = document.getElementById("sortingList");
const arrowUp = document.getElementsByClassName("arrow__up")[0];
const arrowDown = document.getElementsByClassName("arrow__down")[0];

function updateArrowState() {
    if (sortingList.classList.contains("active")) {
        arrowDown.style.display = "none";
        arrowUp.style.display = "block";
    } else {
        arrowDown.style.display = "block";
        arrowUp.style.display = "none";
    }
}

updateArrowState();

// Toggle daftar saat "Sort by" diklik
sortByToggle.addEventListener("click", () => {
    sortingList.classList.toggle("active");
    updateArrowState();
});

// Menutup daftar jika klik di luar elemen
document.addEventListener("click", (event) => {
    if (!sortByToggle.contains(event.target) && !sortingList.contains(event.target)) {
        sortingList.classList.remove("active");
        updateArrowState();
    }
});