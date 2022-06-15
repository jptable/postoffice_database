<?php

	// 先做一次一筆，有空再做批量處理

	include 'db.php';

	$mysqli = new mysqli($host, $user, $password, $db);

	$mail_id = $_POST['keyin_mail_id'];


	// 搜尋郵件類型

	// JOIN mail_data & mail_type table

	$mail_type = $mysqli -> query("SELECT * FROM mail_data JOIN mail_type ON mail_type_id = type_id WHERE mail_id = $mail_id");

	$mail_type_result = $mail_type -> fetch_assoc();


	// 搜尋寄件人、地址、郵遞區號
	// JOIN mail_data & sender table

	$sender = $mysqli -> query("SELECT * FROM mail_data JOIN sender ON mail_data.sender_id = sender.sender_id WHERE mail_id = $mail_id");

	$sender_result = $sender -> fetch_assoc();


	// 搜尋收件人、郵遞區號、地址
	// JOIN mail_data & addressee table

	$addressee = $mysqli -> query("SELECT * FROM mail_data JOIN addressee ON mail_data.addressee_id = addressee.addressee_id WHERE mail_id = $mail_id");

	$addressee_result = $addressee -> fetch_assoc();


	// 搜尋重量、郵資

	$weight = $mysqli -> query("SELECT * FROM mail_data WHERE mail_id = $mail_id");

	$weight_result = $weight -> fetch_assoc();


	// 搜尋經手人員編號、名字
	// JOIN mail_data & employee table

	$employee = $mysqli -> query("SELECT * FROM mail_data JOIN employee ON mail_data.employee_id = employee.employee_id WHERE mail_id = $mail_id");

	$employee_result = $employee -> fetch_assoc();


?>


<html>

	<title>查詢資料-信件包裹登錄系統</title>

	<head>
		
		<style type="text/css">
			
			.query_page_2{

				height: 100%;
				width: 100%;
				background: #D0D0D0;

			}

			.query_page_3{

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

			.operate{

				width: 90px;
    			display: flex;
    			justify-content: between;
    			position: absolute;
    			bottom: 20px;
    			right: 100px;
			}

			.query_again{

				font-family: 標楷體, 微軟正黑體, 新細明體;
			    font-size: 20px;
			    border-radius: 10px;
			    border: 2px solid #00A600;
				-webkit-transition-duration: 0.4s; /* Safari */
    			transition-duration: 0.4s;

			}

			.to_index{

				font-family: 標楷體, 微軟正黑體, 新細明體;
			    font-size: 20px;
			    margin-left: 5px;
			    border-radius: 10px;
			    border: 2px solid #00A600;
				-webkit-transition-duration: 0.4s; /* Safari */
    			transition-duration: 0.4s;
			}

			.to_index:hover{

				background-color: #4CAF50; /* Green */
    			color: white;
			}

			.query_again:hover{

				background-color: #4CAF50; /* Green */
    			color: white;
			}

			table 
			{
			  border: 0;
			  border-collapse: collapse;
			  border-radius: 8px;
			  margin-top: 100px;
			  width: 100%;
			}

			th 

			{
			  border: solid 1px #FFF;
			  padding: 20px 8px;
			}

			tr 
			{
			  border: solid 1px #FFF;
			  text-align: center;
			  color: #000;
			}

			.title{
				font-family: 標楷體, 微軟正黑體, 新細明體;
			    font-size: 20px;
			    margin-left: 10px;
			}

		</style>

	</head>

	<body>

		<div class = "query_page_2">

			<div class="query_page_3">

				<div class = "title">
					
					<p>郵件編號：<?php echo $mail_id ?></p>

				</div>

				<table name = query_title>

					<tr>

						<th>郵件類型</th>

						<th>寄件人</th>

						<th>寄件人地址</th>

						<th>收件人</th>

						<th>收件人地址</th>

						<th>重量</th>

						<th>郵資</th>

						<th>經手人員</th>

						<th>人員編號</th>

					</tr>

					<!--這行要 merge -->

					<tr>

						<th><?php echo $mail_type_result['type']; ?></th>

						<th><?php echo $sender_result['sender_name']; ?></th>

						<th>

							<?php 

								echo $sender_result['postal_code'];

								echo " ";

								echo $sender_result['address'];

							?>

						</th>

						<th><?php echo $addressee_result['addressee_name'];?>
							
						</th>

						<th>

							<?php 

								echo $addressee_result['postal_code'];

								echo " ";

								echo $addressee_result['address'];

							?>

						</th>

						<th><?php echo $weight_result['mail_weight']; ?> 公克</th>

						<th><?php echo $weight_result['mail_cost']; ?> 元</th>

						<th><?php echo $employee_result['employee_name'];?></th>

						<th><?php echo $employee_result['employee_id']; ?></th>

					</tr>

				</table>
				

				<div class = operate>

					<a href = "query.php"><input class = "query_again" type = "button" value="重新查詢"></a>

					<a href = "index.php"><input class ="to_index" type="button" value="回首頁"></a>

				</div>

				
			</div>

			
		</div>

	</body>

</html>

