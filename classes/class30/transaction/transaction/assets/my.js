function getChapter(){
    var str = document.getElementById("subject").value;
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      document.getElementById("chapter").innerHTML = this.responseText;
    }
    xmlhttp.open("GET", "api/chapter.php?s=" + str);
    xmlhttp.send();
}