<?php include 'header.php' ?>


<section class="banner-img">
    <div class="container">
        <div class="row justify-content-between text-white">
            <div class="col-md-6">
                <h1 class="fw-bold ">
                    Nambikkai Gallery
                </h1>
            </div>

        </div>
    </div>
</section>

<section class="gallary" id="gallary">
    <div class="television-shows red-section">
        <h3 class="h3-gallary">GALLERY</h3>
    </div>
    <div class="container gallery pt-5 pb-5">
        <div class="row mx-auto">
            <div class="col-md-6 mb-4">
                <div class=" nambi-gallri">
                    <img loading="lazy" src="assets/img/nambikkai_Gallery_production.png" alt="Production" class=" img-fluid">
                </div>
            </div>
            
            <div class="col-md-6 mb-4 ">
                <div class="nambi-gallri">
                    <img loading="lazy" src="assets/img/nambikkai_Gallery_Studio.png" alt="Studio" class="img-fluid">
                </div>
            </div>
            <div class="col-md-5 mb-4 mx-auto">
                <div class=" nambi-gallri-1">
                    <img loading="lazy" src="assets/img/nambikkai_Gallery_office.png" alt="Office" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<main>
    <section class="gallery-photos gallery-sec" id="gallery">
        <!-- Display only the first image from Group 1 -->
        <img src="assets/img/production/1.jpg" loading="lazy" data-group="group1" alt="Group 1 Image 1" />

        <!-- Display only the first image from Group 2 -->
        <img src="assets/img/production/4.jpg" loading="lazy" data-group="group2" alt="Group 2 Image 1" />

        <!-- Display only the first image from Group 3 -->
        <img src="assets/img/production/7.jpg" loading="lazy" data-group="group3" alt="Group 3 Image 1" />
    </section>

    <div class="lightbox" id="lightbox">
        <span class="close close-button" id="close">&times;</span>
        <span class="arrow prev" id="prev">←</span>
        <span class="arrow next" id="next">→</span>
        <figure> 
            <img src="" loading="lazy" alt="" class="lightbox-image" id="lightbox-image">
            <figcaption class="lightbox-caption" id="lightbox-caption"></figcaption>
        </figure>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    const gallery = document.getElementById('gallery');
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxCaption = document.getElementById('lightbox-caption');
    const closeButton = document.getElementById('close');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');

    let currentIndex = 0;
    let currentGroup = []; // Holds the current group of images being displayed

    const imageGroups = {
        'group1': [
            { src: 'assets/img/production/1.jpg', caption: 'Group 1 Image 1' },
            { src: 'assets/img/production/2.jpg', caption: 'Group 1 Image 2' },
            { src: 'assets/img/production/3.jpg', caption: 'Group 1 Image 3' }
        ],
        'group2': [
            { src: 'assets/img/production/4.jpg', caption: 'Group 2 Image 1' },
            { src: 'assets/img/production/5.jpg', caption: 'Group 2 Image 2' },
            { src: 'assets/img/production/6.jpg', caption: 'Group 2 Image 3' }
        ],
        'group3': [
            { src: 'assets/img/production/7.jpg', caption: 'Group 3 Image 1' },
            { src: 'assets/img/production/8.jpg', caption: 'Group 3 Image 2' },
            { src: 'assets/img/production/9.jpg', caption: 'Group 3 Image 3' }
        ]
    };

    // Click event listener for gallery images
    gallery.addEventListener('click', e => {
        if (e.target.tagName === 'IMG') {
            const group = e.target.dataset.group; // Get the group of the clicked image
            currentGroup = imageGroups[group]; // Get the array of images in that group
            currentIndex = 0; // Start with the first image in the group
            const imageSrc = currentGroup[currentIndex].src; // Get the first image source
            const caption = currentGroup[currentIndex].caption; // Get the first image caption
            updateImage(imageSrc, caption); // Show the clicked image in the lightbox
            lightbox.style.display = 'flex'; // Show the lightbox
            fadeIn(lightbox, 500); // Fade in the lightbox
            document.body.style.overflow = 'hidden'; // Disable page scrolling
        }
    });

    // Click event listener for closing the lightbox
    closeButton.addEventListener('click', () => {
        fadeOut(lightbox, 500, () => {
            lightbox.style.display = 'none'; // Hide the lightbox
            document.body.style.overflow = 'auto'; // Enable page scrolling
        });
    });

    // Click event listener for clicking outside the image to close the lightbox
    lightbox.addEventListener('click', e => {
        if (e.target === lightbox) {
            fadeOut(lightbox, 500, () => {
                lightbox.style.display = 'none'; // Hide the lightbox
                document.body.style.overflow = 'auto'; // Enable page scrolling
            });
        }
    });

    // Next button click event
    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % currentGroup.length; // Move to the next image in the group
        const nextImage = currentGroup[currentIndex].src;
        const nextCaption = currentGroup[currentIndex].caption;
        fadeOut(lightboxImage, 500, () => {
            updateImage(nextImage, nextCaption); // Update to the next image
        });
    });

    // Prev button click event
    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + currentGroup.length) % currentGroup.length; // Move to the previous image in the group
        const prevImage = currentGroup[currentIndex].src;
        const prevCaption = currentGroup[currentIndex].caption;
        fadeOut(lightboxImage, 500, () => {
            updateImage(prevImage, prevCaption); // Update to the previous image
        });
    });

    // Function to fade in an element
    function fadeIn(element, duration) {
        element.style.opacity = '0'; // Start with opacity 0
        element.style.transition = `opacity ${duration / 1000}s`; // Set transition duration
        setTimeout(() => {
            element.style.opacity = '1'; // Fade in to opacity 1
        }, 50); // Delay to apply the transition
    }

    // Function to fade out an element
    function fadeOut(element, duration, onComplete) {
        element.style.opacity = '1'; // Start with opacity 1
        element.style.transition = `opacity ${duration / 1000}s`; // Set transition duration
        setTimeout(() => {
            element.style.opacity = '0'; // Fade out to opacity 0
            setTimeout(onComplete, duration); // Call onComplete after the fade-out duration
        }, 50); // Delay to apply the transition
    }

    // Function to update the image and caption
    function updateImage(src, caption) {
        lightboxImage.src = src; // Update the image source
        lightboxCaption.innerHTML = caption; // Update the caption
        fadeIn(lightboxImage, 500); // Fade in the new image
    }
});

</script>



<?php include 'footer.php' ?>