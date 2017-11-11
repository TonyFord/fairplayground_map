<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FairCoin / FairCoop - playground
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex, nofollow">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <style>
      iframe { height:90vh; }
      .row:first-child { padding-top:1em; }
      .row:last-child > .col:last-child { text-align:right; }
    </style>
    <script>
    function getLangMap(){
      var userLang = navigator.language || navigator.userLanguage;
      var ln="en";

      switch(userLang){
        case "de":
          ln="de";
          break;
        case "en":
          ln="en";
          break;
        case "es":
          ln="es";
          break;
        case "it":
          ln="it";
          break;
        case "pt":
          ln="pt";
          break;
      }
      document.getElementById("umap").src="http://umap.openstreetmap.fr/" + ln + "/map/fairplaymap_177405";
    }
    </script>
  </head>
  <body onload="getLangMap()">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <iframe id="umap" width="100%" height="0" frameBorder="0" src=""></iframe>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <p style="height:0 !important;"><? //readfile("http://api.fairplayground.info/get_localnodes_count.php"); ?> Cooperatives </p>
        </div>
        <div class="col">
          <a href="http://www.jsoneditoronline.org/?id=27ae7733a055635b3cbc7a2e74348908"><button class="btn btn-sm btn-outline-dark">JSON Template</button></a>
          <a href="http://umap.openstreetmap.fr/de/map/fairplaymap_177405"><button class="btn btn-sm btn-outline-dark">fullscreen</button></a>
          <a href="http://fairplayground.info"><button class="btn btn-sm btn-outline-dark">Home</button></a>
          <a href="https://github.com/TonyFord/fairplayground_map"><button class="btn btn-sm btn-outline-dark">GitHub</button></a>
          <a href="https://github.com/TonyFord/fairplayground_map/blob/master/HELP.md"><button class="btn btn-sm btn-outline-dark">Help</button></a>
          <a href="http://api.fairplayground.info/"><button class="btn btn-sm btn-outline-info">API</button></a>
        </div>
      </div>
    </div>
  </body>
</html>
