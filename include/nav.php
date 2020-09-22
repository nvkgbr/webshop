<ul>
	<?php
        foreach ($menuItemek as $item) 
        {
            echo "<li><a href='".$item['link']."'>".$item['title']."</a></li>";
		}
	?>
</ul>