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
		<a class="navBar-element" href="index.html">HOME</a>
		<a class="navBar-element" href="">PROPERTIES</a>
		<a class="navBar-element" href="sell_with_us.html">SELL WITH US</a>
		<a class="navBar-element" href="contact_us.html">CONTACT US</a>
		<a class="navBar-element" href="about_us.html">ABOUT US</a>
	</nav>
	<main>
		
		<h1>ALL PROPERTIES AVAILABLE</h1>
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
						<?=htmlspecialchars($row['square_meters'])?>m<sup>2</sup>
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
