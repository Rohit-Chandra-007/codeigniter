<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome Page</title>

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Poppins', sans-serif;
			background: linear-gradient(to right, #6a11cb, #2575fc);
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			overflow: hidden;
		}

		.welcome-container {
			text-align: center;
			background: rgba(255, 255, 255, 0.9);
			padding: 60px;
			border-radius: 20px;
			box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
			max-width: 600px;
			width: 100%;
			animation: fadeIn 1.5s ease-in-out;
		}

		@keyframes fadeIn {
			0% {
				opacity: 0;
				transform: translateY(-20px);
			}
			100% {
				opacity: 1;
				transform: translateY(0);
			}
		}

		h1 {
			font-size: 3.5em;
			color: #333;
			margin-bottom: 20px;
			font-weight: 600;
		}

		p {
			font-size: 1.3em;
			color: #666;
			margin-bottom: 30px;
			line-height: 1.6;
		}

		.btn {
			text-decoration: none;
			background: #ff6a00;
			color: #fff;
			padding: 15px 30px;
			border-radius: 50px;
			font-weight: 600;
			transition: background 0.4s, transform 0.3s;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
		}

		.btn:hover {
			background: #e55d00;
			transform: translateY(-5px);
			box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
		}
	</style>
</head>
<body>
<div class="welcome-container">
	<h1>Welcome to Our Website!</h1>
	<p>We're thrilled to have you here. Explore, discover, and enjoy your journey with us!</p>
	<a href="#" class="btn">Get Started</a>
</div>
</body>
</html>
