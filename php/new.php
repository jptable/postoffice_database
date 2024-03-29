<html>

	<title>新增資料-信件包裹登錄系統</title>

	<head>

		<style type="text/css">
			
			.new_page
			{

				height: 100%;
				width: 100%;
				background: #D0D0D0;
			}

			.new_data
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
				top: 160px;
				left: 20px;

			}

			.mail_type
			{

				width: 190px;
				position: absolute;
				top: 120px;
				left: 20px;
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

			.submit_keyin
			{

				font-family: 標楷體, 微軟正黑體, 新細明體;
			    font-size: 20px;
			    border-radius: 10px;
			    border: 2px solid #00A600;
				-webkit-transition-duration: 0.4s; /* Safari */
    			transition-duration: 0.4s;

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

			.submit_keyin:hover
			{

				background-color: #4CAF50; /* Green */
    			color: white;
			}


		</style>

	</head>


	<body>

		<div class = "new_page">

			<form class = "new_data" action = "new_2.php" method = "post">

				<div class="title">新增郵件</div>

				<div class = "mail_type">
					
					郵件類型：

					<select name ="mail_type">

						<option>平信</option>

						<option>掛號</option>

						<option>包裹</option>

					</select>
							
				</div>

				<div class ="all">
				
					<div class = "class_sender">

						<p>寄件人：<input type = "text" name = sender></p>

						<p>寄件人郵遞區號：<input type = "text" name = "sender_postal_code"></p>

						<p>	寄件人地址：<input type = "text" name = "sender_address"></p>

					</div>
					
					<div class="class_addressee">
						
						<p>收件人：<input type = "text" name = "addressee"></p>

						<p>收件人郵遞區號：<input type = "text" name = "addressee_postal_code"></p>

						<p>收件人地址：<input name = "addressee_address" type = "text"></p>

					</div>

					<div class = "else">
						
						<p>郵資：<input type="text" name="mail_cost"></p>
					
						<p>重量：<input type="text" name="mail_weight"></p>
					
						<p>經手人編號：<input type="text" name="employee_id"></p>

					</div>	

				</div>
				
				<div class = "operate">
					
					<a href = "index.php">

						<input type = "button" class = "to_index" value="取消">

					</a>

					<input type="submit" class="submit_keyin" value = "送出">	

				</div>

			</form>

		</div>

	</body>

</html>