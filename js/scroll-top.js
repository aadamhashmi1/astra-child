document.addEventListener("DOMContentLoaded", function () {
    const scrollBtn = document.createElement("div");
    scrollBtn.id = "scroll-top";
    scrollBtn.innerHTML = "↑";
    document.body.appendChild(scrollBtn);

    window.addEventListener("scroll", function () {
        scrollBtn.style.display = window.scrollY > 300 ? "block" : "none";
    });

    scrollBtn.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
});
