/**
 * Created by tomino on 18/04/23.
 */

var topElement = document.getElementById("top");
var serviceElement = document.getElementById("service");
var missionElement = document.getElementById("mission");
var newsElement = document.getElementById("news");
var serviceblockElement = document.getElementById("sfc");
var abouttitleElement = document.getElementById("about");
var aboutcolElement = document.getElementById("ac");

var topWatcher = scrollMonitor.create( topElement, -100 );
var serviceWatcher = scrollMonitor.create( serviceElement, -100 );
var missionWatcher = scrollMonitor.create( missionElement, -100 );
var newsWatcher = scrollMonitor.create( newsElement, -100 );
var sbWatcher = scrollMonitor.create( serviceblockElement, -200);
var abouttitleWatcher = scrollMonitor.create(abouttitleElement,-100);
var aboutcolWatcher = scrollMonitor.create(aboutcolElement, -150);


topWatcher.enterViewport(function() {
    console.log( '表示領域に入りました' );
});
missionWatcher.enterViewport(function() {
    var mt = document.getElementById("mt");
    mt.classList.remove("init-title");
    mt.classList.add("title-animation");
    missionWatcher.destroy();
});
serviceWatcher.enterViewport(function() {
    var st = document.getElementById("st");
    st.classList.remove("init-title");
    st.classList.add("title-animation");
    serviceWatcher.destroy();
});
newsWatcher.enterViewport(function() {
    var nt = document.getElementById("nt");
    nt.classList.remove("init-title");
    nt.classList.add("title-animation");
    newsWatcher.destroy();
});

sbWatcher.enterViewport(function () {
    console.log("はいったよ");
    var sfc = document.getElementById("sfc");
    sfc.classList.add("sa");
});

abouttitleWatcher.enterViewport(function () {
    var at = document.getElementById("at");
    at.classList.remove("init-title");
    at.classList.add("title-animation");
    abouttitleWatcher.destroy();
});

aboutcolWatcher.enterViewport(function () {
    var ac = document.getElementById("ac");
    ac.classList.remove("init-col");
    ac.classList.add("animate-about-col");
    aboutcolWatcher.destroy();
});
