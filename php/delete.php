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

			.title
			{

				position: absolute;
				top: 20px;
				width: auto;
				left: 20px;
				font-size: 60px;
				font-family: 標楷體, 微軟正黑體, 新細明體;
				
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

			.operate
			{

				width: 90px;
    			display: flex;
    			justify-content: between;
    			position: absolute;
    			bottom: 20px;
    			right: 50px;
			}

			.delete_submit
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

			.delete_submit:hover
			{

				background-color: #4CAF50; /* Green */
    			color: white;
			}

		</style>

	</head>


	<body>

		<div class = "delete_page">

			<div class = "delete_page_2">

				<div class="title">刪除郵件</div>
					
				<form name = "delete_form" action = "delete_2.php" method="post">

					<div class="text">
						
						<p>要刪除的郵件代碼：<input type="text" name="delete_mail_id"></p>

					</div>

					<div class = operate>

						<a href="index.php">

							<input type="button" class="to_index" value = "取消">

						</a>

						<input type="submit" class="delete_submit" value="刪除">

					</div>
						
				</form>		

			</div>			
	
		</div>

	</body>

</html>