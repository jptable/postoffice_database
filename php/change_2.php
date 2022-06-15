<?php

	include "db.php";

	$mysqli = new mysqli($host, $user, $password, $db);
	
	$mail_id = $_POST['mail_id'];

	// 蒐集 mail_weight, mail_cost
	
	$mail_data_query = $mysqli -> query("SELECT * FROM mail_data WHERE mail_id = '$mail_id'");

	$mail_data_result = $mail_data_query ->  fetch_assoc();

	$sender_id = $mail_data_result["sender_id"];

	$addressee_id = $mail_data_result["addressee_id"];

	$mail_cost = $mail_data_result["mail_cost"];

	$mail_weight = $mail_data_result["mail_weight"];

	// 蒐集收件人資訊

	$sender_query = $mysqli -> query("SELECT * FROM sender WHERE sender_id = $sender_id");

	$sender_result = $sender_query -> fetch_assoc();

	$sender_name = $sender_result["sender_name"];

	$sender_postal_code = $sender_result["postal_code"];

	$sender_address = $sender_result["address"];

	// 蒐集寄件人資訊

	$addressee_query = $mysqli -> query("SELECT * FROM addressee WHERE addressee_id = $addressee_id");

	$addressee_result = $addressee_query ->fetch_assoc();

	$addressee_name = $addressee_result["addressee_name"];

	$addressee_postal_code = $addressee_result["postal_code"];

	$addressee_address = $addressee_result["address"];

	// 蒐集 mail_type

	$type_id = $mail_data_result["mail_type_id"];

	$mail_type_query = $mysqli -> query("SELECT * FROM mail_type WHERE type_id = $type_id");

	$mail_type_result = $mail_type_query -> fetch_assoc();

	$mail_type = $mail_type_result["type"];
	
?>

<html>

	<title>修改資料-信件包裹登錄系統</title>

	<head>
		
		<style type="text/css">
		
			.change_page
			{
				height: 100%;
				width: 100%;
				background: #D0D0D0;
			}

			.change_page_2
			{
				position: absolute;
				margin-top: 40px;
				height: 500px;
				width: 1000px;
				left: 50%;
				top: 50%;
				transform: translate(-50%, -50%);
				border: 3px solid #00A600;
				-webkit-transition-duration: 0.4s; /* Safari */
    			transition-duration: 0.4s;
    			border-radius: 14px;
    			background: #73BF00;
			}


			.title_2
			{
				margin-top: 120px;
				margin-left: 35px;
				font-family: 標楷體, 微軟正黑體, 新細明體;
			}

			.title
			{

				position: absolute;
				top: 20px;
				width: auto;
				left: 20px;
				font-size: 60px;
				font-family: 標楷體, 微軟正黑體, 新細明體;
				
			}


			form
			{

				font-family: 標楷體, 微軟正黑體, 新細明體;
			    font-size: 20px;
			    position: absolute;
			    bottom: 100px;
			}

			.all
			{

				display: inline-flex;
				position: absolute;
				top: 200px;
				left: 35px;

			}

			.mail_type
			{

				width: 190px;
				position: absolute;
				top: -30px;
				left: 0px;
			}

			input
			{
				display: flex;
				justify-content: end;
				margin-right: 50px;
			}

			.operate
			{

				width: 90px;
    			display: flex;
    			justify-content: between;
    			position: absolute;
    			bottom: 20px;
    			right: 100px;
			}


			.operate
			{

				width: 90px;
    			display: flex;
    			justify-content: between;
    			position: absolute;
    			right: 160px;
    			bottom: 20px;
			}

			.btn
			{

				font-family: 標楷體, 微軟正黑體, 新細明體;
			    font-size: 20px;
			    margin-left: 5px;
			    border-radius: 10px;
			    border: 2px solid #00A600;
				-webkit-transition-duration: 0.4s; /* Safari */
    			transition-duration: 0.4s;
    			margin-right: 0px;
			}

			.btn:hover
			{

				background-color: #4CAF50; /* Green *//*
    			color: white;
			}
			

		</style>

	</head>

	<body>

		<div class = "change_page">
			
			<form class = "change_page_2" action = "change_3.php" method="post">

				<div class="title_block">

					<div class = "title">更新資料</div>

					<div class = "title_2">郵件編號：<?php echo $mail_id ?></div>

				</div>

				<div class = "all">

					<input style = "display: none" type="text" name="mail_id" value = <?php echo $mail_id ?>>

					<div class="mail_type">

						郵件類型 :

							<select name = "mail_type">

								<option selected = selected><?php echo $mail_type ?></option>

								<option>平信</option>

								<option>掛號</option>

								<option>包裹</option>

							</select>

					</div>

					<div>

						<p>寄件人：

							<input type="text" name="sender" value="<?php echo $sender_name ?>">
						</p>

						<p>寄件人郵遞區號：

							<input type="text" name="sender_postal_code" value="<?php echo $sender_postal_code ?> ">

						</p>

						<p>寄件人地址：

							<input type="text" name="sender_address" value="<?php echo $sender_address ?>">

						</p>

					</div>

					<div>

						<p>收件人：

							<input type="text" name="addressee" value="<?php echo $addressee_name ?>">

						</p>

						<p>收件人郵遞區號：

							<input type="text" name="addressee_postal_code" value="<?php echo $addressee_postal_code ?>">

						</p>

						<p>收件人地址：

							<input type="text" name="addressee_address" value="<?php echo $addressee_address ?> ">

						</p>

					</div>

					<div>

						<p>郵資：

							<input type="text" name="mail_cost" value="<?php echo $mail_cost ?>">

						</p>

						<p>重量：

							<input type="text" name="mail_weight" value="<?php echo $mail_weight ?> ">

						</p>

					</div>

				</div>

				<div class="operate">
				
					<a href = "index.php">

						<input type="button" class="btn" value = "回首頁">

					</a>


					<a href = "change.php">

						<input type="button" class = "btn" value = "前一頁">

					</a>

					<input type="submit" class = "btn" value ="送出">
					
				</div>

			</form>

		</div>
		
	</body>

</html>