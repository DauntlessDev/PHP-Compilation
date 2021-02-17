<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fruits.css">
    <title>#2 Fruit Table</title>
</head>
<body>
    <table>
            <tr>
                <th colspan="4">My Fruits</th>
            </tr>

            <?php 
                
                $columns = array("Image","Name","Description","Facts");

                
                $fruits = array(
                    array("banana.jpg","Banana","Color Yellow","Bananas are a healthful addition to a balanced diet."),
                    array("apple.jpg","Apple","Color Red/Yellow Green","Apples are a relatively high-carbohydrate fruit and their most significant nutrient is vitamin C."),
                    array("apricot.jpg","Apricot","Color Orange","The apricot is a popular fruit with a light orange color and it is best known for its vitamin A and C content."),
                    array("avocado.jpg","Avocado","Color Dark Green","Avocados are extremely nutrient-dense, and they are rich in fiber, protein, vitamins, and minerals – especially potassium."),
                    array("blackberries.jpg","Blackberries","Color Dark Purple", "Blackberries are especially good for vitamin C and the health benefits it provides."),
                    array("blackcurrant.jpg","Blackcurrant","Color Dark Purple","Blackcurrants provide a substantial amount of vitamin C."),
                    array("blueberries.jpg","Blueberries","Color Color Deep Blue","Research studies demonstrate that blueberries may lower high blood pressure and improve cardiovascular risk factors."),
                    array("boysenberries.jpg","Boysenberries","Color Dark Redish Purple","Boysenberries grow to a large size and contain around 88% water by weight."),
                    array("cherries.jpg","Cherry","Color Pink/Red","The cherry is a small fruit with a sweet and juicy taste. There are also two main types of cherry; sour cherries and sweet cherries."),
                    array("durian.jpg","Durian","Color Yellow Green","Durians have an interesting nutritional profile too. In fact, they are one of the only fruits to contain a decent amount of carbohydrates and fat."),
                );


                echo "<tr class='column'>";
                foreach ($columns as $column){
                    echo "<td>" . $column . "</td>";
                }
                echo "</tr>";
                
                sort($fruits);
                foreach ($fruits as $fruit){
                    echo "<tr class='info'>";
                    foreach($fruit as $fruit_info){
                        $key = array_search($fruit_info, $fruit);
                        if ($key == 0){
                            echo "<td><img src='images/fruits/" . $fruit_info . "' </td>";
                        }elseif ($key ==3){
                            echo "<td class='fact'>" . $fruit_info . "</td>";
                        }else {
                            echo "<td>" . $fruit_info . "</td>";
                        }
                    }
                    echo "</tr>";
                }

            ?>
    </table>

    <p> I don't own any of the info, i got them from <a href='https://www.nutritionadvance.com/healthy-foods/types-of-fruit/'>nutritionaddvance</a>.</p>
</body>
</html>