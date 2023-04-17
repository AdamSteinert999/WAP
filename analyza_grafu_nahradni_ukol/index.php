<?php

$graf = array(
    1 => array(1, 2),
    2 => array(2, 3),
    3 => array(3, 4),
	4 => array(4),
	5 => array(4, 5),
);

// orientovaný, neorientovaný 
$je_orientovany = false;
foreach ($graf as $vrchol => $sousedni_vrcholy) {
    foreach ($sousedni_vrcholy as $sousedni_vrchol) {
        if (!in_array($vrchol, $graf[$sousedni_vrchol])) {
            $je_orientovany = true;
            break 2;
        }
    }
}

// hrany, uzly
$pocet_hran = 0;
$pocet_uzlu = count($graf);
foreach ($graf as $sousedni_vrcholy) {
    $pocet_hran += count($sousedni_vrcholy);
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Analýza grafu</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
		}

		h1 {
			font-size: 24px;
			margin-bottom: 10px;
		}

		p {
			margin: 0 0 10px;
		}

		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}

		table th,
		table td {
			border: 1px solid #ddd;
			padding: 8px;
			text-align: left;
		}

		table th {
			background-color: #f2f2f2;
			font-weight: bold;
		}

		.orientovany {
			color: green;
		}

		.neorientovany {
			color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Graf analýza</h1>

		<table>
			<thead>
				<tr>
					<th>Popis</th>
					<th>Výsledek</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Orientace</td>
					<td class="<?php echo $je_orientovany ? 'orientovany' : 'neorientovany'; ?>">
						<?php echo $je_orientovany ? 'Orientovaný' : 'Neorientovaný'; ?>
					</td>
				</tr>
				<tr>
					<td>Počet uzlů</td>
					<td><?php echo $pocet_uzlu; ?></td>
				</tr>
				<tr>
					<td>Počet hran</td>
					<td><?php echo $pocet_hran; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>

