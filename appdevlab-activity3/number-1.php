<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="number-1.css">
    <title>#1 Array Info Table</title>
</head>
<body>
    <?php 
        $data = array (
            array("Jall Lee","<img src ='images/prof10.jpg'   />", 18, "Dec 2", "090909179"),
            array("Jack Frost","<img src ='images/prof9.jpg'  />", 21, "Jan 13", "091233312"),
            array("Robin Hood","<img src ='images/prof8.jpg'  />", 25, "March 23", "090945218"),
            array("Wan Payb","<img src ='images/prof7.png'  />", 15, "Sept 9", "094451589"),
            array("Blast Toise","<img src ='images/prof6.jpg'  />", 13, "Aug 26", "099823415"),
            array("Toru Anmoko","<img src ='images/prof5.jpg'  />", 31, "June 3", "099703492"),
            array("Yoru Neim","<img src ='images/prof4.jpg' />",18, "Dec 22", "090246580"),
            array("Hilo Aquo","<img src ='images/prof3.jpg'  />", 19, "Nov 13", "091235559"),
            array("Tupan Dawg","<img src ='images/prof2.jpg'  />", 23, "Feb 4", "090941151"),
            array("Turu Orfols","<img src ='images/prof1.png' />", 17, "Oct 1", "094454244"),
          );
    ?>
    <table style="width:100%">
        <tr>
          <th>No.</th>
          <th>Name</th>
          <th>Image</th>
          <th>Age</th>
          <th>Birthday</th>
          <th>Contact Number</th>
        </tr>
        <?php 
          sort($data);
          foreach ($data as $outer){
              $index = array_search($outer, $data);
              echo "<tr><td>" . $index+1 . "</td>";
              foreach($outer as $value){
                echo "<td>" . $value . "</td>";
              }
              echo "</tr>";
          }
        
        ?>
      </table>
</body>
</html>