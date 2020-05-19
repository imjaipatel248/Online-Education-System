
<!--
  ** Style a Select Box Using Only CSS
  ** Source: http://bavotasan.com/2011/style-select-box-using-only-css/
  ** Source: http://danielneumann.com/blog/how-to-style-dropdown-with-css-only/
  ** Source: http://stackoverflow.com/a/5809186
-->

  <?php
        session_start();
        if (!isset($_SESSION['ausername']))
            {
                header('Location:adminlogin.php');
            }
        ?>


<html>
    <head><style>
            body{
                background-color: #ddd;
                margin: 0px;
            }
            h1
            {
                color: white;
                padding: 5px;
                align-items: center; 
                margin: 20px;
                margin-top: 10px;
                margin-bottom: 40px;
                margin-left: 450px;
                margin-right: 50px;
                height: 20px;

            }    
            div { margin: 0px; }

            .slate   { background-color: #ddd; }
            .green   { background-color: #779126; }
            .blue    { background-color: #3b8ec2; }
            .yellow  { background-color: #eec111; }
            .black   { background-color: #000; }

            /* -------------------- Colors: Text */
            .slate select   { color: #000; }
            .green select   { color: #fff; }
            .blue select    { color: #fff; }
            .yellow select  { color: #000; }
            .black select   { color: #fff; }


            /* -------------------- Select Box Styles: danielneumann.com Method */
            /* -------------------- Source: http://danielneumann.com/blog/how-to-style-dropdown-with-css-only/ */

            .topnav {
                overflow: hidden;
                background-color: #333;
            }

            .topnav a {
                float: left;
                color:  #f2f2f2;
                text-align: center;
                padding: 4px 20px;
                text-decoration: none;
                font-size: 18px;
            }

            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }

            .topnav a.active {
                background-color: #4CAF50;
                color: white;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                float: none;
                color: black;
                padding: 12px 15px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .dropdown-content a:hover {
                background-color:  ;

            }

            .dropdown:hover .dropdown-content {
                display: block;
            }



            .navbar {
                overflow: hidden;
                background-color: #333;
            }

            .navbar a {
                float: left;
                font-size: 18px;
                color: ;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            .dropdown {
                float: left;    
                overflow: hidden;
            }

            .dropdown .dropbtn {
                font-size: 18px;  
                border: none;
                outline: none;
                color: white;
                padding: 3px 20px;
                background-color: inherit;
                font-family: inherit;
                margin: 0;
            }

            .navbar a:hover, .dropdown:hover .dropbtn {
                background-color: #ddd ;
                color: black;
            }



            * {
                box-sizing: border-box;
            }

            /* Create a column layout with Flexbox */
            .row {
                display: flex;
            }

            /* Left column (menu) */
            .left {
                flex: 20%;
                padding: 15px 0;

            }

            .left h2 {
                padding-left: 8px;
            }

            /* Right column (page content) */
            .right {
                flex: 80%;
                padding: 15px;

            }


            /* Style the navigation menu inside the left column */
            #myMenu {
                list-style-type: none;
                padding: 0;
                margin: 0;
            }

            #myMenu li a {
                backgrxound-color: #f6f6f6;
                padding: 12px 20px;
                text-decoration: none;
                font-size: 18px;
                color: black;
                display: block;


            }

            #myMenu li a:hover {
                background-color: #eee;
            }
        </style>
    </head>
    <body>
       <?php
        if (!isset($_SESSION['ausername']))
            {
                header('Location:adminlogin.php');
            }
        ?>
        <div class="topnav" ><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Online Education System</h1></div>

        <div class="topnav" >
            <a class="active" href="educature/home.php">Home</a>

            
                    <a href="ac1.php">c</a>
                    <a href="aphp.php">php</a>
                    <a href="ajava.php">Java</a>
                    <a href="ac++.php">c++</a>
            <a href="../logout.php">Log out</a>
        </div>

        <div class="row" style="margin:0px;height:10000px" >
            <div class="left" style="background-color:#bbb;" >
                <ul id="myMenu" name="">
                    <li><a href="ace.php" onc>DBMS</a></li>
                    <li><a href="adsa.php">DSA</a></li>
                    <li><a href="adaa.php">DAA</a></li>
                    <li><a href="ajsp.php">JSP</a></li>
                    <li><a href="acsa.php">CSA</a></li>
                    <li><a href="adm.php">DM</a></li>

                </ul>
            </div>

            <div class="right" style="background-color:#ddd;">

                <?php
                try {
                    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php', 'root', '');
                    $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                    if (!empty($_POST['id1'])) {
                        $query = $dbhandler->query('delete from link where id=' . $_POST['id1'] . ';');
                    }

                    if (!empty($_POST['link1']) || !empty($_POST['about1'])) {
                        $query = $dbhandler->query('insert into link values(NULL,' . '"' . $_POST['link1'] . '",' . '"php",' . '"' . $_POST['about1'] . '");');
                    }
                    
                    
                    if (!empty($_POST['id'])) {
                        $query = $dbhandler->query('delete from youtube where id=' . $_POST['id'] . ';');
                    }

                    if (!empty($_POST['link']) || !empty($_POST['about'])) {
                        $query = $dbhandler->query('insert into youtube values(NULL,' . '"' . $_POST['link'] . '",' . '"php",' . '"' . $_POST['about'] . '");');
                    }


                    $query = $dbhandler->query('select * from youtube where branch="php"');
                    echo '<table class="right" style="background-color:#ddd;">';
                    while ($r = $query->fetch()) {

                        echo'
                             <iframe width="230" height="150" src="' . $r['link'] . '">
                             </iframe>';
                        if (isset($_COOKIE['ausername'])) {
                            echo $r['id'];
                        }
                    }
                    
                    $query = $dbhandler->query('select * from link where branch="php"');
                    echo '<table class="right" style="background-color:#ddd;">';
                    $i=1;
                    while ($r = $query->fetch()) {
                        $fnm=$r['link'];
                    
                                echo $r['id']. "&nbsp;&nbsp;&nbsp;&nbsp;<b>link: (".$i.")</b><a href='$fnm' target='_blank'>" . $fnm . '</a>&nbsp;&nbsp;&nbsp;<b>Description:</b>' . $r['about'].'<br><br>';
                    $i++;
                                
                    }
                    
                        ?>&nbsp;&nbsp;&nbsp;<?php
                    
                    echo '</table>';

                   
                        echo 'upload you tube video:<form method="POST" action="">';
                        echo '<input type="text" name="link" required="true">';
                        echo ' <input type="text" name="about" required="true">';
                        echo '<input type="submit"></form>';

                        echo 'delete you tube video:<form method="POST" action="">';
                        echo '<input type="text" name="id" required="true">';
                        echo '<input type="submit"></form>';
                
                    echo '</table>';

                   
                        echo 'upload link:<form method="POST" action="">';
                        echo '<input type="text" name="link1" required="true">';
                        echo ' <input type="text" name="about1" required="true">';
                        echo '<input type="submit"></form>';

                        echo 'delete link:<form method="POST" action="">';
                        echo '<input type="text" name="id1" required="true">';
                        echo '<input type="submit"></form>';
                    }
                 catch (PDOException $e) {
                    echo $e->getMessage();
                    die();
                }

                ?>

            </div>
        </div>



    </body>
</html>