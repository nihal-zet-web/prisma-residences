<?php
    require "../config.php";
    $email = htmlspecialchars($_POST['admin-email']);
    //Change Email for password when starting to connect ajax 
    //Pass the id selecting the admin's email
    //will change this to use the password instead of email when every password is different
    $selectQuery = "SELECT id FROM owners WHERE email = :email";
    $selectStmt = $pdo->prepare($selectQuery);
    $selectStmt->execute([":email" => $email]);
    $result = $selectStmt->fetch(PDO::FETCH_ASSOC);
    $id = $result['id'];
    //If theres an id related to the email, open the homepage, not sure if ill keep this since it may be better to use javascript
    if ($id) {
        header("Location: index.php?id=".$id); 

    }
    //echo $id;
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

        <main>
            <form method="post" action="">
                <h1>LOG IN</h1>

                <label for="admin-email">Email</label>
                <input type="email" id="admin-email" value="admin-email" name="admin-email" required>
                
                <label for="password">Password</label>
                <input type="text" id="password" value="password" name="password" required>
                
                <input type="submit" value="Submit">
            </form>

        </main>
    </body>

    <footer>
		<p>&copy; 2026 Prisma Residences. Todos los derechos están reservados. 
		</p>
	</footer>
    
</html>