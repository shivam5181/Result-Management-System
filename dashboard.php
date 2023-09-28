<?php
    include("init.php");
    
    $no_of_classes=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `class`"));
    $no_of_students=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `students`"));
    $no_of_result=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `result`"));
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- <link rel="stylesheet" href="normalize.css"> -->
    <!-- <link rel="stylesheet" href="./css/home.css"> -->
    <title>SSRMS</title>
    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            padding: 20px;
            margin: 7% 20% 0 20%;
        }
        body {
           margin: 0;
           font-family: "Roboto", sans-serif;
           background-image:url("./images/dashboard.jpg");
           color: white;
       }

.title {
  display: grid;
  grid-template-rows: 50px;
  grid-template-columns: 150px 1fr 150px;
  align-items: center;
  padding: 20px 0;
  text-align: center;
}
/* title grid */
img .logo{
  padding-top: 104px;
  width: 67px;
  height: auto;
}
.heading {
  font-size: 60px;
}

/*  */
.main {
  display: grid;
  align-items: center;
  font-size: 20px;
  padding-top: 80px;
}

.main p {
  margin: 0;
  font-size: 25px;
  font-family: monospace;
  letter-spacing: 3px;
  line-height: 3;
}

/* navigation bar */
ul {
  list-style-type: none;
  margin: 20px 0 0 0;
  padding: 0;
  display: flex;
  overflow: hidden;
  justify-content: space-evenly;
}

li a,
.dropbtn {
  display: inline-block;
  text-decoration: none;
  color: white;
  height: 40px;
  display: flex;
  align-items: center;
  padding: 5px 50px;
}

li a:hover,
.dropdown:hover {
  background-color: #3b687a;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #474b4f;
}

.dropdown-content a {
  color: white;
  text-decoration: none;
  display: flex;
  align-items: center;
}

.dropdown:hover .dropdown-content {
  display: block;

}



    /* for me coding for css  */
    </style>
</head>
<body>
        
    <div class="title">
        <a href="dashboard.php"><img src="./images/logo_excel.png" class="logo" width="67px"></a>
        <span class="heading">Dashboard</span>
        <a href="logout.php" style="color: white; text-decoration:none;"><span class="fa fa-sign-out"></span> Logout</a>
    </div>

    <div class="nav">
        <ul>
            <li>
                <a href="dashboard.php">Dashboard</a>
            </li>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">Classes &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="1">
                    <a href="add_classes.php">Add Class</a>
                    <a href="manage_classes.php">Manage Class</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Students &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php">Add Students</a>
                    <a href="manage_students.php">Manage Students</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Results &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_results.php">Add Results</a>
                    <a href="manage_results.php">Manage Results</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="main">
        <?php
            echo '<p>Available Classes:'.$no_of_classes[0].'</p>';
            echo '<p>Registered Students:'.$no_of_students[0].'</p>';
            echo '<p>Results Generated:'.$no_of_result[0].'</p>';
        ?>
    </div>

    
</body>
</html>

<?php
   include('session.php');
?>