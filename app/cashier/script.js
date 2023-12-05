const navLinks = document.querySelectorAll(".nav-item");
const contentItems = document.querySelectorAll(".content-item");

for (const navLink of navLinks) {
navLink.addEventListener("click", (event) => {
    const targetContentId = event.target
    .getAttribute("href")
    .substring(1);
    const targetContentItem = document.getElementById(targetContentId);

    for (const contentItem of contentItems) {
    contentItem.style.display = "none";
    }

    targetContentItem.style.display = "block";
});
}