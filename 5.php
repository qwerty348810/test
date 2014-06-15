<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Scripts</title>
  <style>
   #msg { 
    display: none;
    position: absolute;
    width: 280px;
    top: 200px;
    left: 50%;
    margin-left: -150px; 
    background: #fc0;
    padding: 10px;
   }
  </style>
  <script>
   function textMsg(msg) {
    document.getElementById('text').innerHTML = msg;
    document.getElementById('msg').style.display = 'block';
   }
   function closeMsg() {
    document.getElementById('msg').style.display = 'none';
   }
  </script>
 </head>
 <body>
  <div id="msg">
   <div id="text"></div>
   <div id="close"><a href="javascript:closeMsg()">[Close]</a></div>
  </div>
  <p lang="ru">Нажать <a href="#" onclick="textMsg('Sorry!')">  
    button</a>.</p>
 </body>