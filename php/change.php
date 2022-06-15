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

			.title
			{

				position: absolute;
				top: 20px;
				width: auto;
				left: 20px;
				font-size: 60px;
				font-family: 標楷體, 微軟正黑體, 新細明體;
				
			}

			.operate
			{

				width: 90px;
    			display: flex;
    			justify-content: between;
    			position: absolute;
    			bottom: 20px;
    			right: 50px;
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

			.change_submit
			{

				font-family: 標楷體, 微軟正黑體, 新細明體;
			    font-size: 20px;
			    margin-left: 5px;
			    border-radius: 10px;
			    border: 2px solid #00A600;
				-webkit-transition-duration: 0.4s; /* Safari */
    			transition-duration: 0.4s;
			}

			.change_submit:hover
			{
				background-color: #4CAF50; /* Green */
    			color: white;
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

				<div class="title">修改資料</div>
					
				<form name = "change_form" action = "change_2.php" method = "post">

					<div class="text">
						
						<p>要修改的郵件編號：<input type="text" name="mail_id"></p>

					</div>

					<div class = "operate">

						<a href="index.php">

							<input type="button" class = "to_index" value="取消">

						</a>

						<input type="submit" class = "change_submit" value="確認">

					</div>

				</form>

			</div>

		</div>

	</body>

</html>