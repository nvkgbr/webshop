
<?php
    foreach ($menuItemek as $item) 
    {
       echo "<li class='nav-item'><a class='nav-link' href='".$item['link']."'>".$item['title']."</a></li>";
	}
?>
