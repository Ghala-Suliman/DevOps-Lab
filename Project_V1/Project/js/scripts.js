// Form Validation
function validateForm(form) {
    const inputs = form.querySelectorAll("input[required]");
    let isValid = true;

    inputs.forEach(input => {
        if (input.value.trim() === "") {
            alert(`${input.name} is required.`);
            isValid = false;
        }
    });

    return isValid;
}

// Animation for Banner
document.addEventListener("DOMContentLoaded", () => {
    const bannerText = document.querySelector(".banner h1");
    bannerText.style.transition = "transform 1s ease-in-out";
    bannerText.style.transform = "translateY(0)";
});


