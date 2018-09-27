<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <style type="text/css">
        div{
          width: 150px;
          height: 150px;
          padding: 5px;
          margin: 5px;
          background-color: rgb(0,0,0);
          display: inline-block;
          }

      </style>
  </head>
  <body>
    <?php
      $i=0;

      for ($i=0; $i <256 ; $i++) {
        echo '<div style="background-color: rgb(0,'.$i.',0)">color
        </div>';
      }


     ?>

  </body>
</html>
