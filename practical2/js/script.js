document.addEventListener("DOMContentLoaded", function () {
    console.log("Website Loaded Successfully");

    // Redirect to home when site is refreshed
    if (performance.navigation.type === 1) {
        window.location.href = "index.html";
    }
    // Scroll to top on page reload
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    };
    // Contact Form Submission Handling
    document.getElementById("contact-form").addEventListener("submit", function(event) {
        event.preventDefault();  // Prevent page refresh

        let name = document.getElementById("name").value.trim();
        let email = document.getElementById("email").value.trim();
        let message = document.getElementById("message").value.trim();
        let formMessage = document.getElementById("form-message");

        if (name === "" || email === "" || message === "") {
            formMessage.style.color = "red";
            formMessage.textContent = "Please fill out all fields.";
            return;
        }

        formMessage.style.color = "green";
        formMessage.textContent = "Message sent successfully!";
        this.reset(); // Reset form fields after submission
    });
});

