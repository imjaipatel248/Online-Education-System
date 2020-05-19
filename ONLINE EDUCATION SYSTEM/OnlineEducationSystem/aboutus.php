<html>
  <?php
session_start();
    if (!isset($_SESSION['username'])) {
        header('Location:login.php');
    }
?> 


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
p.param{
           color: black;
           font-size:20px;
           line-height: 20px;
           
           padding: 15px;
           border-color: black;
           border-width: 5px;
           border-style: ridge;
           
           margin: 20px;
           margin-top: 5px;
           margin-left: 10px;
           margin-right: 450px;
        
}
p.param2{
    font-family: serif;
    font-size: 30px;
}


        </style>
    </head>
    <body>
        <div class="topnav" ><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Online Education System</h1></div>
<table align="right">
<div class="topnav" >
    <a class="active" href="home.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="logout.php">Log out</a>
</div>
    <tr>
        <td>
            <p class="param2" >About Online Education System</p>
        <p class="param">
            
The National Programme on Technology Enhanced Learning (NPTEL) was initiated by seven Indian Institutes of Technology (Bombay, Delhi, Kanpur, Kharagpur, Madras, Guwahati and Roorkee) along with the Indian Institute of Science, Bangalore in 2003. Five core disciplines were identified, namely, civil engineering, computer science and engineering, electrical engineering, electronics and communication engineering and mechanical engineering and 235 courses in web/video format were developed in this phase.
The main goal of NPTEL Phase II (2009-14) was to build on the engineering and core science courses launched previously in NPTEL Phase I. An additional 600 web and video courses were created in all major branches of engineering, physical sciences at the undergraduate and postgraduate levels and management courses at the postgraduate level. Several improvements such as indexing of all video and web courses and keyword search were implemented.

        </p>
        </td>
</tr>
</table>
</body>
</html>