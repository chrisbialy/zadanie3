<html>
<head>
    <title>Render Tabeli</title>

    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

	<body>

		<h1>Render Tabeli - PHP -> HTML</h1>
		
<?php        
    $data = array ( 
    	'01' => array ( 'A', 'X', ),
    	'02' => array ( 'B', 'Y', ), 
    	'03' => array ( 'C1','Z', ), 
    	'04' => array ( 'C2','',), 
    	'05' => array ( 'C3','',),
    );
    
    function generateTable2($associative_array,$associative_array1){
    	echo '<table width="620" class="optimization_table" border="1"  cellspacing="0" cellpadding="0"><thead><tr><th colspan="1">';
    	echo implode('</th ><th colspan="1">',$associative_array);
    	echo '</th ></tr></thead><tbody>';
    
		$rowCount = count( current( $associative_array1 ) );
        for ($x=0; $x<$rowCount; $x++) {
            echo "<tr >";
            foreach ($associative_array1 as $key => $data){
                echo "<td > ".$data[ $x ]."</td >";
            }
            echo "</tr >";
        }
    
    	echo '</tbody></table>';
    }
    
    generateTable2(['H1', 'H2', 'H3','',''], $data);

/*   */
?>	
		
	</body>
</html>
	
	