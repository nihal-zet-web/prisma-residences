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
		<a class="navBar-element" href="index.php">HOME</a>
		<a class="navBar-element" href="properties.php">PROPERTIES</a>
		<a class="navBar-element" href="sell_with_us.html">SELL WITH US</a>
        <a class="navBar-element" href="contact_us.html">CONTACT US</a>
		<a class="navBar-element" href="about_us.html">ABOUT US</a>
	</nav>
	<main>
	<section> 
		<article class="house-story">
			<h2>This is a property title</h2>
  			<img src="" alt="Can't load the image.">
            <p>Here we write the story of the house. The beautiful views it has, the experience the client can have when they buy it, etc.</p>
		</article>
		<article class="house-details">
			<h3>Property details</h3>
            <ul>
                <li>Location: </li>
                <li>Price: </li>
                <li>Square meters: </li>
                <li>Number of rooms: </li>
                <li>Bathrooms: </li>
                <li>Property condition: </li>
                <li>Year of construction: </li>
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
