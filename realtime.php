<?php
/*
Template Name: gallery Archives Custom realtime
*/
?>

<?php get_header(); ?>


<div class="latest5">
<h2>Latest 6 images...</h2>
<?php

$month1 = date("F");
$month2 = date("Y");
$month = "$month1 $month2";
$folder = "archive/$month";

// $files = array_multisort(array_map( 'filemtime', array_slice(glob("/home/coax/norandom/realtime/$folder/*"), 0, 5)), SORT_NUMERIC, SORT_DESC, $files );

$files = glob("/home/coax/1blog/realtime/$folder/*");
array_multisort(array_map('filemtime', $files), SORT_DESC, $files); 
$files2 = array_slice($files, 0, 6);


foreach($files2 as $file) {
    $file2 = basename($file);
    if (basename($file) == "index.html") { continue; }
      echo "<a href=\"/realtime/$folder/$file2\" target=\"_blank\"><img class=\"latest5img\" src=\"/realtime/$folder/$file2\" width=\"100px\" alt=\"$file2\" title=\"$file2\" /></a>";
}
?>
</div>
<h2>Archive of months</h2>

<?php
$files = glob("/home/coax/1blog/realtime/archive/*");

array_multisort(
array_map( 'filemtime', $files ),
SORT_NUMERIC,
SORT_DESC,
$files
);

foreach($files as $file) {
    $file2 = basename($file);
     $filecount = count(glob($file  . "/*"));
    if (basename($file) == "index.html") { continue; }
      echo '<ul>';
      echo "<li><a href=\"/realtime/arch.php?which=$file2\" target=\"_blank\">$file2</a><div class=\"countd\">$filecount Images</div> </li>";
     echo '</ul>';
}
?>
