<?php
session_start();
ob_start();
include "configFile.php";
if (! ($_SESSION['logged_in']))
{
	echo "<script> 
	alert('You are not logged in, please connect');
	window.location = 'index.php';
	</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Date For Love</title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="includes/style.css">
	<script src="includes/jquery-1.11.3.min.js"></script>
	<script src="includes/script.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1"> 
</head>
<body>
    <div id="wrapper">
    	<header>
			<a href="home.php" id="logo" alt="logo" title="logo" /></a>
			<section id="user">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<p><?php $_SESSION['Mail']; print_r($_SESSION['Mail']);?> |
				<a href="index.php" onclick=Logout();>
				<?php
				
				echo "<script> 
				    function Logout () {				    	
				        alert('logged out');
				        window.location = 'index.php';
				    }
				</script>";
				?>
				Log Out</a></p>
		     </section>
            <ul class="nav nav-tabs">
                <li class="active"><a href="home.php">Home</a></li>
                <li>
                <li><a href="message.php">Send a message</a></li>
                <li><a href="inbox.php">Inbox</a></li>
	      </ul>
	    </header>
        <main> 
	    <?php
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
					$sql = "INSERT INTO message (name, fromemail, toemail,content)

					VALUES ('".$_POST["name"]."', '".$_POST["fromemail"]."', '".$_POST["toemail"]."','".$_POST["content"]."')";
					if ($conn->query($sql) === TRUE) {
						echo "New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;

					}
				?> 
	    </main>
         <div class="clear"></div>
     </div>
	    <footer>			
	    </footer>
        <script>
            (function() {
	
                })();
        </script>
    </body>
</html>