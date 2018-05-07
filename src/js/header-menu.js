
var hdElement = document.getElementById('hd');
var hdWatcher = scrollMonitor.create( hdElement,10 );

// ヘッダーメニュー用
document.getElementById("menu-icon").onclick = function() {
    var menu = document.getElementById("menu-headermenu")
    menu.classList.toggle("fheader");
}


hdWatcher.enterViewport(function(){
  var hc = document.getElementById("hc");
  hc.classList.remove("hc-bw");
  hc.classList.add("hc-bn");
});

hdWatcher.exitViewport(function(){
    var hc = document.getElementById("hc");
    hc.classList.remove("hc-bn");
    hc.classList.add("hc-bw");
});
