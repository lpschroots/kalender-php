<div class="container">
			<li><a href="<?= URL ?>home/index">Home</a></li>
				<h1>Edit birthday</h1>

			<form action="<?= URL ?>birthday/editSave" method="post">
			
				<input type="text" name="person" value="<?= $birthday['person']; ?>">
				<input type="text" name="day" value="<?= $birthday['day']; ?>">
				<input type="text" name="month" value="<?= $birthday['month']; ?>">
				<input type="text" name="year" value="<?= $birthday['year']; ?>">


				<input type="hidden" name="id" value="<?= $birthday['id']; ?>">
				<input type="submit" value="Verzenden">
			
			</form>

</div>
