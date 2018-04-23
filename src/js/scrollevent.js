/**
 * Created by tomino on 18/04/23.
 */

var topElement = document.getElementById("top");
var serviceElement = document.getElementById("service");
var missionElement = document.getElementById("mission");
var newsElement = document.getElementById("news");

var topWatcher = scrollMonitor.create( topElement, -100 );
var serviceWatcher = scrollMonitor.create( serviceElement, -100 );
var missionWatcher = scrollMonitor.create( missionElement, -100 );
var newsWatcher = scrollMonitor.create( newsElement, -100 );

topWatcher.enterViewport(function() {
    console.log( '表示領域に入りました' );
});
missionWatcher.enterViewport(function() {
    console.log( '表示領域に入りました' );
    var mt = document.getElementById("mt");
    mt.classList.remove("init-title");
    mt.classList.add("title-animation");
    missionWatcher.destroy();
});
serviceWatcher.enterViewport(function() {
    console.log( '表示領域に入りました' );
    var st = document.getElementById("st");
    st.classList.remove("init-title");
    st.classList.add("title-animation");
    serviceWatcher.destroy();
});
newsWatcher.enterViewport(function() {
    console.log( '表示領域に入りました' );
    var nt = document.getElementById("nt");
    nt.classList.remove("init-title");
    nt.classList.add("title-animation");
    newsWatcher.destroy();
});