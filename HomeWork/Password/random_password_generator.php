<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <title>Password Generator</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body {
            margin-top: 50px;
        }
    </style>
<body>
	<div class="container">
		<h1>Random Password Generator</h1>
		<form method="post">
			<label for="length">Input Password Size:</label>
			<input type="number" name="len" id="length" min="1" max="20" value="8" required>
			<button type="submit">Password</button>
		</form>
		
        
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$length = $_POST["len"];
			$password = generate_password($length);
			echo "<p>Your random password is: {$password}</p>";
		}

		function generate_password($length) {
		    $character = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
		    $numChar = strlen($character);
		    $password = "";
		    for ($i = 0; $i < $length; $i++) {
		        $password .= $character[rand(0, $numChar - 1)];
		    }
		    return $password;
		}
		?>
	</div>
</body>
</html>