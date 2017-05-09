<div class="container">

		        <?php foreach($birthdays as $birthday){ ?>

				    <?php
						$Month = null; 
					?>

		        <?php	 	
			        if  ($Month != $months[$birthday["month"]-1]){
			        	$Month = $months[$birthday["month"]-1];
			        	echo '<h1>';echo $months[$birthday["month"]-1]; echo '</h1>';
			        	}
			        ?>

			        	<h2><?= $birthday["day"]; ?></h2>
						<a href="birthday/edit/<?= $birthday["id"]; ?>"><?= $birthday["person"] . " (" . $birthday["year"]; ?>)</a>
		  				<a href="birthday/delete/<?= $birthday["id"]; ?>"> x </a>
			      

				<?php } ?>

				<p><a href="birthday/create">+ toevoegen</a></p>
</div>