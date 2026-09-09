<?php 
    require "../config.php";
    $id = $_GET['id']; 
    echo $id; 
    $selectAdminPropertiesQuery = "SELECT * FROM properties WHERE owner_id = :id";
    $selectAdminPropertiesStmt = $pdo->prepare($selectAdminPropertiesQuery);
    $selectAdminPropertiesStmt->execute([":id" => $id]);
    $adminProperties = $selectAdminPropertiesStmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($adminProperties);
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
                <li><a class="navBar-element" href="">PROPERTIES</a></li>
                <li><a class="navBar-element" href="contacts.html">CONTACTS</a></li>
                <li><a class="navBar-element" href="create_property.html">CREATE</a></li>
            </ul>
        </nav>
        <main>
            <h2>Manage Properties</h2>
            <table class="admins-properties">
                <tr>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Square meters</th>
                    <th>Number of rooms</th>
                    <th>Bathrooms</th>
                    <th>Property conditions</th>
                    <th>Year of construction</th>
                    <th>Other details</th>
                </tr>
                <tr>
                   <?php foreach ($adminProperties as $adminProperty): ?>
                        <td><?=htmlspecialchars($adminProperty['title'])?></td>
                        <td><?=htmlspecialchars($adminProperty['location'])?></td>
                        <td><?=htmlspecialchars($adminProperty['price'])?></td>
                        <td><?=htmlspecialchars($adminProperty['square_meters'])?></td>
                        <td><?=htmlspecialchars($adminProperty['number_of_rooms'])?></td>
                        <td><?=htmlspecialchars($adminProperty['number_of_bathrooms'])?></td>
                        <td><?=htmlspecialchars($adminProperty['property_condition'])?></td>
                        <td><?=htmlspecialchars($adminProperty['year_of_construction'])?></td>
                        <td><?=htmlspecialchars($adminProperty['other_details'])?></td>
                        <td><button type="button">Edit</button></td>
                        <td><button type="button">Delete</button></td>
                    <?php endforeach; ?>
                </tr>
            </table>
        </main>
    </body>
    <footer>
		<p>&copy; 2026 Prisma Residences. Todos los derechos están reservados. 
		</p>
	</footer>
</html>