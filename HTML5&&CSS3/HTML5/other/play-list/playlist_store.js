function save(item){
  var playlistArry = getStoreArry("playlist");
  playlistArry.push(item);
  localStorage.setItem("playlist",JSON.stringify(playlistArry));
}
function loadPlaylist() {
  var playlistArry = getSavedSongs();
  var ul = document.getElementById("playlist");
  if (playlistArry != null) {
      for (var i = 0; i < playlistArry.length; i++) {
        var li = document.createElement("li");
        li.innerHTML = playlistArry[i];
        ul.appendChild(li);
      }
  }
}
function getSavedSongs() {
  return getStoreArry("playlist");
}
function getStoreArry() {
  var playlistArry = localStorage.getItem(key);
  if (playlistArry == null || playlistArry == "") {
    playlistArry = new Array();
  }else {
    playlistArry = JSON.parse(playlistArry);
  }
  return playlistArry;
}
