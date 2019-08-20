<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tax Traders - Exercise</title>

	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 40px;
			font: 15px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		#container {
			padding: 20px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: bold;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		input[type=number] {
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
			font-size: 15px;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 6px;
			border-radius: 4px;
			cursor: pointer;
			font-size: 15px;
		}

		.result {
			padding: 10px 0;
			font-size: 15px;
		}

	</style>
</head>
<body>
<h1>Tax Traders - Exercise</h1>
<div id="container">
	<form method="post">
		<?php echo validation_errors(); ?>
		<?php echo form_open('form'); ?>
		<label for="number">Enter a number : </label>
		<input type="number" name="number" required="true" min="1" value="<?php echo $number; ?>"/>
		<div class="form-buttons">
			<input type="submit" name="odd-sum" value="Calculate Odd Index Sum"/>
			<input type="submit" name="even-sum" value="Calculate Even Index Sum"/>
			<input type="submit" name="sum" value="Calculate Sum"/>
		</div>
	</form>
	<div class="result">The sum is : <?php echo $sum; ?></div>
</body>
</html>
