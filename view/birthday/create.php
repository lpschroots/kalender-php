<div class="container">
	<li><a href="<?= URL ?>home/index">Home</a></li>
		<h1>Create birthday</h1>
			<form action="<?= URL ?>birthday/createSave" method="post">
			
				<input type="text" name="person" placeholder="Adje">
				<input type="text" name="day" placeholder="Dag">
				<input type="text" name="month" placeholder="Maand">
				<input type="text" name="year" placeholder="Jaar">

				<input type="submit" value="Verzenden">
			
			</form>

</div>