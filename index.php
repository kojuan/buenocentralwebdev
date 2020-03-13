

<!DOCTYPE html>
<script>
    window.onscroll = function() {stickyHeader()};

    // Get the header
    
    let header = document.getElementById("headContainerSticky");

    // Get the offset position of the navbar
    let sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function stickyHeader() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
    }
</script>

<html>
<head>
<title>Bueno Central</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="assets/css/style.css" type="text/css" rel="stylesheet"/>

</head>
<div class="headerOfHeaderContainer">
    <div class="headerContainer" id="headContainerSticky">
        <div class="logo">
            <a href="index.php"><img src="assets/images/bc_header.png"></a>
        </div>

        <div class="nav">
                <li><a href="#">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contactform.php">Contact Us</a></li>

        </div>
    </div>
</div>

<body>

    <br><br><br><br>

    <center><div>
    <fieldset>
  <legend>Announcement(s)</legend>
  <div style='background-color:#1d5a75;'><p style='color:#bae9ff'>
    <?php
    $filename = 'assets/txt/';
    $counter = 0;
    $file_exist = false;
    foreach (scandir($filename) as $announcement){
        if ($announcement == "." || $announcement == ".."){
            $counter++;
            
        } 
        else{
            ?>
            <fieldset>
                <?php
                $splitter =  explode(".",$announcement);
                echo "<div style='background-color:#216583;'><p style='color:#bae9ff'>";
                echo "<legend>" . $splitter[0] . "</legend><br>";

                $fileOpen = fopen($filename . $announcement, 'r');
                $fileRead = fread($fileOpen, 1000);
                echo $fileRead . "";
                fclose($fileOpen);
        
                $file_exist = true;
                ?>
            </fieldset>
            <br>
            <?php
        }
    }
    if ($file_exist == false){
        echo "<div style='background-color:#3094c0;'><p style='color:#e8eff2'>";
        echo "No Announcement for now. Stay updated.<br>";
    }
    ?>
    </fieldset>
    </div></center>

    <div class="w3-content w3-section" style="max-width:1550px">
        <img class="mySlides w3-animate-fading" src="assets/images/image_1.jpg" style="width:100%">
        <img class="mySlides w3-animate-fading" src="assets/images/image_2.jpg" style="width:100%">
        <img class="mySlides w3-animate-fading" src="assets/images/image_3.jpg" style="width:100%">
        <img class="mySlides w3-animate-fading" src="assets/images/image_4.jpg" style="width:100%">
    </div>

    <script>
        let myIndex = 0;
        carousel();

        function carousel() {
        let i;
        let x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 5000);    
        }
    </script>

    <p>
        <button onclick="topFunction()" id="goTopButton" title="Go to top"><img src="assets/images/topImageButton.png"></button>
    </p>
    <center>
        Latest merchandise of Bueno Central <br>
        RESERVE NOW <br>
         / button / here
         <br>
    </center>
    
    
    <!-- <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
    <center><div class="fb-page" 
  data-tabs="timeline, events"
  data-href="https://www.facebook.com/BuenoCentral"
  data-width="780px"
  style="width: 800px"></div></center> -->
    
    </body>




<script>
    goToTopButton = document.getElementById("goTopButton");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        goToTopButton.style.display = "block";
    } else {
        goToTopButton.style.display = "none";
    }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }


</script>

</html>
