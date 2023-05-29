<?php

	// 跟 new 一樣拉出剛剛修改的東西
	// 沒成功跟成功都要說

	// 取得資料庫連結

	include "db.php";

	$mysqli = new mysqli($host, $user, $password, $db);

	$mail_id = $_POST['mail_id'];

	// 獲得 change_2.php 的待修改資料

	$mail_type = $_POST['mail_type'];

	$sender = $_POST['sender'];

	$sender_postal_code = $_POST['sender_postal_code'];

	$sender_address = $_POST['sender_address'];

	$addressee = $_POST['addressee'];

	$addressee_postal_code = $_POST['addressee_postal_code'];

	$addressee_address = $_POST['addressee_address'];

	$mail_cost = $_POST['mail_cost'];

	$mail_weight = $_POST['mail_weight'];


	// 將新資料放入資料庫

	// 這邊先將蒐集到的 mail_type 轉成 mail_type_id
	
	
	$mail_type_query = $mysqli -> query("SELECT * FROM mail_type where type = '$mail_type'");

	$mail_type_query_result = $mail_type_query ->  fetch_assoc();

	$mail_type = $mail_type_query_result['type_id'];

	

	// 新的 mail_type 

	$mail_data_change = $mysqli -> query("UPDATE mail_data SET mail_type_id = $mail_type, mail_weight = $mail_weight, mail_cost = $mail_cost WHERE mail_id = $mail_id");

	// 找到原本的 sender 資料的 sender_id

	$sender_query = $mysqli -> query("SELECT * FROM sender JOIN mail_data ON mail_id = $mail_id");

	$sender_result = $sender_query -> fetch_assoc();

	$sender_id_old = $sender_result['sender_id'];

	// 新的 sender 資料

	$sender_change = $mysqli -> query("UPDATE sender SET sender_name = '$sender', postal_code = $sender_postal_code, address = '$sender_address' WHERE sender_id = $sender_id_old");

	// 找到原本的 addressee 資料的 addressee_id

	$addressee_query = $mysqli -> query("SELECT * FROM addressee JOIN mail_data ON mail_id = $mail_id");

	$addressee_result = $addressee_query -> fetch_assoc();

	$addressee_id_old = $addressee_result['addressee_id'];

	// 新的 addressee 資料

	$addressee_change = $mysqli -> query("UPDATE addressee SET addressee_name = '$addressee', postal_code = $addressee_postal_code, address = '$addressee_address' WHERE addressee_id = $addressee_id_old");


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

			.operate
			{

				width: 90px;
    			display: flex;
    			justify-content: between;
    			position: absolute;
    			bottom: 20px;
    			right: 20px;
			}

			.to_index
			{

				font-family: 標楷體, 微軟正黑體, 新細明體;
			    font-size: 20px;
			    margin-left: 5px;
			    border-radius: 10px;
			    border: 2px solid #00A600;
				-webkit-transition-duration: 0.4s; /* Safari */
    			transition-duration: 0.4s;
			}

			.to_index:hover
			{

				background-color: #4CAF50; /* Green */
    			color: white;
			}

			.text
			{
				position: absolute;
				width: auto;
				height: 30px;
			    left: 50px;
			    top: 170px;
			    font-family: 標楷體, 微軟正黑體, 新細明體;
			    font-size: 30px;
			}

		</style>

	</head>

	<body>

		<div class = "change_page">

			<div class="change_page_2">

				<div class = "text">

					<p>修改成功！</p>

				</div>
				
				<div class = "operate">

					<a href = "index.php">

						<input type="button" class = "to_index" value="回首頁">

					</a>

				</div>

			</div>

		</div>

	</body>

</html>