<?php

	include 'db.php';

// 獲得 new.php 的新增資料

	$mysqli = new mysqli($host, $user, $password, $db);

	$mail_type = $_POST['mail_type'];

	$sender = $_POST['sender'];

	$sender_postal_code = $_POST['sender_postal_code'];

	$sender_address = $_POST['sender_address'];

	$addressee = $_POST['addressee'];

	$addressee_postal_code = $_POST['addressee_postal_code'];

	$addressee_address = $_POST['addressee_address'];

	$mail_cost = $_POST['mail_cost'];

	$mail_weight = $_POST['mail_weight'];

	$employee_id = $_POST['employee_id'];

// 將資料放入資料庫

	// 這邊先將蒐集到的 mail_type 轉成 mail_type_id
	
	$mail_type_query = $mysqli -> query("SELECT * FROM mail_type where type = '$mail_type'");

	$mail_type_query_result = $mail_type_query ->  fetch_assoc();

	$mail_type = $mail_type_query_result['type_id'];//覆蓋原本的 $mail_type

	// 輸入寄件人資料，並取出 sender_id

	$mysqli -> query("INSERT INTO sender(sender_name, postal_code, address) VALUES ('$sender', '$sender_postal_code', '$sender_address')");

	$sender_query = $mysqli -> query("SELECT * FROM sender WHERE sender_name = '$sender' AND postal_code = '$sender_postal_code' AND address = '$sender_address'");

	$sender_query_result = $sender_query -> fetch_assoc();

	$sender = $sender_query_result['sender_id']; //覆蓋原本的 $sender

	// 輸入收件人資料，並取出 addressee_id

	$mysqli -> query("INSERT INTO addressee(addressee_name, postal_code, address) VALUES ('$addressee', '$addressee_postal_code', '$addressee_address')");

	$addressee_query = $mysqli -> query("SELECT * FROM addressee WHERE addressee_name = '$addressee' AND postal_code = $addressee_postal_code AND address = '$addressee_address'");

	$addressee_query_result = $addressee_query -> fetch_assoc();

	$addressee = $addressee_query_result['addressee_id'];//覆蓋原本的 $addressee


	// 將所有上述的資料填入 mail_data

	$mysqli -> query("INSERT INTO mail_data(mail_type_id, sender_id, addressee_id, mail_weight, mail_cost, employee_id) VALUES ($mail_type, $sender, $addressee, $mail_weight, $mail_cost, $employee_id)");
	
// 新增後，顯示產生的流水號

	$result_query = $mysqli -> query("SELECT * FROM mail_data WHERE addressee_id = $addressee AND sender_id = $sender AND mail_type_id = $mail_type AND mail_weight = $mail_weight AND mail_cost = $mail_cost AND $employee_id = $employee_id");

	$result = $result_query -> fetch_assoc();
	
?>


<html>

	<title>新增資料-信件包裹登錄系統</title>

	<head>
		
		<style type="text/css">
			
			.new_page_2
			{
				height: 100%;
				width: 100%;
				background: #D0D0D0;
			}

			.new_page_3
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

		<div class = new_page_2>

			<div class="new_page_3">

				<div class = "text">

					<p>新增成功！</p>

					<p>您的郵件編號為：<?php echo $result['mail_id']; ?>

				</div>

				<div class = operate>

					<a href = "index.php">
						
						<input type="button" class="to_index" value = "回首頁">

					</a>

				</div>

			</div>

		</div>
		
	</body>
	
</html>

