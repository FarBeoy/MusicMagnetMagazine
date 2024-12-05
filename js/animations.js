// Wait for the DOM to load
document.addEventListener('DOMContentLoaded', () => {
    // Elements for "Music" and "Magnet"
    const musicText = document.createElement('h1');
    const magnetText = document.createElement('h1');

    // Assign text content
    musicText.textContent = 'Music';
    magnetText.textContent = 'Magnet';

    // Add classes for styling and animation
    musicText.classList.add('animated-text', 'music-text');
    magnetText.classList.add('animated-text', 'magnet-text');

    // Append to the container
    const textContainer = document.querySelector('.container-titel');
    textContainer.innerHTML = ''; // Clear existing content
    textContainer.appendChild(musicText);
    textContainer.appendChild(magnetText);

    // Animations
    musicText.style.opacity = '0';
    musicText.style.transform = 'translateX(-100px)';
    musicText.style.transition = 'opacity 1s ease, transform 1s ease';

    magnetText.style.opacity = '0';
    magnetText.style.transform = 'translateX(100px)';
    magnetText.style.transition = 'opacity 1s ease, transform 1s ease';

    // Trigger animations with delay
    setTimeout(() => {
        musicText.style.opacity = '1';
        musicText.style.transform = 'translateX(0)';
    }, 300);

    setTimeout(() => {
        magnetText.style.opacity = '1';
        magnetText.style.transform = 'translateX(0)';
    }, 600);

    // Fade-in animation for Kanye image
    const kanyeImage = document.querySelector('.container-kanye img');
    kanyeImage.style.opacity = '0';
    kanyeImage.style.transition = 'opacity 2s ease';

    setTimeout(() => {
        kanyeImage.style.opacity = '0.75'; // Match initial CSS opacity
    }, 900);

    setTimeout(() => {
        logo.style.transform = 'rotate(360deg) scale(1)';
    }, 500);
});