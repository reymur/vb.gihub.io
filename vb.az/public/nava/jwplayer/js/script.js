
jwplayer("player").setup({
    //url: "https://www.youtube.com/watch?time_continue=207&v=jZlJw6EoRek",
    file: "https://www.youtube.com/watch?v=kqBjktSvK5Q",
    //image: "http://assets/nava/jwplayer/files/pic.jpg",
    //file: "http://assets/nava/jwplayer/files/video.mp4",
    width: "580",
    height: "380",
    controls: true,
    mute: true,
    stretching: "uniform",
    title: "istifadecinin_adi"

    //listbar:{
    //    position: 'button',
    //    size: 150
    //}



});

function add_volume() {
    var volume = jwplayer('player').getVolume();

    if(volume < 100) {
        volume = volume + 10;
    }
    jwplayer('player').setVolume(volume);
}