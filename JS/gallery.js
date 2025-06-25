document.addEventListener('DOMContentLoaded', function() {
    const galleryImages = document.querySelectorAll('.gallery-img');
    const modalImage = document.getElementById('modalImage');

    galleryImages.forEach(img => {
        img.addEventListener('click', function() {
            modalImage.src = this.src;
        });
    });
});
