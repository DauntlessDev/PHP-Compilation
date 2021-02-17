<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shape.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=default'></script>
    <title>#3 Shape Volume Table</title>
</head>
<body>
    <?php 
        function cube_volume($side){
            return $side*$side*$side;
        }
        function rectangular_prism_volume($length, $width, $height){
            return $length*$width*$height;
        }
        function cylinder_volume($radius, $height){
            return number_format(3.141592*$radius*$radius*$height, 2);
        }
        function pyramid_volume($length, $width, $height){
            return ($length*$width*$height)/3;
        }
        function sphere_volume($radius){
            return number_format(((4/3)*(3.141592*$radius*$radius*$radius)), 2);
        }
    ?>
    <table>
        <tr>
            <th colspan="4">Volume of Shapes</th>
        </tr>
        <tr>
            <td>Shape</td>
            <td>Values</td>
            <td>Formula</td>
            <td>Answer</td>
        </tr>
        <tr> 
            <?php
                $cube_side = 5;
            ?>   
            <td>Cube</td>
            <td>s = <?php echo $cube_side;?> </td>
            <td class='formula'>$$ { V = s^3 } $$</td>
            <td> <?php echo cube_volume(5);?> </td>
        </tr>
        <tr>  
            <?php
                $rect_length = 5;
                $rect_width = 6;
                $rect_height = 7;
            ?>     
            <td>Right Rectangular Prism</td>
            <td>l = <?php echo $rect_length;?> 
                <br>
                w = <?php echo $rect_width;?> 
                <br>
                h = <?php echo $rect_height;?>  
            </td>
            <td class='formula'>$$ { V = lwh } $$</td>
            <td> <?php echo rectangular_prism_volume($rect_length, $rect_width, $rect_height);?> </td>
        </tr>
        <tr>    
            <?php
                $cy_radius = 5;
                $cy_height = 6;
            ?>  
            <td>Cylinder</td>
            <td>r = <?php echo $cy_radius;?> 
                <br>
                h = <?php echo $cy_height;?> 
            </td>
            <td class='formula'>$$ { V = π r^2 h } $$</td>
            <td> <?php echo cylinder_volume($cy_radius, $cy_height);?> </td>
        </tr>
        <tr>    
            <?php
                $pyramid_length = 5;
                $pyramid_width = 6;
                $pyramid_height = 7;
            ?>  
            <td>Pyramid</td>
            <td>l = <?php echo $pyramid_length;?> 
                <br>
                w = <?php echo $pyramid_width;?> 
                <br>
                h = <?php echo $pyramid_height;?>  
            </td>
            <td class='formula'>$$ { V = { lwh \over 3} } $$</td>
            <td> <?php echo pyramid_volume($pyramid_length, $pyramid_width, $pyramid_height);?> </td>
        </tr>
        <tr>    
            <?php
                $sphere_side = 5;
            ?>  
            <td>Sphere</td>
            <td>r = <?php echo $sphere_side;?> </td>
            <td class='formula'>$$ { V = \frac{4}{3} πr^3 } $$</sup></td>
            <td> <?php echo sphere_volume($sphere_side);?> </td>
        </tr>
    </table>
    
</body>

</html>