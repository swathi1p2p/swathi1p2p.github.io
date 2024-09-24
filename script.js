document.addEventListener("DOMContentLoaded", function() {
    const rolloverImage = document.getElementById("rolloverImage");
    const originalSrc = "image1.jpg";
    const rolloverSrc = "image2.jpg";

    rolloverImage.addEventListener("mouseover", function() {
        rolloverImage.src = rolloverSrc;
    });

    rolloverImage.addEventListener("mouseout", function() {
        rolloverImage.src = originalSrc;
    });
});