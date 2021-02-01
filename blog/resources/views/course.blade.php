<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
	  <meta name="viweport" content="width=device-width,initial-scale=1.0">
	  <title>reative Card Hover Effects</title>
	  <!-- <link rel="stylesheet"  href="style.css"> -->
	  <style>
	  	@import url('http://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display=swap');
	  	
	  	{
	  		margin:  0;
	  		padding:  0;
	  		box-sizing:  border-box;
	  		font-family:  'Poppins', sans-serif;

	  	}
	  	body
	  	{
	  		display: flex;
	  		justify-content:  center;
	  		align-items:  center;
	  		background: black;
	  		min-height: 100vh;
	  	}
	  	.container
	  	{
	  		position: relative;
	  		width: 1000px;
	  		display: flex;
	  		justify-content: space-between;
	  		flex-wrap: wrap;
	  		margin: 20px;
	  	}
	  	.container .card
	  	{
	  		position: relative;
	  		height: 250px;
	  		background: #fff	;
	  		display: flex;
	  		width: 45%;
	  		margin: 30px 0;
	  	}
	  	.container .card .imgBx
	  	{
	  		position: absolute;
	  		top: 0;
	  		left: 0;
	  		width: 100%;
	  		height: 100%;
	  		background: #333;
	  		z-index: 1;
	  		display: flex;
	  		justify-content: center;
	  		align-items: center;
	  		overflow: hidden;
	  		transition: 0.5% ease-in-out;
	  	}
	  	.container .card:hover .imgBx
	  	{
	  		width: 150px;
	  		height: 150px;
	  		left: -1;
	  		top: calc(50% - 1px);
	  		transition: 0.5s ease-in-out;
	  		background: #ff0057;
	  	}
	  	.container .card .imgBx:before
	  	{
	  		content: attr(data-text);
	  		position: absolute;
	  		bottom: 0;
	  		left: 0;
	  		width: 100%;
	  		height: 100%;
	  		text-align: center;
	  		font-size: 6em;
	  		color: rgb(255,255,255,.05);
	  		font-weight: 700;
	  	}
	  	.container .card .imgBx img
	  	{
	  		max-width: 100px;
	  		transition: 0.5s ease-in-out;
	  	}
	  	.container .card:hover .imgBx img
	  	{
	  		max-width: 75px;
	  		
	  	}
	  	.container .card .content
	  	{
	  		position: absolute;
	  		right: 0;
	  		width: calc(100% - 45%);
	  		height: 50%;
	  		padding: 10px;
	  		display: flex;
	  		justify-content: center;
	  		align-items: center;
	  	}
	  	.container .card .content h3
	  	{
	  		margin-bottom: 5px;
	  		margin-top: 100px;
	  		font-size: 24px;
	  	}
	  	.container .card .content a
	  	{
	  		display: inline-block;
	  		margin-top: 10px;
	  		padding: 5px 10px;
	  		background: #333;
	  		text-decoration: none;
	  		color: #fff;
	  	}
	  	@media (max-width: 992px)
	  	{
	  		.container
	  		{
	  			width: 100px;
	  			flex-direction: column;
	  			align-items: center;
	  		}
	  		.container
	  		{
	  			width: 400px;
	  		}
	  	}
	  	@media (max-width: 768px)
	  	{
	  		.container .card
	  		{
	  			max-width: 300px;
	  			flex-direction: column;
	  			height: auto;
	  		}
	  		.container .card .imgBx
	  		{
	  			position: relative;
	  		}
	  		.container .card .imgBx,
	  		.container .card:hover .imgBx
	  		{
	  			width: 100%;
	  			height: 200px;
	  			left: 0;
	  		}
	  		.container .card .imgBx img,               
	  		.container .card:hover .imgBx img
	  		{
	  			max-width: 100px;
	  		}
	  		.container .card .content
	  		{
	  			position: relative;
	  			width: 100%;
	  		}

	  	}




	  </style>
	</head>

	<body>
		<div class="container">
			<div class="card">
				<div class="imgBx" data-text="java">
					<img src="{{url('/image/data.png')}}" alt="Image"/>
				</div>
				<div class="content">
					<div>
						<h3>java</h3>
						<p>Java is a class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.</p>
						<a href="#">Read more</a>
						<a href="#"> Enroll</a>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="imgBx" data-text="python">
					<img src="{{url('/image/money.png')}}" alt=""/>
				</div>
				<div class="content">
					<div>
						<h3>python</h3>
						<p>Python is an interpreted, high-level and general-purpose programming language. Python's design philosophy emphasizes code readability with its notable use of significant whitespace.</p>
						<a href="#">Read more</a>
						<a href="#"> Enroll</a>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="imgBx" data-text="html">
					<img src="{{url('/image/sketch.png')}}" alt="Image"/>
				</div>
				<div class="content">
					<div>
						<h3>html</h3>
						<p>Hypertext Markup Language is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.</p>
						<a href="#">Read more</a>
						<a href="#"> Enroll</a>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="imgBx" data-text="php">
					<img src="{{url('/image/startup.png')}}" alt="Image"/>
				</div>
				<div class="content">
					<div>
						<h3>php</h3>
						<p>phpMyAdmin is a free software tool written in PHP, intended to handle the administration of MySQL over the Web. phpMyAdmin supports a wide range of operations on MySQL and MariaDB</p>
						<a href="#">Read more</a>
						<a href="#"> Enroll</a>
					</div>
				</div>
			</div>
		</div>
	</body>





	</body>
</html>
