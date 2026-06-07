//resoucres/js/utils.js
// Global State Variables
// let isDark = true;
// let currentUser = null;

// Dummy data for screens we haven't built APIs for yet (Orders, Users)
// let orders = [];
// let users = [];

// --- UI HELPERS ---
function openModal(id) {
    document.getElementById(id).classList.add("open");
}

function closeModal(id) {
    document.getElementById(id).classList.remove("open");
}

function showBtn(btn, loading) {
    btn.classList.toggle("loading", loading);
}

function toggleTheme() {
    isDark = !isDark;
    document.body.classList.toggle("light", !isDark);
    document.getElementById("themeTrack").classList.toggle("on", !isDark);
    document.getElementById("themeKnob").classList.toggle("on", !isDark);
    document.getElementById("themeLabel").textContent = isDark
        ? "Dark"
        : "Light";
}

function showToast(msg, type = "info") {
    const c = document.getElementById("toastContainer");
    const t = document.createElement("div");
    t.className = `toast toast-${type}`;
    const icons = {
        success: "ti-circle-check",
        error: "ti-alert-circle",
        info: "ti-info-circle",
    };
    t.innerHTML = `<i class="ti ${icons[type] || "ti-info-circle"}" style="color:var(--${type === "success" ? "green" : type === "error" ? "red" : "blue"})"></i><span>${msg}</span>`;
    c.appendChild(t);
    setTimeout(() => t.remove(), 3500);
}

// --- NAVIGATION HELPERS ---
function showDashboard(userData) {
    currentUser = userData;
    document.getElementById("authScreen").style.display = "none";
    document.getElementById("dashScreen").style.display = "flex";
    document.getElementById("topbarName").textContent = currentUser.name;
    document.getElementById("topbarRole").textContent = currentUser.role;

    // Hide admin-only items if user is not admin
    if (currentUser.role !== "admin") {
        document.querySelectorAll(".admin-only").forEach((el) => {
            el.style.display = "none";
        });
    } else {
        document.querySelectorAll(".admin-only").forEach((el) => {
            el.style.display = "flex";
        });
    }

    showPage("analytics", document.querySelector(".nav-item"));
}

function showPage(page, el) {
    document
        .querySelectorAll(".nav-item")
        .forEach((n) => n.classList.remove("active"));
    if (el) el.classList.add("active");

    // Destroy charts before changing pages to prevent memory leaks
    if (typeof destroyCharts === "function") destroyCharts();

    const titles = {
        analytics: "All Products Analytics",
        orders: "Order Analysis",
        sold: "Product Sold",
        crud: "Product CRUD",
        roles: "User Roles & Management",
        profile: "My Profile",
    };
    document.getElementById("pageTitle").textContent = titles[page] || page;

    const c = document.getElementById("mainContent");
    c.innerHTML = ""; // Clear current view

    // Route to the correct render function
    if (page === "crud") renderCrud(c);
    // Add other render functions here as you build them
}

// Close modals on overlay click or Escape key
document.querySelectorAll(".modal-overlay").forEach((o) => {
    o.addEventListener("click", (e) => {
        if (e.target === o) o.classList.remove("open");
    });
});
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape")
        document
            .querySelectorAll(".modal-overlay.open")
            .forEach((o) => o.classList.remove("open"));
});



// ---- UTILITIES ----
// function openModal(id) {
//     document.getElementById(id).classList.add("open");
// }
// function closeModal(id) {
//     document.getElementById(id).classList.remove("open");
// }
// function toggleTheme() {
//     isDark = !isDark;
//     document.body.classList.toggle("light", !isDark);
//     document.getElementById("themeTrack").classList.toggle("on", !isDark);
//     document.getElementById("themeKnob").classList.toggle("on", !isDark);
//     document.getElementById("themeLabel").textContent = isDark
//         ? "Dark"
//         : "Light";
// }
// function showToast(msg, type = "info") {
//     const c = document.getElementById("toastContainer");
//     const t = document.createElement("div");
//     t.className = `toast toast-${type}`;
//     const icons = {
//         success: "ti-circle-check",
//         error: "ti-alert-circle",
//         info: "ti-info-circle",
//     };
//     t.innerHTML = `<i class="ti ${icons[type] || "ti-info-circle"}" style="color:var(--${type === "success" ? "green" : type === "error" ? "red" : "blue"})"></i><span>${msg}</span>`;
//     c.appendChild(t);
//     setTimeout(() => t.remove(), 3500);
// }
// ---------