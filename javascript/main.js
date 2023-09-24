console.log("INFO: main.js initialized")
console.log("ALERT: going beast mode")

// Work Experience Sidebar Toggle ***
document.addEventListener("DOMContentLoaded", function() {
    const toggleBtn = document.getElementById("workExperienceToggle");
    const sidebar = document.getElementById("workExperienceSidebar");
    const closeBtn = document.getElementById("workExperienceClose");

    function showSidebar() {
        if(!sidebar.classList.contains("we__sidebar--show")) {
            sidebar.classList.add("we__sidebar--show");
        }
    }

    function hideSidebar() {
        sidebar.classList.remove("we__sidebar--show");
    }

    toggleBtn.addEventListener("click", showSidebar);

    closeBtn.addEventListener("click", hideSidebar);

    window.addEventListener("click", function(event) {
        if (!sidebar.contains(event.target) && event.target !== toggleBtn) {
            hideSidebar();
        }
    });

    window.addEventListener("keydown", function(event) {
        if (event.key === "Escape") {
            hideSidebar();
        }
    });
});


