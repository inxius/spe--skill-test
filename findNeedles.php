<?php
$haystack = array('red', 'blue', 'yellow', 'black', 'grey');
$needles = 'grey';
echo find($haystack, $needles);


function find($haystack, $needles)
{
  $out = -1;
  for ($i=0; $i < count($haystack); $i++) {
    if (strcmp($haystack[$i], $needles) == 0) {
      $out = $i;
    }
  }

  if ($out != -1) {
    return $out;
  }
  else {
    return "needles tidak ditemukan";
  }
}
 ?>
