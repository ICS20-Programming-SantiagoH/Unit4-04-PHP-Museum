<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Museum Admission">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Santiago Hewett">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon code -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png" />
    <link rel="manifest" href="./fav/site.webmanifest" />
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Museum Admission</title>
  </head>
  <body>
    <center>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>Museum Admission</h1>";
?>
<!-- Movie image -->
      <main class="mdl-layout__content">
        <table>
          <tr>
            <th>
              <img src="./images/museum_image.jpg" alt="Museum" width="75%" height="auto"/>
      </main>
<?php
echo "<h3>How old are you right now</h3>";
?>

<!-- form to get the age from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="age"> Please Enter your age:</label>
      <input type="number" id="age" placeholder="Ex.6" step="1" min="0" name="age"><br><br>

      <!-- Numeric Textfield Day Of The Week -->
              <form action=" javascript: enterClicked()">
                <label for="dayOfTheWeek">Enter the day of the week:</label>
                <select name="dayOfTheWeek" id="dayOfTheWeek">
                  <option value="Monday">Monday</option>
                  <option value="Tuesday">Tuesday</option>
                  <option value="Wednesday">Wednesday</option>
                  <option value="Thursday">Thursday</option>
                  <option value="Friday">Friday</option>
                  <option value="Saturday">Saturday</option>
                  <option value="Sunday">Sunday</option>
                </select><br><br>
                
      <input type="submit" value="Submit responses"> 
    </form>
    
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
      results
    </iframe>
          </center>
  </body>
</html>