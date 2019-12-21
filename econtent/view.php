<?php
set_time_limit(0);

if (!isset($_GET['file'])) {
  header('Location: /');
}

$file  = '../econtent/' . $_GET['file'];

// check if the file exists?
if (!file_exists($file)) {
  header('Location: /');
}

include '../header.html';


// getting temporary source of excel file
include("PHPExcel-1.8/Classes/PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code\

$objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

echo "<h1 class='mt-3'><center>Econtent</center></h1>";

echo '<div class="container-fluid">
<table class="table table-bordered table-condensed table-striped">
  <thead>
    <tr style="width:100%">
      <th scope="col" style="width:40%">Topic</th>
      <th scope="col" style="width:20%">Book Reference</th>
      <th scope="col" style="width:20%">Web Reference</th>
      <th scope="col" style="width:20%">Video Reference</th>
    </tr>
  </thead>
  <tbody>';

foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
  $highestRow = $worksheet->getHighestRow();

  for ($row = 2; $row <= $highestRow; $row++) {
    $topic = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
    $book = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
    $link = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
    $video = $worksheet->getCellByColumnAndRow(3, $row)->getValue();

    if ($topic) {
      echo "<tr style='width:100%'>
      <td style='width:40%'>" . htmlspecialchars($topic) . "</td>";

      if ($book) {
        echo "<td style='width:20%'><a href='$book'  target=\"_blank\">Read E-Book</a></td>";
      } else {
        echo "<td style='width:20%'>--</td>";
      }

      if ($link) {
        echo "<td style='width:20%'><a href='$link' target=\"_blank\">Study from Website</a></td>";
      } else {
        echo "<td style='width:20%'>--</td>";
      }

      if ($video) {
        echo "<td width='20%'><a href='$video' target=\"_blank\">Watch Video</a></td>";
      } else {
        echo "<td width='20%'>--</td>";
      }

      echo "</tr>";
    }
  }
}

echo "</tbody>
</table>
</div>";

include '../footer.html';
