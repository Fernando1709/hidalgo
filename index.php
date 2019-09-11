<?php
$server="localhost"  ;
$username="root";
$password="fercho";
$db="hidalgo";
$con = new mysqli($server, $username, $password, $db);
 ?>
 <html>
   <head>
     <title></title>
   </head>
   <body>



     <form  method="post">
       <select  name="municipio" onchange="submit">
         <?php
         $sql="select * from municipio";
         $rec=mysql_query($sql);
         while($row=mysql_fetch_array($rec))
         {
           echo"<opion value='".$row['id']."'>";
           echo $row['nombre
           '];
           echo"</option>";
         }
          ?>
       </select>

     </form>

   </body>
 </html>
