<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Sir Curse</title>
    <meta name="description" content="Forward thinking theatrical rock from the depths of Leeds">
    <meta name="Bill O'Dwyer" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,700&display=swap" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>
    <!-- <div class="section header">
        <div class="container">
            <div class="row">
                <a href="index.html"> <img class="logo" src="images/logo.png" alt="logo"> </a>
            </div>
            <div class="row links">
                <span class="link">
                    <a href="about.html">about</a>
                </span>
                <span class="link">
                    <a href="live.php">live</a>
                </span>
                <span class="link">
                    <a href="gallery.html">gallery</a>
                </span>
                <span class="link">
                    <a href="merch.html">merch</a>
                </span>
            </div>
        </div>
    </div> -->

    <div class="section gigs">
        <div class="container">
            <div class="row">
                <div class="full column">
                    <table class="u-full-width table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <?php
                        echo "<tbody>\n\n";
                        $f = fopen("live.csv", "r");
                        while (($line = fgetcsv($f)) !== false) {
                            echo "<tr>";
                            foreach ($line as $cell) {
                                echo "<td>" . htmlspecialchars($cell) . "</td>";
                            }
                            echo "</tr>\n";
                        }
                        fclose($f);
                        echo "\n</tbody>";
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="section socials">
       <div class="container">
           <div class="row socials">
               <div class="full column">
                   <span class="social">
                       <a href="https://facebook.com/sircurseband" target="_blank">
                           <i class="fab fa-facebook-square"></i>
                       </a>
                   </span>
                   <span class="social">
                       <a href="https://instagram.com/sircurseband" target="_blank">
                           <i class="fab fa-instagram"></i>
                       </a>
                   </span>
                   <span class="social">
                       <a href="https://www.youtube.com/channel/UCI7M1BX2xQZOenlOyiiSI9A" target="_blank">
                           <i class="fab fa-youtube"></i>
                       </a>
                   </span>
                   <span class="social">
                       <a href="https://twitter.com/sircurseband" target="_blank">
                           <i class="fab fa-twitter"></i>
                       </a>
                   </span>
                   <span class="social">
                       <a href="https://open.spotify.com/artist/56k5F2qC0S7BKOSHir0Hhb" target="_blank">
                           <i class="fab fa-spotify"></i>
                       </a>
                   </span>
                   <span class="social">
                       <a href="mailto:sircurseband@gmail.com">
                           <i class="far fa-envelope"></i>
                       </a>
                   </span>
               </div>
           </div>
       </div>
   </div>

    <div class="section copyright">
       <div class="container">
           <div class="row">
               <div class="full column">
                   <div class="copyright">
                       <p>© 2019 Sir Curse</p>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <script src="https://kit.fontawesome.com/036c384da2.js" crossorigin="anonymous"></script>
</body>
</html>
