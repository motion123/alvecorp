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
var mw1Element = document.getElementById("mw1");
var mw2Element = document.getElementById("mw2");

var hdElement = document.getElementById('hd');
var hdWatcher = scrollMonitor.create( hdElement,10 );

var topWatcher = scrollMonitor.create( topElement, -100 );
var serviceWatcher = scrollMonitor.create( serviceElement, -100 );
var missionWatcher = scrollMonitor.create( missionElement, -100 );
var newsWatcher = scrollMonitor.create( newsElement, -100 );
var sbWatcher = scrollMonitor.create( serviceblockElement, -200);
var abouttitleWatcher = scrollMonitor.create(abouttitleElement,-100);
var aboutcolWatcher = scrollMonitor.create(aboutcolElement, -150);
var mw1Watcher = scrollMonitor.create(mw1Element, -200);
var mw2Watcher = scrollMonitor.create(mw2Element, 0);



topWatcher.enterViewport(function() {
    document.getElementById("menu-icon").onclick = function() {
        console.log("moi");
        var menu = document.getElementById("menu-headermenu")
        menu.classList.toggle("fheader");
    }
});

hdWatcher.enterViewport(function(){
  console.log("asdf");
  var hc = document.getElementById("hc");
  hc.classList.remove("hc-bw");
  hc.classList.add("hc-bn");
});

hdWatcher.exitViewport(function(){
  console.log("asdf");
    var hc = document.getElementById("hc");
    hc.classList.remove("hc-bn");
    hc.classList.add("hc-bw");
});

missionWatcher.enterViewport(function() {
    var mt = document.getElementById("mt");
    mt.classList.remove("init-title");
    mt.classList.add("title-animation");

    var hc = document.getElementById("hc");
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


mw1Watcher.enterViewport(function () {
    var mw1 = document.getElementById("mw1");
    var mp1 = document.getElementById("mp1");
    mw1.classList.remove("init-mw");
    mw1.classList.add("mw");
    mp1.classList.add("mission-img");
    mw1Watcher.destroy();
});

mw2Watcher.enterViewport(function () {
    var mw2 = document.getElementById("mw2");
    // var mp2 = document.getElementById("mp2");
    mw2.classList.remove("init-mw");
    mw2.classList.add("mw");
    // mp2.classList.add("mission-img");
    mw2Watcher.destroy();
});
