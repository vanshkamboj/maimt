<?php
include("header.html");
?>
<div class="container my-5">
<div class="list-group">
  <button type="button" class="list-group-item  text-center list-group-item-action active">
    Papers
  </button>
<?php
$dirs = glob("*.pdf");
//print_r( $dirs);
//echo  $dirs[0] . ", " . $dirs[1] . " and " . $dirs[2] . ".";
foreach ($dirs as $value) {
   
echo '<a href="'.$value.'"><button type="button" class="list-group-item list-group-item-action">'.$value.'</button></a>';


}

?>

 
</div>
</div>

<?php
include("footer.html");
?>