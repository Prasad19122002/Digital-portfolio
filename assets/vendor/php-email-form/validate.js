]document.getElementById("contactForm").addEventListener("submit", function (event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch("contact.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("responseMessage").innerHTML = data;
    });
});
