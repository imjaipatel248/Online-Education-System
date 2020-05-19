<!--
  ** Style a Select Box Using Only CSS
  ** Source: http://bavotasan.com/2011/style-select-box-using-only-css/
  ** Source: http://danielneumann.com/blog/how-to-style-dropdown-with-css-only/
  ** Source: http://stackoverflow.com/a/5809186
-->

<html>
    <head><style>
            body{
                background-color: bisque;
                margin: 0px;
            }
            h1
            {
                color: white;
                padding: 5px;

                margin: 20px;
                margin-top: 10px;
                margin-bottom: 40px;
                margin-left: 450px;
                margin-right: 50px;
                height: 10px;

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
            #mainselection select {
                border: 0;
                color: #EEE;
                background: transparent;
                font-size: 15px;
                font-weight: bold;
                padding: 2px 10px;
                width: 220px;
                *width: 200px;
                *background: #58B14C;
                -webkit-appearance: none;
            }
            #mainselection {
                overflow:hidden;
                margin-top:10px;
                margin-right: 20px;
                width:200px;
                -moz-border-radius: 9px 9px 9px 9px;
                -webkit-border-radius: 9px 9px 9px 9px;
                border-radius: 9px 9px 9px 9px;
                box-shadow: 1px 1px 11px #330033;
                background: #58B14C url("http://i62.tinypic.com/15xvbd5.png") no-repeat scroll 319px center;
            }



            .topnav {
                overflow: hidden;
                background-color: #333;
            }

            .topnav a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 1px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }

            .topnav a.active {
                background-color: #4CAF50;
                color: white;
            }




        </style>
    </head>
    <body>
        <div class="topnav" ><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Online Education System</h1></div>
        <table align="right">
            <div class="topnav" >
                <a href="login.php">Login again</a>
            </div>
            <?php
            if (isset($_SESSION['username']))
                unset($_SESSION['username']);
            if (isset($_SESSION['ausername']))
                unset($_SESSION['ausername']);
            if (isset($_COOKIE['username']))
                setcookie('username','', -36000);
            if (isset($_COOKIE['ausername']))
                setcookie('ausername','', -36000);
            session_abort();
            ?><h2>you logged out</h2>

        </table>
    </body>
</html>