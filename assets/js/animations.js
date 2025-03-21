document.addEventListener('DOMContentLoaded', () => {
    const musicText = document.createElement('h1');
    const magnetText = document.createElement('h1');

    musicText.textContent = 'Music';
    magnetText.textContent = 'Magnet';

    musicText.classList.add('animated-text', 'music-text');
    magnetText.classList.add('animated-text', 'magnet-text');

    const textContainer = document.querySelector('.container-titel');
    textContainer.innerHTML = '';
    textContainer.appendChild(musicText);
    textContainer.appendChild(magnetText);

    musicText.style.opacity = '0';
    musicText.style.transform = 'translateX(-100px)';
    musicText.style.transition = 'opacity 1s ease, transform 1s ease';

    magnetText.style.opacity = '0';
    magnetText.style.transform = 'translateX(100px)';
    magnetText.style.transition = 'opacity 1s ease, transform 1s ease';

    setTimeout(() => {
        musicText.style.opacity = '1';
        musicText.style.transform = 'translateX(0)';
    }, 300);

    setTimeout(() => {
        magnetText.style.opacity = '1';
        magnetText.style.transform = 'translateX(0)';
    }, 600);

    const kanyeImage = document.querySelector('.container-kanye img');
    kanyeImage.style.opacity = '0';
    kanyeImage.style.transition = 'opacity 2s ease';

    setTimeout(() => {
        kanyeImage.style.opacity = '0.75';
    }, 900);

});