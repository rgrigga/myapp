<?php
var_dump($query);
foreach($query as $row){
  print $row->id.".";
  print $row->name." @ ";
  print $row->url;
  print "<br>";
  //implode("<div>",$row->id;
  
}
?>