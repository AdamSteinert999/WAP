<?php
$graf = array(
array(0, 1, 0, 0),
array(1, 0, 1, 1),
array(0, 1, 0, 1),
array(0, 1, 1, 0)
);

// uzly
$uzly = count($graf);

// hrany
$hrany = 0;

//orientovaný nebo neorientovaný
$jeOrientovaný = false;
for ($i = 0; $i < $uzly; $i++) {
  for ($j = 0; $j < $uzly; $j++) {
    if ($graf[$i][$j] == 1) {
      $hrany++;
      if ($graf[$j][$i] == 0) {
        $jeOrientovaný = true;
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Analýza grafu</title>
  <style>
    table {
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid black;
      padding: 5px;
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>Analýza grafu</h1>
  <table>
    <tr>
      <th>Počet uzlů:</th>
      <td><?php echo $uzly; ?></td>
    </tr>
    <tr>
      <th>Počet hran:</th>
      <td><?php echo $hrany; ?></td>
    </tr>
    <tr>
      <th>Graf je:</th>
      <td><?php echo ($jeOrientovaný ? "orientovaný" : "neorientovaný"); ?></td>
    </tr>
  </table>
</body>
</html>
