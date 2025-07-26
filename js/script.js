document.addEventListener("DOMContentLoaded", () => {
    const profileButton = document.getElementById("profileButton");
    const logoutMenu = document.getElementById("logoutMenu");
  
    profileButton.addEventListener("click", () => {
      logoutMenu.classList.toggle("hidden");
    });
  
    // Optional: Close the menu if clicking outside
    document.addEventListener("click", (event) => {
      if (!profileButton.contains(event.target) && !logoutMenu.contains(event.target)) {
        logoutMenu.classList.add("hidden");
      }
    });
  });
  
  function logout() {
    alert("You have logged out!");
    // Add logic for actual logout (e.g., redirect or clear session)
  }