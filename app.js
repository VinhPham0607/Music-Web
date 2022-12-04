function openMusic(evt, musicType, musicType1) {
    var i, x, y, tablinks;
    x = document.getElementsByClassName("music");
    y = document.getElementsByClassName("music1");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
        y[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" tab-color", "");
    }
    document.getElementById(musicType).style.display = "block";
    document.getElementById(musicType1).style.display = "block";
    evt.currentTarget.className += " tab-color";
}



const music = new Audio('Skyfall.mp3');



Array.from(document.getElementsByClassName('songItem')).forEach((element, i) => {
    element.getElementsByTagName('img')[0].src = songs[i].poster;
    element.getElementsByTagName('h5')[0].innerHTML = songs[i].songName;
})



let search_result = document.getElementsByClassName('search_result')[0];

songs.forEach(element => {
    const { id, songName, poster } = element;
    let card = document.createElement('a');
    card.classList.add('card');
    card.innerHTML = `
    <img src="${poster}" alt="">
    <div class="content">
        ${songName}
    </div>
    <i class="fa-solid fa-circle-play playListPlay1" id="${id}"></i>
    `;
    search_result.appendChild(card);
})



let input = document.getElementsByTagName('input')[0];

input.addEventListener('keyup', () => {
    let input_value = input.value.toUpperCase();
    let items = search_result.getElementsByTagName('a');

    for (let i = 0; i < items.length; i++) {
        let as = items[i].getElementsByClassName('content')[0];
        let text_value = as.textContent || as.innerText;

        if (text_value.toUpperCase().indexOf(input_value) > -1) {
            items[i].style.display = "flex";
        } else {
            items[i].style.display = "none";
        }

        if (input.value == 0) {
            search_result.style.display = "none";
        } else {
            search_result.style.display = "";
        }
    }
})



let masterPlay = document.getElementById('masterPlay');
let wave = document.getElementsByClassName('wave')[0];

masterPlay.addEventListener('click', () => {
    if (music.paused || music.currentTime <= 0) {
        music.play();
        wave.classList.add('active2');
        masterPlay.classList.remove('fa-play');
        masterPlay.classList.add('fa-pause');
        Array.from(document.getElementsByClassName('playListPlay1'))[`${index - 1}`].classList.replace('fa-circle-play', 'fa-circle-pause');
        Array.from(document.getElementsByClassName('playListPlay'))[`${index - 1}`].classList.replace('fa-circle-play', 'fa-circle-pause');
    } else {
        music.pause();
        wave.classList.remove('active2');
        masterPlay.classList.add('fa-play');
        masterPlay.classList.remove('fa-pause');
        Array.from(document.getElementsByClassName('playListPlay1'))[`${index - 1}`].classList.replace('fa-circle-pause', 'fa-circle-play');
        Array.from(document.getElementsByClassName('playListPlay'))[`${index - 1}`].classList.replace('fa-circle-pause', 'fa-circle-play');
    }
})



const makeAllPlays = () => {
    Array.from(document.getElementsByClassName('playListPlay')).forEach((element) => {
        element.classList.add('fa-circle-play');
        element.classList.remove('fa-circle-pause');
    })
}
const makeAllPlays1 = () => {
    Array.from(document.getElementsByClassName('playListPlay1')).forEach((element) => {
        element.classList.add('fa-circle-play');
        element.classList.remove('fa-circle-pause');
    })
}
const makeAllBackgrounds = () => {
    Array.from(document.getElementsByClassName('songItem')).forEach((element) => {
        element.style.background = "rgb(105, 105, 170, 0)";
    })
}



let index = 0;
let poster_master_play = document.getElementById('poster_master_play');
let download_music = document.getElementById('download_music');
let title = document.getElementById('title');

Array.from(document.getElementsByClassName('playListPlay')).forEach((element) => {
    element.addEventListener('click', (e) => {
        index = e.target.id;
        makeAllPlays();
        makeAllPlays1();
        e.target.classList.remove('fa-circle-play');
        e.target.classList.add('fa-circle-pause');
        Array.from(document.getElementsByClassName('playListPlay1'))[`${index - 1}`].classList.replace('fa-circle-play', 'fa-circle-pause');
        music.src = `audio/${index}.mp3`;
        download_music.href = `audio/${index}.mp3`;
        poster_master_play.src = `img/${index}.jpg`;
        music.play();
        let song_title = songs.filter((ele) => {
            return ele.id == index;
        })

        song_title.forEach(ele => {
            let { songName } = ele;
            title.innerHTML = songName;
            download_music.setAttribute('download', songName);
        })
        masterPlay.classList.remove('fa-play');
        masterPlay.classList.add('fa-pause');
        wave.classList.add('active2');
        makeAllBackgrounds();
        Array.from(document.getElementsByClassName('songItem'))[`${index - 1}`].style.background = "rgb(105, 105, 170, .1)";
    })
})
Array.from(document.getElementsByClassName('playListPlay1')).forEach((element) => {
    element.addEventListener('click', (e) => {
        index = e.target.id;
        makeAllPlays1();
        makeAllPlays();
        e.target.classList.remove('fa-circle-play');
        e.target.classList.add('fa-circle-pause');
        Array.from(document.getElementsByClassName('playListPlay'))[`${index - 1}`].classList.replace('fa-circle-play', 'fa-circle-pause');
        music.src = `audio/${index}.mp3`;
        download_music.href = `audio/${index}.mp3`;
        poster_master_play.src = `img/${index}.jpg`;
        music.play();
        let song_title = songs.filter((ele) => {
            return ele.id == index;
        })

        song_title.forEach(ele => {
            let { songName } = ele;
            title.innerHTML = songName;
            download_music.setAttribute('download', songName);
        })
        masterPlay.classList.remove('fa-play');
        masterPlay.classList.add('fa-pause');
        wave.classList.add('active2');
        makeAllBackgrounds();
        Array.from(document.getElementsByClassName('songItem'))[`${index - 1}`].style.background = "rgb(105, 105, 170, .1)";
    })
})



let currentStart = document.getElementById('currentStart');
let currentEnd = document.getElementById('currentEnd');
let seek = document.getElementById('seek');
let bar2 = document.getElementById('bar2');
let dot = document.getElementsByClassName('dot')[0];

music.addEventListener('timeupdate', () => {
    let music_curr = music.currentTime;
    let music_dur = music.duration;

    let min = Math.floor(music_dur / 60);
    let sec = Math.floor(music_dur % 60);
    if (sec < 10) {
        sec = `0${sec}`
    }
    currentEnd.innerText = `${min}:${sec}`;

    let min1 = Math.floor(music_curr / 60);
    let sec1 = Math.floor(music_curr % 60);
    if (sec1 < 10) {
        sec1 = `0${sec1}`
    }
    currentStart.innerText = `${min1}:${sec1}`;

    let progressbar = parseInt((music.currentTime / music.duration) * 100);
    seek.value = progressbar;
    let seekbar = seek.value;
    bar2.style.width = `${seekbar}%`;
    dot.style.left = `${seekbar}%`;
})
seek.addEventListener('change', () => {
    music.currentTime = seek.value * music.duration / 100;
})



const next_music = () => {
    masterPlay.classList.add('fa-pause');
    wave.classList.add('active2');
    if (index == songs.length) {
        index == 0;
    }
    index++;
    music.src = `audio/${index}.mp3`;
    download_music.href = `audio/${index}.mp3`;
    poster_master_play.src = `img/${index}.jpg`;
    music.play();
    let song_title = songs.filter((ele) => {
        return ele.id == index;
    })

    song_title.forEach(ele => {
        let { songName } = ele;
        title.innerHTML = songName;
        download_music.setAttribute('download', songName);
    })
    makeAllBackgrounds();
    Array.from(document.getElementsByClassName('songItem'))[`${index - 1}`].style.background = "rgb(105, 105, 170, .1)";

    makeAllPlays()
    Array.from(document.getElementsByClassName('playListPlay'))[`${index - 1}`].classList.replace('fa-circle-play', 'fa-circle-pause');

    makeAllPlays1()
    Array.from(document.getElementsByClassName('playListPlay1'))[`${index - 1}`].classList.replace('fa-circle-play', 'fa-circle-pause');
}
const repeat_music = () => {
    masterPlay.classList.add('fa-pause');
    wave.classList.add('active2');
    index;
    music.src = `audio/${index}.mp3`;
    download_music.href = `audio/${index}.mp3`;
    poster_master_play.src = `img/${index}.jpg`;
    music.play();
    let song_title = songs.filter((ele) => {
        return ele.id == index;
    })

    song_title.forEach(ele => {
        let { songName } = ele;
        title.innerHTML = songName;
        download_music.setAttribute('download', songName);
    })
    makeAllBackgrounds();
    Array.from(document.getElementsByClassName('songItem'))[`${index - 1}`].style.background = "rgb(105, 105, 170, .1)";

    makeAllPlays()
    Array.from(document.getElementsByClassName('playListPlay'))[`${index - 1}`].classList.replace('fa-circle-play', 'fa-circle-pause');

    makeAllPlays1()
    Array.from(document.getElementsByClassName('playListPlay1'))[`${index - 1}`].classList.replace('fa-circle-play', 'fa-circle-pause');
}
const random_music = () => {
    masterPlay.classList.add('fa-pause');
    wave.classList.add('active2');
    if (index == songs.length) {
        index == 0;
    }
    index = Math.floor((Math.random() * songs.length) + 1);
    music.src = `audio/${index}.mp3`;
    download_music.href = `audio/${index}.mp3`;
    poster_master_play.src = `img/${index}.jpg`;
    music.play();
    let song_title = songs.filter((ele) => {
        return ele.id == index;
    })

    song_title.forEach(ele => {
        let { songName } = ele;
        title.innerHTML = songName;
        download_music.setAttribute('download', songName);
    })
    makeAllBackgrounds();
    Array.from(document.getElementsByClassName('songItem'))[`${index - 1}`].style.background = "rgb(105, 105, 170, .1)";

    makeAllPlays()
    Array.from(document.getElementsByClassName('playListPlay'))[`${index - 1}`].classList.replace('fa-circle-play', 'fa-circle-pause');

    makeAllPlays1()
    Array.from(document.getElementsByClassName('playListPlay1'))[`${index - 1}`].classList.replace('fa-circle-play', 'fa-circle-pause');
}



let shuffle = document.getElementsByClassName('shuffle')[0];

shuffle.addEventListener('click', () => {
    let a = shuffle.innerHTML;

    switch (a) {
        case "next":
            shuffle.classList.add('fa-repeat');
            shuffle.classList.remove('fa-music');
            shuffle.classList.remove('fa-shuffle');
            shuffle.innerHTML = "repeat";
            break;
        case "repeat":
            shuffle.classList.remove('fa-repeat');
            shuffle.classList.remove('fa-music');
            shuffle.classList.add('fa-shuffle');
            shuffle.innerHTML = "random";
            break;
        case "random":
            shuffle.classList.remove('fa-repeat');
            shuffle.classList.add('fa-music');
            shuffle.classList.remove('fa-shuffle');
            shuffle.innerHTML = "next";
            break;
    }
})
music.addEventListener('ended', () => {
    let b = shuffle.innerHTML;

    switch (b) {
        case "repeat":
            repeat_music();
            break;
        case "next":
            next_music();
            break;
        case "random":
            random_music();
            break;
    }
})



let vol_icon = document.getElementById('vol_icon');
let vol = document.getElementById('vol');
let vol_dot = document.getElementById('vol_dot');
let vol_bar = document.getElementsByClassName('vol_bar')[0];

vol.addEventListener('change', () => {
    if (vol.value == 0) {
        vol_icon.classList.remove('fa-volume-low');
        vol_icon.classList.add('fa-volume-xmark');
        vol_icon.classList.remove('fa-volume-high');
    }
    if (vol.value > 0) {
        vol_icon.classList.add('fa-volume-low');
        vol_icon.classList.remove('fa-volume-xmark');
        vol_icon.classList.remove('fa-volume-high');
    }
    if (vol.value > 50) {
        vol_icon.classList.remove('fa-volume-low');
        vol_icon.classList.remove('fa-volume-xmark');
        vol_icon.classList.add('fa-volume-high');
    }

    let vol_a = vol.value;
    vol_bar.style.width = `${vol_a}%`;
    vol_dot.style.left = `${vol_a}%`;
    music.volume = vol_a / 100;
})



let back = document.getElementById('back');
let next = document.getElementById('next');

back.addEventListener('click', () => {
    index -= 1;
    if (index < 1) {
        index = Array.from(document.getElementsByClassName('songItem')).length;
    }
    music.src = `audio/${index}.mp3`;
    download_music.href = `audio/${index}.mp3`;
    poster_master_play.src = `img/${index}.jpg`;
    music.play();
    masterPlay.classList.remove('fa-play');
    masterPlay.classList.add('fa-pause');
    wave.classList.add('active2');
    let song_title = songs.filter((ele) => {
        return ele.id == index;
    })

    song_title.forEach(ele => {
        let { songName } = ele;
        title.innerHTML = songName;
        download_music.setAttribute('download', songName);
    })
    makeAllPlays()
    Array.from(document.getElementsByClassName('playListPlay'))[`${index - 1}`].classList.replace('fa-circle-play', 'fa-circle-pause');

    makeAllPlays1()
    Array.from(document.getElementsByClassName('playListPlay1'))[`${index - 1}`].classList.replace('fa-circle-play', 'fa-circle-pause');

    makeAllBackgrounds();
    Array.from(document.getElementsByClassName('songItem'))[`${index - 1}`].style.background = "rgb(105, 105, 170, .1)";

})
next.addEventListener('click', () => {
    index -= 0;
    index += 1;
    if (index > Array.from(document.getElementsByClassName('songItem')).length) {
        index = 1;
    }
    music.src = `audio/${index}.mp3`;
    download_music.href = `audio/${index}.mp3`;
    poster_master_play.src = `img/${index}.jpg`;
    music.play();
    masterPlay.classList.remove('fa-play');
    masterPlay.classList.add('fa-pause');
    wave.classList.add('active2');
    let song_title = songs.filter((ele) => {
        return ele.id == index;
    })

    song_title.forEach(ele => {
        let { songName } = ele;
        title.innerHTML = songName;
        download_music.setAttribute('download', songName);
    })
    makeAllPlays()
    Array.from(document.getElementsByClassName('playListPlay'))[`${index - 1}`].classList.replace('fa-circle-play', 'fa-circle-pause');

    makeAllPlays1()
    Array.from(document.getElementsByClassName('playListPlay1'))[`${index - 1}`].classList.replace('fa-circle-play', 'fa-circle-pause');

    makeAllBackgrounds();
    Array.from(document.getElementsByClassName('songItem'))[`${index - 1}`].style.background = "rgb(105, 105, 170, .1)";
})