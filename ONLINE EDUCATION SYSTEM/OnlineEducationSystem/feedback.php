<?php
session_start();
    if (!isset($_SESSION['username'])) {
        header('Location:login.php');
    }
?> 



 <?php
        if (!empty($_POST['email']) && !empty($_POST['feedback'])) {
            $email = $_POST['email'];
            $rating=$_POST['rating'];
            $feedback = $_POST['feedback'];
            try {
                $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php', 'root', '');
                $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $query = $dbhandler->query('select * from login where email=' . '"' . $email . '"');
                
                $r=$query->fetch();
                $x = $query->rowCount();
                      
                if ($x == 1) {
                    
                     $firstname=$r['firstname'];
                     $sql="insert feedback (name,rating,feedback) values('$firstname','$rating','$feedback')";
                     $query=$dbhandler->query($sql);
                     header('location:fb.php');
                }
                if($x != 1){
                echo 'please enter correct email';  
          }
                        } catch (PDOException $e) {
                echo $e->getMessage();
                die();
            }
        }
          
                        
?>        




<html>
<head>
    <title>Feedback Page</title>
    <link href="feedback.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<script src="../js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
        <style>
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
<div class="block">
	<center>
		<img src="images/feedback.png" class="avatar">
                <form action="" method="POST">
			<div class="label">Feedback</div>
            <input type="email" name="email" class="textbox" size="20" placeholder="M a i l"><br>
			<table class="rating" align="center" >
				<tr>
					<th><input type="radio" name="rating" value="1" class="radiobt"></th>
					<th><input type="radio" name="rating" value="2" class="radiobt"></th>
					<th><input type="radio" name="rating" value="3" class="radiobt"></th>
					<th><input type="radio" name="rating" value="4" class="radiobt"></th>
                                        <th><input type="radio" name="rating" value="5" class="radiobt" checked></th>
				</tr>
				<tr>
					<td><img src="images/1.png" height="40" width="40" ></td>
					<td><img src="images/2.png" height="40" width="40" ></td>
					<td><img src="images/3.png" height="40" width="40" ></td>
					<td><img src="images/4.png" height="40" width="40" ></td>
					<td><img src="images/5.png" height="40" width="40" ></td>
				</tr>
			</table><br>
			<textarea name="feedback" placeholder="F e e d b a c k" class="feedback"></textarea><br>
            <br><input type="submit" value="S U B M I T" name="fill_it" class="btn-success button"><br><br> 
            <a href="fb.php">view feedbacks</a>
            
	</form>
	</center>
	
</div>
</body>
</html>