const collapseLinks = document.querySelectorAll(".collapse_link");

for (const collapseLink of collapseLinks) {
    collapseLink.addEventListener("click", () => {

        const collapseElement = document.querySelector("#" +
            collapseLink.dataset.collapseBlockId);

        if (collapseElement.style.display === "none") {
            collapseElement.style.display = "block";
            collapseLink.innerHTML = "&uArr";
        } else {
            collapseElement.style.display = "none";
            collapseLink.innerHTML = "&dArr";
        }
    });
}