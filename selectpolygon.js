function showInfo(str){
var url="http://koreanplant.info/forest/getInfo.php";
url=url+"?q="+str;
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST", url, true);
xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xmlhttp.onreadystatechange = function() { 
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
    }
}
//xmlhttp.send("foo=bar&lorem=ipsum");
// xmlhttp.send(new Int8Array());
 xmlhttp.send();
}