//resoucres/js/auth.js
function togglePw(inputId, iconId) {
    const inp = document.getElementById(inputId);
    const ico = document.getElementById(iconId);
    if (inp.type === "password") {
        inp.type = "text";
        ico.className = "ti ti-eye-off input-icon";
    } else {
        inp.type = "password";
        ico.className = "ti ti-eye input-icon";
    }
}

function showView(v) {
    ["loginView", "registerView", "forgotView"].forEach((id) => {
        const el = document.getElementById(id);
        if (el) el.style.display = "none";
    });
    const target = document.getElementById(v);
    if (target) target.style.display = "block";
}

// --- ACTUAL BACKEND API CALLS ---

async function doLogin(btn) {
    const email = document.getElementById("loginUser").value; // Changed to email assuming Laravel default auth
    const password = document.getElementById("loginPass").value;

    showBtn(btn, true);

    try {
        const response = await fetch("/api/login", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                Accept: "application/json",
            },
            body: JSON.stringify({ email: email, password: password }),
        });

        const data = await response.json();

        if (response.ok) {
            // Save the token Laravel Sanctum gives us
            localStorage.setItem("auth_token", data.token);
            showToast("Login successful!", "success");
            showDashboard(data.user); // Pass user data to utils.js
        } else {
            showToast(data.message || "Invalid credentials", "error");
        }
    } catch (error) {
        showToast("Server connection error", "error");
    }

    showBtn(btn, false);
}

async function doLogout(btn) {
    showBtn(btn, true);

    try {
        await fetch("/api/logout", {
            method: "POST",
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem("auth_token")}`,
            },
        });

        // Clear local memory
        localStorage.removeItem("auth_token");
        currentUser = null;

        // Reset UI
        document.getElementById("dashScreen").style.display = "none";
        document.getElementById("authScreen").style.display = "flex";
        showView("loginView");
        showToast("Logged out securely", "info");
    } catch (error) {
        console.error("Logout error", error);
    }
    showBtn(btn, false);
}
// --- STARTUP IGNITION ---
// This tells the browser what to show as soon as the page loads
document.addEventListener('DOMContentLoaded', () => {
    const authScreen = document.getElementById('authScreen');
    const dashScreen = document.getElementById('dashScreen');

    if (authScreen) authScreen.style.display = 'flex';
    if (dashScreen) dashScreen.style.display = 'none';
    
    showView('loginView'); // Force the login form to be visible
});