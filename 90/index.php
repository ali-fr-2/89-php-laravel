<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <p><b>start typing a name in the input field below:</b></p>
  <form action="">
    <label for="fname">first name:</label>
    <input type="text" id="fname" onkeyup="showName(this.value)">
  </form>
  <p>suggestions : <span id="txtName"></span></p>


  <!-- <script src="./script.js"></script> -->
  <!-- <script>
    console.log("inline script works");
  </script> -->

  <script >
    function showName(str) {
      if (str.length == 0) {
        document.getElementById("txtName").innerHTML = "";
        return;
      }

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtName").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "ajax.php?name=" + str, true);
      xmlhttp.send();
    }
  </script>
</body>

</html>