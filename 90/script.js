function showName(str) {
  if (str.length == 0) {
    document.getElementById("txtName").innerHTML = "";
    return;
  }

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtName").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "ajax.php?name=" + str, true);
  xmlhttp.send();
}
