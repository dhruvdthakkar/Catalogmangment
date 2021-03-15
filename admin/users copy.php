<!DOCTYPE html>
<html>
    <head>
        <title>Catalogue Management System</title>
        <link rel="stylesheet" type="text/css" href="./cataloguesystem.css" />
        <!-- Used this CDN for the icon's of Navbar. -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div id="wrapper">
            <!-- https://www.w3schools.com/howto/howto_js_topnav.asp "Navabar code referes from this site" -->
            <nav>
                <div class="topnavforbutton" id="nav-id">
                    <a href="#home" class="social-icon-link"><img src="../static/facebook.png" class="social-icon" /></a>
                    <a href="#home" class="social-icon-link"><img src="../static/insta.jpg" class="social-icon" /></a>
                    <a href="#home" class="social-icon-link"><img src="../static/Youtube.png" class="social-icon" /></a>
                    <div class="breaker"></div>
                    <div class="topnav">
                        <a href="users.php">Users</a>
                        <a href="https://dxt5888.uta.cloud/blog/">Forum</a>
                        <a href="about.html">About</a>
                        <a href="index.html">Home</a>
                    </div>
                </div>
                <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav "Navabar responsive code referes from this site" -->
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
            <div class="upcoming-list">
            <h2>Users</h2>
            <?php
                include "config.php";
                
                echo "<br>";

                
                $sql_query = "select * from users";
                $result = $con->query($sql_query);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "name: " . $row["name"] . " - Comment: " . $row["comment"];
                        echo "<div class=\"upcoming-list-in\">";
                        echo "<img src=\"../static/user.png\" class=\"upcoming-list-in\"/>";
                        echo "<h3 class=\"upcoming-list-in\">".$row["email"]."</h3><p class=\"upcoming-list-in\">Role: ".$row["role"]."</p><button class=\"upcoming-list-in\">Add/Edit/Delete</button>";
                    }
                } 
                $con->close();
            ?>
                <div class="upcoming-list-in">
                    <img src="../static/user.png" class="upcoming-list-in"/>
                    <h3 class="upcoming-list-in">Dhruv Takkar</h3>
                    <p class="upcoming-list-in">Role: Staff</p>
                    <button class="upcoming-list-in">Add/Edit/Delete</button>
                </div>
                <div class="upcoming-list-in">
                    <img src="../static/user.png" class="upcoming-list-in"/>
                    <h3 class="upcoming-list-in">Daniel Firello</h3>
                    <p class="upcoming-list-in">Role: Student</p>
                    <button class="upcoming-list-in">Add/Update/Delete</button>
                </div>
                <div class="upcoming-list-in">
                    <img src="../static/user.png" class="upcoming-list-in"/>
                    <h3 class="upcoming-list-in">Het Shah</h3>
                    <p class="upcoming-list-in">Role: Student</p>
                    <button class="upcoming-list-in">Add/Update/Delete</button>
                </div>
                <br/>
                <br/>
            </div>
            <br />
            <br />
            <div class="footer">
                <p class="footer-paragraph">Created by Dhruv<span class="rights-reserved">All rights Reserved</span></p>
            </div>
        </div>
        <script>
            function myFunction() {
                var x = document.getElementById("nav-id");
                if(x.style.display == "block"){
                    x.style.display = "none";
                }
                else{
                    x.style.display = "block";
                }
            }
        </script>
    </body>
</html>