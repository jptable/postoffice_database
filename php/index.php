<html>

	<title>首頁-信件包裹登錄系統</title>

	<head>

		<style type="text/css">
		
			.mainPage{
				height: 100%;
				width: 100%;
				background: #D0D0D0;
			}

			.banner{
				display: flex;
				justify-content: center;
				height: auto;
				width: auto;
				color: #007500;
				font-size: 50px;
				font-weight: bolder;
				font-family: 標楷體, 微軟正黑體, 新細明體;
			}

			.select_part{

				position: absolute;
				margin-top: 40px;
				height: 400px;
				width: 600px;
				left: 50%;
				top: 50%;
				transform: translate(-50%, -50%);
				
			}

			.btn_query{

				height: 180px;
				width: 280px;
				position: absolute;
				top: 0px;
				left: 0px;
				margin: 10px;
				font-size: 50px;
				font-family: 標楷體, 微軟正黑體, 新細明體;
				border-radius: 14px;
				border: 3px solid #00A600;
				-webkit-transition-duration: 0.4s; /* Safari */
    			transition-duration: 0.4s;

			}

			.btn_new{

				height: 180px;
				width: 280px;
				position: absolute;
				top: 0px;
				left: 300px;
				margin: 10px;
				font-size: 50px;
				font-family: 標楷體, 微軟正黑體, 新細明體;
				border-radius: 14px;
				border: 3px solid #00A600;
				-webkit-transition-duration: 0.4s; /* Safari */
    			transition-duration: 0.4s;

			}

			.btn_delete{

				height: 180px;
				width: 280px;
				position: absolute;
				top: 200px;
				left: 0px;
				margin: 10px;
				font-size: 50px;
				font-family: 標楷體, 微軟正黑體, 新細明體;
				border-radius: 14px;
				border: 3px solid #00A600;
				-webkit-transition-duration: 0.4s; /* Safari */
    			transition-duration: 0.4s;

			}

			.btn_change{

				height: 180px;
				width: 280px;
				position: absolute;
				top: 200px;
				left: 300px;
				margin: 10px;
				font-size: 50px;
				font-family: 標楷體, 微軟正黑體, 新細明體;
				border-radius: 14px;
				border: 3px solid #00A600;
				-webkit-transition-duration: 0.4s; /* Safari */
    			transition-duration: 0.4s;
			}

			.btn_query:hover{
				background-color: #4CAF50; /* Green */
    			color: white;
			}

			.btn_delete:hover{
				background-color: #4CAF50; /* Green */
    			color: white;
			}

			.btn_new:hover{
				background-color: #4CAF50; /* Green */
    			color: white;
			}

			.btn_change:hover{
				background-color: #4CAF50; /* Green */
    			color: white;
			}
		
		</style>
		
	</head>


	<body>

		<div class = "mainPage">

			<div class = banner>
				<p class="banner_1">信件包裹登錄系統</p>
			</div>

			<div class = select_part>

				<a href = query.php><input type="button" class = btn_query value = "查詢"></a>

				<a href = new.php><input type="button" class = btn_new value = "新增"></a>

				<br>

				<a href = delete.php><input type="button" class = btn_delete value = "刪除"></a>

				<a href = change.php><input type="button" class = btn_change value = "修改"></a>

			</div>

		</div>

	</body>	

</html>
