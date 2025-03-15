<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <title><?php echo "$title";?> | Zachary Howell</title>
        <?php $currentpage=basename($_SERVER['PHP_SELF']); ?>
    </head>

    <?php if($selected=='main'){
        echo'
            <body class="body-main">
                <header class="header-main">
                    <div class="header-div">
                        <div class="batty">
                            <a href="index.php">
                                <img src="';
                                    if($category=='home'){
                                        echo'images/batty.svg';
                                    }else if($category=='webdev'){
                                        echo'images/batty-web.svg';
                                    }else if($category=='videography'){
                                        echo'images/batty-vid.svg';
                                    }else if($category=='illusmation'){
                                        echo'images/batty-space.svg';
                                    } 
                                echo'" width="240">
                            </a>
                        </div>
                        <a href="index.php">
                            <h1 class="zach-heading">
                                <img src="images/h1.png" alt="Zachary Howell">
                            </h1>
                        </a>
                        <div class="nav-div1">
                            <nav class="main-nav">
                                <ul>
                                    <li id="navPortfolio">
                                        <a id="porLink" class="active-link" href="portfolio.php">Portfolio</a>
                                    </li>
                                    <li id="navAbout">
                                        <a id="abtLink" href="about.php">About</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="nav-mob1">
                            <a href="#" class="toggle-nav">
                                <span id="hamburger">&#9776;</span>
                                <span id="close" class="hidden">&times;</span>
                            </a>
                        </div>
                    </div>
                </header>
                <div id="navMob2" class="hidden">
                    <nav class="mobile-menu">
                        <ul>
                            <li><a href="#" id="prtLink">Portfolio</a></li>
                            <li><a href="#" id="aboLink">About</a></li>
                        </ul>
                        <ul class="prtMenu hidden">
                            <li><a href="webdev.php" id="webLink">Web Development</a></li>
                            <li><a href="illusmation.php" id="illLink">Illustration & Animation</a></li>
                            <li><a href="videography.php" id="vidLink">Videography</a></li>
                            <li>
                                <div class="mob-socials">
                                    <a href="https://github.com/zawiho" target="_blank">
                                        <img src="images/giticon.svg" width="50">
                                    </a>
                                    <a href="https://www.linkedin.com/in/zachary-howell-she-her/" target="_blank">
                                        <img src="images/liicon.svg" width="50">
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <ul class="aboMenu hidden">
                            <li><a href="about.php#" id="bioLink">About Me</a></li>
                            <li><a href="about.php#expanchor" id="wrkLink">Work Experience</a></li>
                            <li><a href="about.php#name" id="conLink">Contact</a></li>
                            <li>
                                <div class="mob-socials">
                                    <a href="https://github.com/zawiho" target="_blank">
                                        <img src="images/giticon.svg" width="50">
                                    </a>
                                    <a href="https://www.linkedin.com/in/zachary-howell-she-her/" target="_blank">
                                        <img src="images/liicon.svg" width="50">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                ';
        }else if($selected=='about'){
            echo'
            <body class="body-main">
                <header class="header-main">
                    <div class="header-div">
                        <div class="batty">
                            <a href="index.php">
                                <img src="images/batty.svg" width="240">
                            </a>
                        </div>
                        <a href="index.php">
                            <h1 class="zach-heading">
                                <img src="images/h1.png" alt="Zachary Howell" width="566">
                            </h1>
                        </a>
                        <div class="nav-div1">
                            <nav class="main-nav">
                                <ul>
                                    <li id="navPortfolio">
                                        <a id="porLink" href="portfolio.php">Portfolio</a>
                                    </li>
                                    <li id="navAbout">
                                        <a id="abtLink" class="active-link" href="about.php">About</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </header>
                ';
        }else if($selected=='web'){
            echo'
            <body class="body-web">
                <header class="header-web">
                    <div class="batty">
                        <a href="index.php">
                            <img src="images/batty.png">
                        </a>
                    </div>
                    <a href="index.php">
                        <h1 class="zach-heading">
                            <img src="images/h1.png" alt="Zachary Howell">
                        </h1>
                    </a>
                    <div class="nav-div1">
                        <nav class="main-nav">
                            <ul>
                                <li id="navPortfolio">
                                    <a href="#">Portfolio</a>
                                </li>
                                <li id="navAbout">
                                    <a href="about.php">About</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </header>
                ';
        }else if($selected=='ill'){
            echo'
            <body class="body-ill">
                <header class="header-ill">
                    <div class="batty">
                        <a href="index.php">
                            <img src="images/batty.png">
                        </a>
                    </div>
                    <a href="index.php">
                        <h1 class="zach-heading">
                            <img src="images/h1.png" alt="Zachary Howell">
                        </h1>
                    </a>
                    <div class="nav-div1">
                        <nav class="main-nav">
                            <ul>
                                <li id="navPortfolio">
                                    <a href="#">Portfolio</a>
                                </li>
                                <li id="navAbout">
                                    <a href="about.php">About</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </header>
                ';
        }else if($selected=='vid'){
            echo'
            <body class="body-vid">
                <header class="header-vid">
                    <div class="batty">
                        <a href="index.php">
                            <img src="images/batty.png">
                        </a>
                    </div>
                    <a href="index.php">
                        <h1 class="zach-heading">
                            <img src="images/h1.png" alt="Zachary Howell">
                        </h1>
                    </a>
                    <div class="nav-div1">
                        <nav class="main-nav">
                            <ul>
                                <li id="navPortfolio">
                                    <a href="#">Portfolio</a>
                                </li>
                                <li id="navAbout">
                                    <a href="about.php">About</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </header>
                ';
        }
        ?>