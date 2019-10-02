<?php 
function get_nav_bar($nav_bar_name){

    session_start();


    if($nav_bar_name == "no_files_in_view"){

        echo'<nav class= "navbar navbar-expand-md navbar-dark bg-dark">
    
            <div class="container">
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    
                     <span class="navbar-toggler-icon"></span>
                </button>
    
    
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
    
                    <ul class="navbar-nav mr-auto">
    
                        <li class="nav-item dropdown">
    
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                Weeks
                            </a>
    
    
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    
                                <a class="dropdown-item" href="week_pages/week1.php">Week 1</a>
                                <a class="dropdown-item" href="week_pages/week2.php">Week 2</a>
                                <a class="dropdown-item" href="week_pages/week3.php">Week 3</a>
                                <a class="dropdown-item" href="week_pages/week4.php">Week 4</a>
                                <a class="dropdown-item" href="week_pages/week5.php">Week 5</a>
                                <a class="dropdown-item" href="week_pages/week6.php">Week 6</a>
                                <a class="dropdown-item" href="week_pages/week7.php">Week 7</a>
                                <a class="dropdown-item" href="week_pages/week8.php">Week 8</a>
                                <a class="dropdown-item" href="week_pages/week9.php">Week 9</a>
                                <a class="dropdown-item" href="week_pages/week10.php">Week 10</a>
                                <a class="dropdown-item" href="week_pages/week11.php">Week 11</a>
                                <a class="dropdown-item" href="week_pages/week12.php">Week 12</a>        
                            </div>
                        </li>
    
    
                        <li class="nav-item">
                            <a class="nav-link" href="commentary.php">Commentary</a>
                        </li>
                        
    
                        <!-- empty buttons to space out from logout button-->
                        <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                        </li>';
                        
                        if($_SESSION["logged_in"] == 1){
    
                            echo '<li class="nav-item">
                                    <a class="nav-link" href="logout.php">Log Out</a>
                                    </li>';
                        }
                        else{
    
                            echo    '<li class="nav-item">
                                        <a class="nav-link" href="login.php">Login</a>
                                    </li>
                                        
                                    <li class="nav-item">
                                        <a class="nav-link" href="register.php">Register</a>
                                    </li>';
                        }
                    echo '</ul>                        
                </div>
            </div>
        </nav>';  
    }
    else if($nav_bar_name == "one_file_in_view"){

        echo'<nav class= "navbar navbar-expand-md navbar-dark bg-dark">
    
            <div class="container">
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    
                     <span class="navbar-toggler-icon"></span>
                </button>
    
    
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
    
                    <ul class="navbar-nav mr-auto">
    
                        <li class="nav-item dropdown">
    
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                Weeks
                            </a>
    
    
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    
                                <a class="dropdown-item" href="../week_pages/week1.php">Week 1</a>
                                <a class="dropdown-item" href="../week_pages/week2.php">Week 2</a>
                                <a class="dropdown-item" href="../week_pages/week3.php">Week 3</a>
                                <a class="dropdown-item" href="../week_pages/week4.php">Week 4</a>
                                <a class="dropdown-item" href="../week_pages/week5.php">Week 5</a>
                                <a class="dropdown-item" href="../week_pages/week6.php">Week 6</a>
                                <a class="dropdown-item" href="../week_pages/week7.php">Week 7</a>
                                <a class="dropdown-item" href="../week_pages/week8.php">Week 8</a>
                                <a class="dropdown-item" href="../week_pages/week9.php">Week 9</a>
                                <a class="dropdown-item" href="../week_pages/week10.php">Week 10</a>
                                <a class="dropdown-item" href="../week_pages/week11.php">Week 11</a>
                                <a class="dropdown-item" href="../week_pages/week12.php">Week 12</a>        
                            </div>
                        </li>
    
    
                        <li class="nav-item">
                            <a class="nav-link" href="../commentary.php">Commentary</a>
                        </li>
                        
    
                        <!-- empty buttons to space out from logout button-->
                        <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                        </li>';
                        
                        if($_SESSION["logged_in"] == 1){
    
                            echo '<li class="nav-item">
                                    <a class="nav-link" href="../logout.php">Log Out</a>
                                    </li>';
                        }
                        else{
    
                            echo    '<li class="nav-item">
                                        <a class="nav-link" href="../login.php">Login</a>
                                    </li>
                                        
                                    <li class="nav-item">
                                        <a class="nav-link" href="../register.php">Register</a>
                                    </li>';
                        }
                    echo '</ul>                        
                </div>
            </div>
        </nav>';  
    }
    
}
?>