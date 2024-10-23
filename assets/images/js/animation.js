/* JS Slider */

function testimonialSlider() {
    const carouselOne = document.getElementById('carouselOne');
    if (carouselOne) { /*If element exist*/
        carouselOne.addEventListener('slid.bs.carousel', function () {
            const activeItem = this.querySelector(".active");
            document.querySelector(".js-testimonial-img").src =
                activeItem.getAttribute("data-js-testimonial-img");
        })
    }

}
testimonialSlider();

/* JS Course preview */
function coursePreviewVideo() {
    const coursePreviewModel = document.querySelector(".js-course-preview-modal");
    if (coursePreviewVideo) { /* if the modal exist */
        coursePreviewModel.addEventListener("shown.bs.modal",function(){
            this.querySelector(".js-course-preview-video").play();
            this.querySelector(".js-course-preview-video").currentTime = 0;
        });
        coursePreviewModel.addEventListener("hide.bs.modal",function(){
            this.querySelector(".js-course-preview-video").pause()
        })
    }
}
coursePreviewVideo();