<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = ["BBQ Chicken", "English Breakfast", "Beet Salad", "Tim Tams"];
/*
Print every array element in a new line.
*/
echo "<p>". $food[0] ."</p>";
echo "<p>". $food[1] ."</p>";
echo "<p>". $food[2] ."</p>";
echo "<p>". $food[3] ."</p>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
echo "<ul> 
    <li>$food[0]</li>
    <li>$food[1]</li>
    <li>$food[2]</li>
    <li>$food[3]</li>
    </ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc = [
    "BBQ Chicken" => "Main Course",
    "English Breakfast" => "Main Course",
    "Beet Salad" => "Salad",
    "Tim Tams" => "Desert",
];



/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo "<p>" . $food[0] . " | " . $food_assoc["BBQ Chicken"] . "</p>";
echo "<p>" . $food[1] . " | " . $food_assoc["English Breakfast"] . "</p>";
echo "<p>" . $food[2] . " | " . $food_assoc["Beet Salad"] . "</p>";
echo "<p>" . $food[3] . " | " . $food_assoc["Tim Tams"] . "</p>";


// task separator
    
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$origin = [
    "England", 
    "Caribbean",
    "Australia",
    "Russia"
];

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
echo "<p>" . $food[0] . " | " . $food_assoc["BBQ Chicken"] . " | " . $origin[1] . "</p>";
echo "<p>" . $food[1] . " | " . $food_assoc["English Breakfast"] . " | " . $origin[0] . "</p>";
echo "<p>" . $food[2] . " | " . $food_assoc["Beet Salad"] . " | " . $origin[3] . "</p>";
echo "<p>" . $food[3] . " | " . $food_assoc["Tim Tams"] . " | " . $origin[2] . "</p>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo "<table>
        <tr>
            <th> Food </th>
            <th> Type </th>
            <th> Origin </th>
        </tr>
        <tr>
            <td> $food[0]</td>
            <td> {$food_assoc["BBQ Chicken"]}</td>
            <td>$origin[1]</td>
        </tr>
         <tr>
            <td> $food[1] </td>
            <td> {$food_assoc["English Breakfast"]}</td>
            <td> $origin[0] </td>
        </tr>
         <tr>
            <td> $food[2] </td>
            <td> {$food_assoc["Beet Salad"]} </td>
            <td> $origin[3] </td>
        </tr>
         <tr>
            <td> $food[3] </td>
            <td>{$food_assoc["Tim Tams"]} </td>
            <td> $origin[2] </td>
        </tr>
    </table>"
?>