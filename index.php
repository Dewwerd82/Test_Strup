<?php

include 'color.php';
    foreach ($example_color_array as $key => $item){       
            foreach ($item as $keyColor => $color){
                switch ($keyColor){
                    case 'red' :  { echo "<span style=\"color: $keyColor\">$color\t</span>"; break;};
                    case 'green' : { echo "<span style=\"color: $keyColor\">$color\t</span>"; break;};
                    case 'black' : { echo "<span style=\"color: $keyColor\">$color\t</span>"; break;};
                    case 'blue' : { echo "<span style=\"color: $keyColor\">$color\t</span>"; break;};
                    case 'brown' :{  echo "<span style=\"color: $keyColor\">$color\t</span>"; break;};
                    case 'pink' :{  echo "<span style=\"color: $keyColor\">$color\t</span>"; break;};
                    case 'magenta' :{  echo "<span style=\"color: $keyColor\">$color\t</span>"; break;};
                    case 'yellow' : { echo "<span style=\"color: $keyColor\">$color\t</span>"; break;};
                    case 'crimson' : { echo "<span style=\"color: $keyColor\">$color\t</span>"; break;};
                    case 'grey' : { echo "<span style=\"color: $keyColor\">$color\t</span>"; break;};
                }
                // switch ($keyColor){
                //     case 'red' :  { echo "<span style=\"background-color: $keyColor\">$color\t</span>"; break;};
                //     case 'green' : { echo "<span style=\"background-color: $keyColor\">$color\t</span>"; break;};
                //     case 'black' : { echo "<span style=\"background-color: $keyColor\">$color\t</span>"; break;};
                //     case 'blue' : { echo "<span style=\"background-color: $keyColor\">$color\t</span>"; break;};
                //     case 'brown' :{  echo "<span style=\"background-color: $keyColor\">$color\t</span>"; break;};
                //     case 'pink' :{  echo "<span style=\"background-color: $keyColor\">$color\t</span>"; break;};
                //     case 'magenta' :{  echo "<span style=\"background-color: $keyColor\">$color\t</span>"; break;};
                //     case 'yellow' : { echo "<span style=\"background-color: $keyColor\">$color\t</span>"; break;};
                //     case 'crimson' : { echo "<span style=\"background-color: $keyColor\">$color\t</span>"; break;};
                //     case 'grey' : { echo "<span style=\"background-color: $keyColor\">$color\t</span>"; break;};
                // }
               
            }
            echo '<br>';
    }
?>