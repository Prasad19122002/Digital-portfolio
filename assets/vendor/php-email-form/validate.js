document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("contact-form").addEventListener("submit", function(event) {
        event.preventDefault();

        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let message = document.getElementById("message").value;

        if (name && email && message) {
            // Use AJAX to submit the form data to the server
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "process_form.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("response").innerHTML = xhr.responseText;
                }
            };

            let formData = new FormData(this);
            xhr.send(formData);
        } else {
            alert("Please fill in all fields.");
        }
    });
});
