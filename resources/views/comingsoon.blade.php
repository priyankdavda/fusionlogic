<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coming Soon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            text-align: center;
        }

        .container {
            max-width: 600px;
            padding: 20px;
        }

        h1 {
            font-size: 48px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .time-box {
            background: rgba(255, 255, 255, 0.15);
            padding: 20px;
            border-radius: 10px;
            min-width: 80px;
        }

        .time-box h2 {
            font-size: 28px;
        }

        .time-box span {
            font-size: 14px;
            opacity: 0.8;
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
            opacity: 0.7;
        }

        @media(max-width: 500px){
            h1{
                font-size: 32px;
            }
            .countdown{
                flex-wrap: wrap;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Coming Soon</h1>
        <p>We are working hard to launch our website. Stay tuned!</p>

        <!--<div class="countdown">-->
        <!--    <div class="time-box">-->
        <!--        <h2 id="days">00</h2>-->
        <!--        <span>Days</span>-->
        <!--    </div>-->
        <!--    <div class="time-box">-->
        <!--        <h2 id="hours">00</h2>-->
        <!--        <span>Hours</span>-->
        <!--    </div>-->
        <!--    <div class="time-box">-->
        <!--        <h2 id="minutes">00</h2>-->
        <!--        <span>Minutes</span>-->
        <!--    </div>-->
        <!--    <div class="time-box">-->
        <!--        <h2 id="seconds">00</h2>-->
        <!--        <span>Seconds</span>-->
        <!--    </div>-->
        <!--</div>-->

        <div class="footer">
            © 2026 Your Company. All Rights Reserved.
        </div>
    </div>

    <script>
        // Set launch date (Change this date)
        const launchDate = new Date("March 30, 2026 00:00:00").getTime();

        const countdown = setInterval(function() {

            const now = new Date().getTime();
            const distance = launchDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            if (distance < 0) {
                clearInterval(countdown);
                document.querySelector(".countdown").innerHTML = "We Are Live Now!";
            }

        }, 1000);
    </script>

</body>
</html>