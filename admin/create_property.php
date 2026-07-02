<?php 
    require "config.php";
    if ($_GET) {
        $title = htmlspecialchars($_GET['title']);
        $price = htmlspecialchars($_GET['price']);
        $squareMeters = htmlspecialchars($_GET['square_meters']);
        $numberOfRooms = htmlspecialchars($_GET['number_of_rooms']);
        $numberOfBathrooms = htmlspecialchars($_GET['number_of_bathrooms']);
        $otherDetails = htmlspecialchars($_GET['other_details']);
        $propertyCondition = htmlspecialchars($_GET['property_condition']);
        $yearOfConstruction = htmlspecialchars($_GET['year_of_construction']);
        $location = htmlspecialchars($_GET['location']);

        $insertQuery = "INSERT INTO properties (title, price, square_meters, number_of_rooms, number_of_bathrooms, other_details, property_condition, year_of_construction, location) VALUES ($title, $price, $squareMeters, $numberOfRooms, $numberOfBathrooms, $otherDetails, $propertyCondition, $yearOfConstruction, $location)";
        $insertStmt = $pdo->prepare($insertQuery);
        $insertStmt->execute();
        echo "row added correctly";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <title>Prisma Residences | Admin</title>
	    <link rel="stylesheet" href="styles.css">
    </head>

    <body>

        <header>
            <h1>Prisma Residences</h1>
        </header>

        <nav>
            <h4>ADMIN</h4>
            <ul>
                <li><a class="navBar-element" href="properties.html">PROPERTIES</a></li>
                <li><a class="navBar-element" href="contacts.html">CONTACTS</a></li>
                <li><a class="navBar-element" href="">CREATE</a></li>
            </ul>
        </nav>

        <main>
            <form method="get" action="">
                <h1>CREATE A NEW PROPERTY</h1>

                <label for="title">Title</label>
                <input type="text" id="title" value="title" name="title" required>

                <label for="price">Price</label>
                <input type="text" id="price" value="price" name="price" required>
                
                <label for="sqm">Square meters</label>
                <input type="text" id="sqm" value="sqm" name="sqm" required>
                
                <label for="rooms">Number of rooms</label>
                <input type="text" id="rooms" value="rooms" name="rooms" required>
                
                <label for="bathrooms">Bathrooms</label>
                <input type="text" id="bathrooms" value="bathrooms" name="bathrooms" required>

                <label for="other-details">Other Details</label>
                <input type="text" id="other-details" value="other-details" name="other-details">
                
                <label for="property-condition">Property condition</label>
                <input type="text" id="property-condition" value="property-condition" name="property-condition" required>
                
                <label for="year">Year of construction</label>
                <input type="text" id="year" value="year" name="year" required>

                <label for="location">Location</label>
                <input type="text" id="location" value="location" name="location" required>
                
                <input type="submit" value="Submit">
            </form>

        </main>
    </body>

    <footer>
		<p>&copy; 2026 Prisma Residences. Todos los derechos están reservados. 
		</p>
	</footer>
    
</html>