<footer id="footer" class="bg-white red-section">
    <div id="copyrights">
        <div class="container">
            <div class="w-100 text-center ">
                <div class=" copyright-links mb-3">
                    <a href="#" class="text-dark">Address : Dhyriam
                        Towers, 73, M - Block, 6th Avenue,
                        Anna Nagar East, Chennai, Tamil Nadu
                        600102</a>
                </div>
                <div class="copyright-links mb-3">
                    <a href="#" class="text-dark">Phone no : +91 7418 255 565 | 044 2621 7511</a>
                </div>
                <div class="copyright-links mb-3">
                    <a href="#" class="text-dark">Mail ID : info@nambikkaitv.com</a>
                </div>
                <div>
                    <a href="https://www.facebook.com/NambikkaiTV/"><img src="assets/img/f2.png" loading="lazy" alt></a>
                    <a href="https://twitter.com/TvNambikkai"><img src="assets/img/f1.png" loading="lazy" alt></a>
                    <a href="https://www.instagram.com/nambikkaitv/"><img src="assets/img/f4.png" loading="lazy" alt></a>
                    <a href="https://www.youtube.com/channel/UCUPwezexXurkW5KDB6kiUFg"><img src="assets/img/f3.png" loading="lazy" alt></a>

                </div>
                <div class="copyrights">
                    <a href="#">2024 &copy; Nambikkai Television Network All Insights Reserved</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const initSlider = () => {
        const imageList = document.querySelector(".slider-wrapper .image-list");
        const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
        const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

        const handleSlideButtons = () => {
            slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "block";
            slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "block";
        };

        slideButtons.forEach(button => {
            button.addEventListener("click", () => {
                const direction = button.id === "prev-slide" ? -1 : 1;
                const scrollAmount = imageList.clientWidth * direction;
                imageList.scrollBy({
                    left: scrollAmount,
                    behavior: "smooth"
                });
            });
        });

        imageList.addEventListener("scroll", handleSlideButtons);
        window.addEventListener("resize", () => {
            handleSlideButtons();
        });

        // Initial call to handleSlideButtons to set up the button visibility
        handleSlideButtons();
    };

    window.addEventListener("load", initSlider);
</script>
</body>

</html>