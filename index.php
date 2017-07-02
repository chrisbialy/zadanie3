<?php  

// Krzysztof Bialy

// zagnieżdżone macierze       
$data = array(

	'headers' => array ('H1','H2','H3',),
	'rows' => array ('A','B','C' => array ('C1','C2','C3'),
	'X' => array ('X','Y','Z'))
);
	
	

?>	



<html>
<head>
    

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1">
	
	<title>Render Tabeli</title>
	<!-- Bootstrap -->
	 <link href="css/bootstrap.min.css" rel="stylesheet">

	 <!-- HTML5 Shim and Respond.js IE8 support of HTML5
	elements and media queries -->
	 <!-- WARNING: Respond.js doesn't work if you view the
	page via file:// -->
	 <!--[if lt IE 9]>
	 <script src="https://oss.maxcdn.com/libs/html5shiv/
	3.7.0/html5shiv.js"></script>
	 <script src="https://oss.maxcdn.com/libs/respond.js/
	1.4.2/respond.min.js"></script>
	 <![endif]-->


</head>
<style>

	#topRow {
		margin-top: 50px;
		text-align: center;
	}

	h1 {
		margin-bottom:40px;
		font-size: 300%;
		font-weight: bold;

	}
	
	#center {
    text-align: center;
}

</style>
	<body>
	
	 <div class="container">

	 <div class="col-md-6 col-md-offset-3" id="topRow">
		<h1 >Render Tabeli 2</h1>
		<p class="lead center"> PHP - HTML</p>
	</div>
		
		
<?php

echo '<table  class="table table-striped table-bordered table-hover"">';
  
  // wyświetla nagłowek tabeli [H1,H2,H3]
  echo '<tr>';
	// wynik: H1
	echo '<th colspan="2">' . $data['headers'][0].'</th>';
	// wynik: H2
	echo '<th colspan="2">' . $data['headers'][1].'</th>';
	// wynik: H3
	echo '<th colspan="5">' . $data['headers'][2].'</th>';
	echo '</tr>';
	
	// wyświetla kolejny wiersz [A,B,C1,C2,C3]
	echo '<tr>';
	// wynik: A
	echo '<td  colspan="2">'. $data['rows'][0]. '</td>';
	// wynik: B
	echo '<td colspan="2">'. $data['rows'][1].'</td>';
	// wynik: C1
	echo '<td colspan="2">'. $data['rows']['C'][0].'</td>';
	// wynik: C2
	echo '<td colspan="2">'. $data['rows']['C'][1].'</td>';
	// wynik: C3
	echo '<td colspan="2">'. $data['rows']['C'][2].'</td>';
	echo '</tr>';
	
	// wyświetla kolejny wiersz [X,Y,Z]
	echo '<tr>';
	// wynik: X
	echo '<td colspan="2">'. $data['rows']['X'][0]. '</td>';
	// wynik: Y
	echo '<td colspan="2">'. $data['rows']['X'][1]. '</td>';
	// wynik: Z
	echo '<td colspan="5">'. $data['rows']['X'][2]. '</td>';
	echo '</tr>';
	
	echo '</table>';


?>
	
 </div>
 
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
	jquery.min.js"></script>
	 <!-- Include all compiled plugins (below), or include individual files
	as needed -->
	 <script src="js/bootstrap.min.js"></script>
		
	</body>
</html>
	
	