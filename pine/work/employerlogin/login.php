<html>
<head>
    <link rel="stylesheet" type="text/css" href="styl.css">
    <style>
        /* Add some styles for the toast message */
        .toast {
            visibility: hidden;
            min-width: 250px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            margin-left: -125px;
        }

        /* Show the toast message with animation */
        .show {
            visibility: visible;
            animation: fadeIn 0.5s, fadeOut 0.5s 2.5s;
        }

        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        @keyframes fadeOut {
            from {opacity: 1;}
            to {opacity: 0;}
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <center>
            <a href="http://localhost/pine/work/first/first.html"><img src="Picture1.png" border="0px" height="200px" width="270px"></a><br>
        </center> 

        <div class="stand">
            <div class="outer-screen">
                <div class="inner-screen">
                    <div class="form">
                        <strong><center><font size=4 color="white" face="Calibri Light">Login And Start Hiring!</center></strong>
                        <form method="post" action="validate.php" onsubmit="return validateForm()">
                            <input type="text" class="zocial-dribbble" placeholder="Enter your email" name="email" />
                            <input type="password" placeholder="Password" name="password"/>
                            <input type="submit" value="Login" /><br>
                        </form>
                        <!-- Toast message container -->
                        <div id="toast" class="toast"></div>

                        <a href="http://localhost/pine/work/employerregister/register.html">
                            <font color="white" size=4>New? Register With Us!</a></font></font>
                    </div> 
                </div> 
            </div> 
        </div>
    </div>

    <script>
        function validateForm() {
            // Your existing PHP validation code here...

            // If login is unsuccessful, show the toast message
            var toast = document.getElementById("toast");
            if (/* Your condition for unsuccessful login */) {
                toast.innerHTML = "Incorrect username or password!";
                toast.classList.add("show");
                setTimeout(function () {
                    toast.classList.remove("show");
                }, 3000); // Hide the toast after 3 seconds
                return false; // Prevent the form from submitting
            }
            return true; // Allow the form to submit if login is successful
        }
    </script>
</body>
</html>
