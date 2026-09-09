<?php 
	require "config.php";
	$id = htmlspecialchars($_GET['id']); 
	echo $id; 
	$selectPropertyQuery = "SELECT * FROM properties WHERE id = :id";
	$selectPropertyStmt = $pdo->prepare($selectPropertyQuery);
	$selectPropertyStmt->execute([":id" => $id]);
	$result = $selectPropertyStmt->fetch(PDO::FETCH_ASSOC);
	//Show the property image
	$selectImageQuery = "SELECT * FROM property_images WHERE id = :id";
	$selectImageStmt = $pdo->prepare($selectImageQuery);
	$selectImageStmt->execute([":id" => $id]);
	$image = $selectImageStmt->fetch(PDO::FETCH_ASSOC);
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
		<a class="navBar-element" href="index.php">HOME</a>
		<a class="navBar-element" href="properties.php">PROPERTIES</a>
		<a class="navBar-element" href="sell_with_us.html">SELL WITH US</a>
        <a class="navBar-element" href="contact_us.html">CONTACT US</a>
		<a class="navBar-element" href="about_us.html">ABOUT US</a>
	</nav>
	<main>
	<section> 
		<article class="house-story">
			<h2><?=htmlspecialchars($result['title'])?></h2>
			<img src="<?=htmlspecialchars($image['image_url'])?>" style="height: 400; weight: 800;" alt="Can't load the image.">
			<p>Here we write the story of the house. The beautiful views it has, the experience the client can have when they buy it, etc.</p>
		</article>
		<article class="house-details">
			<h3>Property details</h3>
			<ul>
				<li>Location: <?=htmlspecialchars($result['location'])?></li>
				<li>Price: <?=htmlspecialchars($result['price'])?></</li>
				<li>Square meters: <?=htmlspecialchars($result['square_meters'])?></</li>
				<li>Number of rooms: <?=htmlspecialchars($result['number_of_rooms'])?></</li>
				<li>Bathrooms: <?=htmlspecialchars($result['number_of_bathrooms'])?></</li>
				<li>Property condition: <?=htmlspecialchars($result['property_condition'])?></</li>
				<li>Year of construction: <?=htmlspecialchars($result['year_of_construction'])?></</li>
				<li>Other details: <?=htmlspecialchars($result['other_details'])?></</li>
			</ul>
		</article>
	</section>
    <section>
        <form method="post" action="">
            <h1>CONTACT US</h1>
            <h2>Interested in this property?</h2>
            <p>Leave your details below, and our local property experts will contact you within 24h.</p>
            <label for="name">Name</label>
            <input type="text" id="name" value="name" name="name" required>
            <label for="lastname">Lastname</label>
            <input type="text" id="lastname" value="lastname" name="lastname">
            <label type="email" for="email">Email</label>
            <input id="email" value="email" name="email" required>
            <label type="text" for="phone-number">Phone number</label>
            <input id="phone-number" value="phone-number" name="phone-number">
            <label for="message">Message</label>
            <textarea id="message" value="message" name="message" placeholder="I want to schedule a meeting..."></textarea>
            <input type="submit" value="Submit">
        </form>
    </section>
	</main>
	<footer>
		<p>&copy; 2026 Prisma Residences. Todos los derechos están reservados. 
		</p>
	</footer>
</body>
</html>
