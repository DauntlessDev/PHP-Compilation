<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="measure.css" />
    <title>Measure Conversion Program</title>
  </head>
  <body>

    <div class="form-wrapper">
        <form method="POST">
            <label for="base">Base Value:</label>
            <input type="number" id="base" name="base"><br><br>
            <input type="submit" value="Submit">
        </form>
        <br><br>
    </div>

    <?php
         
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $base = test_input($_POST["base"]);

        function baseTimesArg(float $arg) {
          global $base;
          return  $base * $arg;
        }

         
      echo "
      <!--table 1-->
    <table style=\"width: 100%\">
      <tr>
        <th colspan='6'>METRIC CONVERSIONS</th>
      </tr>
      <tr>
        <td>{$base} centimetre</td>
        <td>=</td>
        <td>". baseTimesArg(10) . " millimetres</td>
        <td>{$base} cm</td>
        <td>=</td>
        <td>". baseTimesArg(10) . " mm</td>
      </tr>
      <tr>
        <td>{$base} decimetre</td>
        <td>=</td>
        <td>". baseTimesArg(10) . " centimetres</td>
        <td>{$base} dm</td>
        <td>=</td>
        <td>". baseTimesArg(10) . " cm</td>
      </tr>
      <tr>
        <td>{$base} metre</td>
        <td>=</td>
        <td>". baseTimesArg(100) . " centimetres</td>
        <td>{$base} m</td>
        <td>=</td>
        <td>". baseTimesArg(100) . " cm</td>
      </tr>
      <tr>
        <td>{$base} kilometre</td>
        <td>=</td>
        <td>". baseTimesArg(1000) . " metres</td>
        <td>{$base} km</td>
        <td>=</td>
        <td>". baseTimesArg(1000) . " m</td>
      </tr>
    </table>

    <!--table 2-->
    <table style=\"width: 100%\">
      <tr>
        <th colspan='6'>IMPERIAL CONVERSIONS</th>
      </tr>
      <tr>
        <td>{$base} foot</td>
        <td>=</td>
        <td>". baseTimesArg(12) . " inches</td>
        <td>{$base} ft</td>
        <td>=</td>
        <td>". baseTimesArg(12) . " in</td>
      </tr>
      <tr>
        <td>{$base} yard</td>
        <td>=</td>
        <td>". baseTimesArg(3) . " feet</td>
        <td>{$base} yd</td>
        <td>=</td>
        <td>". baseTimesArg(3) . " ft</td>
      </tr>
      <tr>
        <td>{$base} chain</td>
        <td>=</td>
        <td>". baseTimesArg(22) . " yards</td>
        <td>{$base} ch</td>
        <td>=</td>
        <td>". baseTimesArg(22) . " yd</td>
      </tr>
      <tr>
        <td>{$base} furlong</td>
        <td>=</td>
        <td>". baseTimesArg(220) . " yards (or ". baseTimesArg(10) . " chains)</td>
        <td>{$base} fur</td>
        <td>=</td>
        <td>". baseTimesArg(220) . " yd (or ". baseTimesArg(100) . "ch) cm</td>
      </tr>
      <tr>
        <td>{$base} mile</td>
        <td>=</td>
        <td>". baseTimesArg(1760) . " yards (or ". baseTimesArg(8) . " furlongs)</td>
        <td>{$base} mi</td>
        <td>=</td>
        <td>". baseTimesArg(1760) . " yd (or ". baseTimesArg(8) . " fur)</td>
      </tr>
    </table>

    <!--table 3-->
    <table style=\"width: 100%\">
        <tr>
          <th colspan='6'>IMPERIAL CONVERSIONS</th>
        </tr>
        <tr>
          <td>{$base} millimetre</td>
          <td>=</td>
          <td>". baseTimesArg(0.03937) . " inches</td>
          <td>{$base} mm</td>
          <td>=</td>
          <td>". baseTimesArg(0.03937) . " in</td>
        </tr>
        <tr>
          <td>{$base} centimetre</td>
          <td>=</td>
          <td>". baseTimesArg(0.39370) . " inches</td>
          <td>{$base} cm</td>
          <td>=</td>
          <td>". baseTimesArg(0.39370) . " in</td>
        </tr>
        <tr>
          <td>{$base} metre</td>
          <td>=</td>
          <td>". baseTimesArg(39.37008) . " inches</td>
          <td>{$base} m</td>
          <td>=</td>
          <td>". baseTimesArg(39.37008) . " in</td>
        </tr>
        <tr>
          <td>{$base} metre</td>
          <td>=</td>
          <td>". baseTimesArg(3.28084) . " feet</td>
          <td>{$base} m</td>
          <td>=</td>
          <td>". baseTimesArg(3.28084) . " ft</td>
        </tr>
        <tr>
          <td>{$base} metre</td>
          <td>=</td>
          <td>". baseTimesArg(1.09361) . " yards</td>
          <td>{$base} m</td>
          <td>=</td>
          <td>". baseTimesArg(1.09361) . " yd</td>
        </tr>
        <tr>
          <td>{$base} kilometre</td>
          <td>=</td>
          <td>". baseTimesArg(1093.6133) . " yards</td>
          <td>{$base} km</td>
          <td>=</td>
          <td>". baseTimesArg(1093.6133) . " yd</td>
        </tr>
        <tr>
          <td>{$base} kilometre</td>
          <td>=</td>
          <td>". baseTimesArg(0.62137) . " miles</td>
          <td>{$base} km</td>
          <td>=</td>
          <td>". baseTimesArg(0.62137) . " mi</td>
        </tr>
      </table>

      
      <!--table 3-->
    <table style=\"width: 100%\">
      <tr>
        <th colspan='6'>METRIC CONVERSIONS</th>
      </tr>
      <tr>
        <td>{$base} inch</td>
        <td>=</td>
        <td>". baseTimesArg(2.54) . " centimetres</td>
        <td>{$base} in</td>
        <td>=</td>
        <td>". baseTimesArg(2.54) . " cm</td>
      </tr>
      <tr>
        <td>{$base} foot</td>
        <td>=</td>
        <td>". baseTimesArg(30.48) . " centimetres</td>
        <td>{$base} ft</td>
        <td>=</td>
        <td>". baseTimesArg(30.48) . " cm</td>
      </tr>
      <tr>
        <td>{$base} yard</td>
        <td>=</td>
        <td>". baseTimesArg(91.44) . " centimetres</td>
        <td>{$base} yd</td>
        <td>=</td>
        <td>". baseTimesArg(91.44) . " cm</td>
      </tr>
      <tr>
        <td>{$base} mile</td>
        <td>=</td>
        <td>". baseTimesArg(0.9144) . " metres</td>
        <td>{$base} mi</td>
        <td>=</td>
        <td>". baseTimesArg(0.9144) . " m</td>
      </tr>
      <tr>
        <td>{$base} mile</td>
        <td>=</td>
        <td>". baseTimesArg(1609.344) . " metres</td>
        <td>{$base} mi</td>
        <td>=</td>
        <td>". baseTimesArg(1609.344) . " m</td>
      </tr>
      <tr>
        <td>{$base} mile</td>
        <td>=</td>
        <td>". baseTimesArg(1.609344) . " kilometres</td>
        <td>{$base} mi</td>
        <td>=</td>
        <td>". baseTimesArg(1.609344) . " km</td>
      </tr>
    </table>

      ";
     }
      
      function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
      }

      

      ?>
  </body>
</html>
