<div class="carousel">
    <div class="carousel-wrapper">
        <div class="carousel-slide">
            <div class="slide-content">
                <div class="slide-icon">
                    <i class="material-icons">music_note</i> <!-- Google Music Note Icon -->
                </div>
                <div class="slide-text">
                    <h2>Discover New Tracks</h2>
                    <p>Explore a wide variety of genres and find your next favorite song. Auro helps you discover new music effortlessly.</p>
                </div>
            </div>
        </div>
        <div class="carousel-slide">
            <div class="slide-content">
                <div class="slide-icon">
                    <i class="material-icons">playlist_play</i> <!-- Google Playlist Icon -->
                </div>
                <div class="slide-text">
                    <h2>Create Playlists</h2>
                    <p>Organize your favorite tracks into custom playlists. Enjoy seamless listening with Auro’s easy playlist management.</p>
                </div>
            </div>
        </div>
        <div class="carousel-slide">
            <div class="slide-content">
                <div class="slide-icon">
                    <i class="material-icons">cloud_upload</i> <!-- Google Cloud Upload Icon -->
                </div>
                <div class="slide-text">
                    <h2>Upload Your Music</h2>
                    <p>Upload your favorite tracks and manage your personal music library. Auro makes it easy to keep your music collection updated.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="carousel-dots">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    let slideIndex = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.dot');
    const slideInterval = 10000; // Change every 10 seconds

    function showSlides() {
        slides.forEach((slide, index) => {
            slide.style.transform = `translateX(-${slideIndex * 100}%)`;
            dots[index].classList.toggle('active', index === slideIndex);
        });
    }

    function nextSlide() {
        slideIndex = (slideIndex + 1) % slides.length;
        showSlides();
    }

    function prevSlide() {
        slideIndex = (slideIndex - 1 + slides.length) % slides.length;
        showSlides();
    }

    function setSlide(index) {
        slideIndex = index;
        showSlides();
    }

    // Initialize dots with event listeners for direct slide access
    if (dots.length > 0) {
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => setSlide(index));
        });
    } else {
        console.error('Dots are missing in the HTML.');
    }

    // Set up automatic slide transition
    let autoSlide = setInterval(nextSlide, slideInterval); 

    showSlides(); // Initialize slides
});
</script>
