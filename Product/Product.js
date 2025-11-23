//  ================== START PRODUCT DETAIL PAGE ==================  
document.addEventListener("DOMContentLoaded", () => {
    const mainImg = document.querySelector(".main-product-img");
    const thumbs = document.querySelectorAll(".thumbnail-img");

    thumbs.forEach(thumb => {
        thumb.addEventListener("click", () => {
            mainImg.src = thumb.src;

            thumbs.forEach(t => t.classList.remove("active"));
            thumb.classList.add("active");
        });
    });
});
//  ================== END PRODUCT DETAIL PAGE ==================  
