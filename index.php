<?php 
	require "config.php";

	$selectPropertiesQuery = "SELECT * FROM properties";
	$selectPropertiesStmt = $pdo->prepare($selectPropertiesQuery);
	$selectPropertiesStmt->execute();
	$result = $selectPropertiesStmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Prisma Residences</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<header>Prisma Residences</header>		
	<nav>
		<a class="navBar-element" href="">HOME</a>
		<a class="navBar-element" href="properties.html">PROPERTIES</a>
		<a class="navBar-element" href="sell_with_us.html">SELL WITH US</a>
		<a class="navBar-element" href="contact_us.html">CONTACT US</a>
		<a class="navBar-element" href="about_us.html">ABOUT US</a>
	</nav>
	<main>
		<div class="hero-image">
			<div class="hero-text">
				<h1>What are you looking for?</h1>	
				<form method="get" action="">
					<label for="property-type">Property type</label>
					<select id="property-type" name="property-type">
						<option value="villa">Villa</option>
						<option value="mansion">Mansion</option>
						<option value="penthouse">Penthouse</option>
					</select>

					<label for="location">Location</label>
					<select id="location" name="location">
						<option value="marbella">Marbella</option>
						<option value="madrid">Madrid</option>
						<option value="costa-del-sol">Costa del Sol</option>
						<option value="mallorca">Mallorca</option>
						<option value="ibiza">Ibiza</option>
					</select>

					<button name="search-btn" type="submit" value="search">Search properties</button>
				</form>
			</div>
		</div>
	<section> 
		<h1>FEATURED PROPERTIES</h1>
		<article>
			<div>
				<?php foreach ($result as $row): ?>
					<figure>
						<img src="" alt="Can't load the image.">
						<figcaption>this is the caption of the image.</figcaption>
					</figure>
					<h3><?=htmlspecialchars($row['title'])?></h3>
					<p>
						<?=htmlspecialchars($row['price'])?>
						<?=htmlspecialchars($row['square_meters'])?>m^2
						<?=htmlspecialchars($row['location'])?>
					</p>
				<?php endforeach; ?>
			</div>
		</article>
	</section>
	</main>
	<footer>
		<p>&copy; 2026 Prisma Residences. Todos los derechos están reservados. 
		</p>
	</footer>
</body>
</html>
