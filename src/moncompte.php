<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: inscriptionconnexion.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: Arial, sans-serif;
            background-image: url('https://i.pinimg.com/originals/17/14/09/1714094bc5087f6913aab2618876e0fc.gif'); /* Replace with your background image URL */
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            
        }

        body {
	min-height: 100vh;
	padding: 20px;
	background:	#091921;
}
section {
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
}
h1 {
	position: relative;
	font-size: 30px;
	font-weight: 500;
	text-align: center;
	width: 100%;
	padding: 10px;
	margin: 10px auto 30px;
	color: #fff;
}

        .container {
            width: 90%;
            max-width: 500px;
            margin-top: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            text-align: center;
        }

        h1 {
            color: #ffffff;
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            justify-content: center;
        }

        .logout-button {
            padding: 10px 20px;
            background-color: aquamarine;
            color: #000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            font-size: 16px;
        }

        .logout-button:hover {
            background-color: #7fffd4;
            box-shadow: 0 0 15px aquamarine;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 20px;
            }

            .logout-button {
                font-size: 14px;
                padding: 8px 16px;
            }
        }

        * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Quicksand', sans-serif;


    }
section {
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
}

h2 {
	position: absolute;
	z-index: 11;
	color: #fff;
}
h2:nth-child(1) {
	font-weight: 700;
	background: rgba(255,255,255,0.05);
	text-align: center;
	padding: 5px 8px;
	font-size: 25px;
	left: 17%;
    top: -10%;
}
h2:nth-child(3) {	
	right: 16%;
    top: -10%;
    text-align: center;
    font-weight: 300;
	padding: 5px 8px;
	font-size: 25px;
    box-shadow: 0 -15px 15px rgba(255,255,255,0.05),
				inset 0 -15px 15px rgba(255,255,255,0.05),
				0 15px 15px rgba(0,0,0,0.7),
				inset 0 15px 15px rgba(0,0,0,0.4);
}
.wrapper {
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
}
/*-------------------
------Clock 01-------
---------------------*/
.wrapper .container-01 {
	position: relative;
	width: 50%;
	min-height: 80vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	background: #091921;
}
.wrapper .container-01::before {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#e91e63, #ffc187);
	clip-path: circle(22% at 28% 15%);	
}
.wrapper .container-01::after {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#ffffff, #da00ff);
	clip-path: circle(22% at 78% 80%);	
}

.wrapper .container-01 .clock {
	width: 350px;
	height: 350px;
  z-index: 1;
	display: flex;
	overflow: hidden;
	justify-content: center;
	align-items: center;
	background: rgba(255,255,255, 0.05);
	border: 4px solid #091921;
	border-radius: 50%;
	backdrop-filter: blur(15px);
	border-top: 1px solid rgba(255,255,255, 0.2);
	border-left: 1px solid rgba(255,255,255, 0.2);
	box-shadow: 5px 5px rgba(0, 0, 0, 0.2);

}
.wrapper .container-01 .clock:before {
	content: '';
	position: absolute;
	width: 15px;
	height: 15px;
	background: #fff;
	border-radius: 50%;
	z-index: 10;
}
.wrapper .container-01 .clock .hour,
.wrapper .container-01 .clock .min,
.wrapper .container-01 .clock .sec {
	position: absolute;
}	
.wrapper .container-01 .clock .hour, .hr {
	width: 160px;
	height: 160px;
}
.wrapper .container-01 .clock .min, .mn {
	width: 190px;
	height: 190px;
}
.wrapper .container-01 .clock .sec, .sc {
	width: 230px;
	height: 230px;
}
.wrapper .container-01 .clock .hour .hr,
.wrapper .container-01 .clock .min .mn,
.wrapper .container-01 .clock .sec .sc {
	display: flex;
	justify-content:center;
	/*align-items: center;*/
	position: absolute;
	border-radius: 50%;
}
.wrapper .container-01 .clock .hour .hr:before {
	content: '';
	position: absolute;
	width: 8px;
	height: 80px;
	background: #ff105e;
	opacity: 0.8;
	z-index: 9;
	border-radius:6px 6px 0 0;
}
.wrapper .container-01 .clock .min .mn:before {
	content: '';
	position: absolute;
	width: 4px;
	height: 90px;
	background: #fff;
	opacity: 0.8;
	z-index: 10;
	border-radius:6px 6px 0 0;	
}
.wrapper .container-01 .clock .sec .sc:before {
	content: '';
	position: absolute;
	width: 2px;
	height: 150px;
	background: #3498db;
	z-index: 12;
	border-radius:6px 6px 0 0;	
}
.wrapper .container-01 .clock .indicators {
	position: absolute;
	display: flex;
	justify-content: center;
	align-items: center;
}
.wrapper .container-01 .clock .indicators div {
	position: absolute;
	width: 2px;
	height: 5px;
	background: #404040;
	user-select: none;
	cursor: none;
	border-bottom: 1px solid rgba(255,255,255,0.05);
	border-left: 1px solid rgba(255,255,255,0.05);
}
.wrapper .container-01 .clock .indicators div:nth-child(1){
	transform: rotate(30deg) translateY(-150px);
}
.wrapper .container-01 .clock .indicators div:nth-child(2){
	transform: rotate(60deg) translateY(-150px);
}
.wrapper .container-01 .clock .indicators div:nth-child(3):before{
	content: '3';
    font-weight: 700;
    position: absolute;
    transform: rotate(-90deg) translate(-10px, -4px);
    font-size: 20px;
    color: rgba(255,255,255,0.3);
}
.wrapper .container-01 .clock .indicators div:nth-child(3){
	background: #3498db;
	transform: rotate(90deg) translateY(-150px);
}
.wrapper .container-01 .clock .indicators div:nth-child(4){
	transform: rotate(120deg) translateY(-150px);
}
.wrapper .container-01 .clock .indicators div:nth-child(5){
	transform: rotate(150deg) translateY(-150px);
}
.wrapper .container-01 .clock .indicators div:nth-child(6):before{
	content: '6';
    font-weight: 700;
    position: absolute;
    transform: rotate(180deg) translate(6px, -10px);
    font-size: 20px;
    color: rgba(255,255,255,0.3);    
}
.wrapper .container-01 .clock .indicators div:nth-child(6){
	background: #3498db;
	transform: rotate(180deg) translateY(-150px);
}
.wrapper .container-01 .clock .indicators div:nth-child(7){
	transform: rotate(210deg) translateY(-150px);
}
.wrapper .container-01 .clock .indicators div:nth-child(8){
	transform: rotate(240deg) translateY(-150px);
}
.wrapper .container-01 .clock .indicators div:nth-child(9):before{
	content: '9';
    font-weight: 700;
    position: absolute;
    transform: rotate(90deg) translate(8px, 2px);
    font-size: 20px;
    color: rgba(255,255,255,0.3);
}
.wrapper .container-01 .clock .indicators div:nth-child(9){
	background: #3498db;
	transform: rotate(270deg) translateY(-150px);
}
.wrapper .container-01 .clock .indicators div:nth-child(10){
	transform: rotate(300deg) translateY(-150px);
}
.wrapper .container-01 .clock .indicators div:nth-child(11){
	transform: rotate(330deg) translateY(-150px);
}
.wrapper .container-01 .clock .indicators div:nth-child(12):before{
	content: '12';
    font-weight: 700;
    position: absolute;
    transform: rotate(0deg) translate(-8px, 10px);
    font-size: 20px;
    color: rgba(255,255,255,0.3);
}
.wrapper .container-01 .clock .indicators div:nth-child(12){
	background: #3498db;
	opacity: 0.5;
	transform: rotate(360deg) translateY(-150px);
}

.wrapper .container-01 p {
	z-index: 12;
	margin: 20px auto 10px;
	position: relative;
	color: #fff;
}
.wrapper .container-01 p span {
	font-weight: 700;
}

/*-------------------
------Clock 02-------
---------------------*/
.wrapper .container-02 {
	position: relative;
	width: 50%;
	min-height: 80vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

.wrapper .container-02 .clock {
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 350px;
	width: 350px;
	border-radius: 50%;
	box-shadow: 0 -15px 15px rgba(255,255,255,0.05),
				inset 0 -15px 15px rgba(255,255,255,0.05),
				0 15px 15px rgba(0,0,0,0.7),
				inset 0 15px 15px rgba(0,0,0,0.4);
}
.wrapper .container-02 .clock:before {
	position: absolute;
	content: '';
	height: 320px;
	width: 320px;
	border-radius: 50%;
	box-shadow: 0 -15px 15px rgba(255,255,255,0.05),
				inset 0 -15px 15px rgba(255,255,255,0.05),
				0 15px 15px rgba(0,0,0,0.7),
				inset 0 15px 15px rgba(0,0,0,0.4);
}
.wrapper .container-02 .clock:after {
	position: absolute;
	content: '';
	height: 220px;
	width: 220px;
	border-radius: 50%;
	box-shadow: 0 -15px 15px rgba(255,255,255,0.05),
				inset 0 -15px 15px rgba(255,255,255,0.05),
				0 15px 15px rgba(0,0,0,0.7),
				inset 0 15px 15px rgba(0,0,0,0.4);
}
.wrapper .container-02 .clock .center-nut {
	height: 15px;
	width: 15px;
	background: #404040;
	border-radius: 50%;
	z-index: 2;
}
.wrapper .container-02 .clock .center-nut2 {
	height: 9px;
	width: 9px;
	background: #3498db;
	border-radius: 50%;
	z-index: 10;
	position: absolute;
}
.wrapper .container-02 .clock .indicators {
	position: absolute;
	display: flex;
	justify-content: center;
	align-items: center;
}
.wrapper .container-02 .clock .indicators div {
	position: absolute;
	width: 2px;
	height: 5px;
	border: 3px solid #091921;
	box-shadow: 0 -3px 3px rgba(255,255,255,0.05),
				inset 0 -3px 3px rgba(255,255,255,0.05),
				0 3px 3px rgba(0,0,0,0.7),
				inset 0 3px 3px rgba(0,0,0,0.4);
}
.wrapper .container-02 .clock .indicators div:nth-child(1){
	transform: rotate(30deg) translateY(-100px);
}
.wrapper .container-02 .clock .indicators div:nth-child(2){
	transform: rotate(60deg) translateY(-100px);
}
.wrapper .container-02 .clock .indicators div:nth-child(3):before{
	content: '3';
    font-weight: 500;
    position: absolute;
    transform: rotate(-90deg) translate(-5px, -4px);
    font-size: 20px;
    color: #fff;
    opacity: 0.3;
}
.wrapper .container-02 .clock .indicators div:nth-child(3){
	background: #3498db;
	transform: rotate(90deg) translateY(-100px);
}
.wrapper .container-02 .clock .indicators div:nth-child(4){
	transform: rotate(120deg) translateY(-100px);
}
.wrapper .container-02 .clock .indicators div:nth-child(5){
	transform: rotate(150deg) translateY(-100px);
}
.wrapper .container-02 .clock .indicators div:nth-child(6):before{
	content: '6';
    font-weight: 500;
    position: absolute;
    transform: rotate(180deg) translate(6px, -10px);
    font-size: 20px;
    color: #fff;
    opacity: 0.3;
}
.wrapper .container-02 .clock .indicators div:nth-child(6){
	background: #3498db;
	transform: rotate(180deg) translateY(-100px);
}
.wrapper .container-02 .clock .indicators div:nth-child(7){
	transform: rotate(210deg) translateY(-100px);
}
.wrapper .container-02 .clock .indicators div:nth-child(8){
	transform: rotate(240deg) translateY(-100px);
}
.wrapper .container-02 .clock .indicators div:nth-child(9):before{
	content: '9';
    font-weight: 500;
    position: absolute;
    transform: rotate(90deg) translate(4px, 2px);
    font-size: 20px;
    color: #fff;
    opacity: 0.3;
}
.wrapper .container-02 .clock .indicators div:nth-child(9){
	background: #3498db;
	transform: rotate(270deg) translateY(-100px);
}
.wrapper .container-02 .clock .indicators div:nth-child(10){
	transform: rotate(300deg) translateY(-100px);
}
.wrapper .container-02 .clock .indicators div:nth-child(11){
	transform: rotate(330deg) translateY(-100px);
}
.wrapper .container-02 .clock .indicators div:nth-child(12):before{
	content: '12';
    font-weight: 500;
    position: absolute;
    transform: rotate(0deg) translate(-8px, 5px);
    font-size: 20px;
    color: #fff;
    opacity: 0.3;
}
.wrapper .container-02 .clock .indicators div:nth-child(12){
	background: #3498db;
	transform: rotate(360deg) translateY(-100px);
}
.wrapper .container-02 .clock .sec-hand,
.wrapper .container-02 .clock .min-hand,
.wrapper .container-02 .clock .hour-hand {
	position: absolute;	
}
.wrapper .container-02 .clock .sec-hand, 
.wrapper .container-02 .clock .sec-hand .sec {
	width: 180px;
	height: 180px;
	z-index: 6;
}
.wrapper .container-02 .clock .min-hand, 
.wrapper .container-02 .clock .min-hand .min {
	width: 140px;
	height: 140px;
	z-index: 5;	
}
.wrapper .container-02 .clock .hour-hand,
.wrapper .container-02 .clock .hour-hand .hr {
	width: 110px;
	height: 110px;
	z-index: 4;
}
.wrapper .container-02 .clock .sec-hand .sec,
.wrapper .container-02 .clock .min-hand .min,
.wrapper .container-02 .clock .hour-hand .hr {
	position: absolute;
	display: flex;
	justify-content: center;
}
/*Aiguille des secondes*/
.wrapper .container-02 .clock .sec-hand .sec:before {
	position: absolute;
	content: '';
	height: 110px;
	width: 3px;
	background: #3498db;
}
.wrapper .container-02 .clock .sec-hand .sec:after {
	position: absolute;
	content: '';
	height: 35px;
	width: 7px;
	background: #3498db;
	top: 105px;
	border-radius: 5px;
}
/*Aiguilles des minutes*/
.wrapper .container-02 .clock .min-hand .min:before {
	position: absolute;
	content: '';
	width: 1px;
	top: -15px;
	border-left: 3px solid transparent;
	border-right: 3px solid transparent;
	border-bottom: 60px solid #fff;
}
.wrapper .container-02 .clock .min-hand .min:after {
	position: absolute;
	content: '';
	width: 3px;
	top: 40px;
	border-left: 2px solid transparent;
	border-right: 2px solid transparent;
	border-bottom: 30px solid #fff;
}
/*Aiguilles des heures*/
.wrapper .container-02 .clock .hour-hand .hr:before {
	position: absolute;
	content: '';
	width: 1px;
	border-left: 3px solid transparent;
	border-right: 3px solid transparent;
	border-bottom: 35px solid #ff105e;
}
.wrapper .container-02 .clock .hour-hand .hr:after {
	position: absolute;
	content: '';
	width: 3px;
	top: 35px;
	border-left: 2px solid transparent;
	border-right: 2px solid transparent;
	border-bottom: 25px solid #ff105e;
}
.wrapper .container-02 p {
	z-index: 12;
	margin: 20px auto 10px;
	position: relative;
	color: #fff;
}
.wrapper .container-02 p span {
	font-weight: 700;
}

/*-------------------------
--------RESPONSIVE--------
--------------------------*/
@media (max-width: 991px) {
	h1 {
		display: none;
	}
	h2:nth-child(1){
		left: 6%;
    	top: 0%;
	}
	h2:nth-child(3){
		left: 3%;
    	top: 47%;
    	width: 20%
	}
	.wrapper {
		flex-direction: column;
	}
	.wrapper .container-02 {
		margin-top: 70px;
	}
}

    


    </style>
</head>
<body>

<div class="container">
    <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <form action="logout.php" method="POST">
        <button type="submit" class="logout-button">Déconnexion</button>
    </form>
</div>
<section>
		<h1>et</h1><br>
		<div class="wrapper">
			<h2>Glassmorphism</h2>
			<div class="container-01">	
				<div class="clock" id="clock-01">
					<div class="hour">
						<div class="hr" id="hr"></div>
					</div>
					<div class="min">
						<div class="mn" id="mn"></div>
					</div>
					<div class="sec">
						<div class="sc" id="sc"></div>
					</div>	
					<div class="indicators">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>	
				</div>			
				<p><span>CSS Property:</span> Backdrop-Filter</p>
			</div>
			<h2>Neumorphism</h2>
			<div class="container-02">
				<div class="clock">
					<div class="center-nut"></div>	
					<div class="center-nut2"></div>	
					<div class="indicators">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>	
					<div class="sec-hand">
						<div class="sec"></div>
					</div>
					<div class="min-hand">
						<div class="min"></div>
					</div>
					<div class="hour-hand">
						<div class="hr"></div>
					</div>
				</div>
				<p><span>CSS Property:</span> Box Shadow</p>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		const deg = 6;
		const hr = document.querySelector('#hr'); 
		const mn = document.querySelector('#mn'); 
		const sc = document.querySelector('#sc'); 

		setInterval(() => {
			let day = new Date()
			let hh = day.getHours() * 30;
			let mm = day.getMinutes() * deg;
			let ss = day.getSeconds() * deg;

			hr.style.transform = `rotateZ(${(hh)+(mm/12)}deg)`;
			mn.style.transform = `rotateZ(${mm}deg)`;
			sc.style.transform = `rotateZ(${ss}deg)`;
		});

		const sec = document.querySelector('.sec-hand .sec');
		const min = document.querySelector('.min-hand .min');
		const hour = document.querySelector('.hour-hand .hr');

		setInterval(function(){
			let time = new Date();
			let secs = time.getSeconds() * 6;
			let mins = time.getMinutes() * 6; 
			let hours = time.getHours() * 30;

			sec.style.transform = `rotateZ(${secs}deg)`;
			min.style.transform = `rotateZ(${mins}deg)`;
			hour.style.transform = `rotateZ(${hours + (mins/12)}deg)`;
		});
	</script>


</body>
</html>

<script>
    VanillaTilt.init(document.querySelector("#clock-01"), {
			max: 15,
			speed: 400,
			glare: true,
			"max-glare": 0.2,
		});
</script>


