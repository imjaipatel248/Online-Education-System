<html><head> 
    <link href="feedback.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<script src="../js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css"> <style>
p{
        background-color: white;
        border: 1px solid #456879;
	border-radius: 20px;
	border-width: 1px;
	height: auto;
	margin-bottom: 20px;
	font-size: 12px;
        padding-left:10px;
	text-align: left;
	width:100%;
	transition: width 0.5s;
}</style>
</head>
<body >
	<center>
		<img src="images/feedback.png" class="avatar">
	</center>

<?php   $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php', 'root', '');
                    $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                   
                    $query = $dbhandler->query('select * from feedback');
                    $a=0;
                    while ($r = $query->fetch()) {
                        //echo specific attributes
                        $nm = $r['name'];
                        $rt=$r['rating'];
                        $fb=$r['feedback'];
                        echo "<p><h2 style='align:left;'>".$nm."</h2><h3>".$rt." stars</h3>".$fb."</p>";
                        //. '//.$r['filename'].">".$r['filename'];
                        //echo all data in both format: numeric and associative
                        echo '<br><br>';
                    }?>
<a href="educature/home.php">home</a>
</body></html>