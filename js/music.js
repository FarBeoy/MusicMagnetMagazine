document.querySelectorAll('.play').forEach(button => {
    button.addEventListener('click', function () {
        const audio = this.parentElement.querySelector('audio');
        const icon = this.querySelector('.fa');
        const title = this.parentElement.querySelector('h4');
        const artist = this.parentElement.querySelector('p');

        if (audio.paused) {
            document.querySelectorAll('audio').forEach(a => {
                a.pause();
                a.currentTime = 0;
                const parentItem = a.closest('.item');
                if (parentItem) {
                    parentItem.querySelector('h4').style.color = '';
                    parentItem.querySelector('p').style.color = '';
                }
            });
            audio.play();
            icon.classList.replace('fa-play', 'fa-pause');
            title.style.color = '#39e75f';
            artist.style.color = '#39e75f';
        } else {
            audio.pause();
            icon.classList.replace('fa-pause', 'fa-play');
            title.style.color = '';
            artist.style.color = '';
        }

        audio.onended = () => {
            icon.classList.replace('fa-pause', 'fa-play');
            title.style.color = '';
            artist.style.color = '';
        };
    });
});
