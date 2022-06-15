<?php 
	
	include("db.php");

	$mysqli = new mysqli($host, $user, $password, $db);

	$delete_mail_id = $_POST['delete_mail_id'];

	$delete_mail_id_query = $mysqli -> query("SELECT * FROM mail_data WHERE mail_id = $delete_mail_id");

	$delete_mail_id_result = $delete_mail_id_query -> fetch_assoc();


	$sender_id = $delete_mail_id_result['sender_id'];

	$addressee_id = $delete_mail_id_result['addressee_id'];

	$delete_sender = $mysqli -> query("DELETE FROM `sender` WHERE sender_id = $sender_id");

	$delete_addressee = $mysqli -> query("DELETE FROM addressee WHERE addressee_id = $addressee_id");

	$delete_mail_data = $mysqli -> query("DELETE FROM mail_data WHERE mail_id = $delete_mail_id");

?>

<html>

	<title>刪除資料-信件包裹登錄系統</title>

	<head>
		
		<style type="text/css">
			
			.delete_page
			{
				height: 100%;
				width: 100%;
				background: #D0D0D0;
			}

			.delete_page_2
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

		<div class="delete_page">
			
			<div class = "delete_page_2">

				<div class="text">刪除成功！</div>
				
				<div class="operate">
				
					<a href="index.php">
				
						<input type = "button" class = "to_index" value="回首頁">

					</a>		

				</div>

			</div>			
			
		</div>		

	</body>

</html>