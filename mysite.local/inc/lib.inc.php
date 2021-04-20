<?php
function drawTable ($cols = 9, $rows = 9, $background = 'teal') {
	echo "<table border = '2' width='600' text-align:center>";
	for ($tr = 1; $tr <= $rows; $tr++) { 
	    echo "<tr>"; 
	        for ($td = 1; $td <= $cols; $td++) { 
	            if ($tr == 1 || $td == 1) {
	               echo "<th style = 'background : {$background}'>" . $tr * $td . "</th>"; 
	            } else
	            echo "<td>" . $tr * $td . "</td>"; 
	        	}
	        }
	    echo "</tr>";
	 echo "</table>";
	}
	
?>

<?php
function drawMenu($menu, $vertical=true){
  $style='';
    if(!$vertical){$style = "";}
      echo "<ul style='list-style-type:none'>";
      foreach($menu as $link=>$href){
        echo "<li$style><a href='$href'>$link</a></li>";
      }
      echo "</ul>";
  }
?>