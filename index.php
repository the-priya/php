<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: left;
            background-image: linear-gradient(#fff, blue);
        }

        .container {
            max-width: 500px;
            margin: 0 auto;       
            padding: 30px;
            border-radius: 20px;
            box-shadow: 5px 5px 10px 0px #888888;
            background-color: mediumaquamarine;
        }

        h2 {
            color: black;
            position: relative;
        }
        h2::before, h2::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 33%; 
            height: 10px;
            background-color: darkcyan;
        }

        h2::before {
            left: 0;
        }

        h2::after {
            right: 0;
        }

        form {
         
            margin-top: 20px;

        }

        label {
            display:flex;
            margin: 10px 0;
            color: #333;
            font-weight: bold;
        }

        .password-container input[type="password"] {
            width: 48%; /* Set the width for each password field */
        }

        input[type="name"],input[type="username"],input[type="confirmPassword"],input[type="phone"],input[type="bdate"]
        input[type="password"],
        input[type="email"] {
            width: 100px;
            margin: 5px 0;
            font-size:30px;
            border: 6px solid gray;
            border-radius: 20px;
        }
        input{
            height:2em;
            width:28.5rem;
            border-radius: 20px;
        }
        input[type="submit"] {
            background-color: darkcyan;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
      width:30.8rem;
            cursor: pointer;
            font-size: 20px;
        }
        input{
            padding:0.5rem;
            padding-right: 30px;
        
        }

        input[type="submit"]:hover {
            background-color: gray;
        }

input[type="checkbox"] {
    margin: 5px 0;
    font-size: 5px;
    border: 1px solid gray;
    border-radius: 10px;
    width: auto;
}

    </style>
 <script>
        function redirectToLogin() {
            window.location.href = "login.php";
        }
    </script>
</head>
<body>
    <div class="container">
        <h2 align="center">Sign Up</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $name = $_POST['name'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $bdate = $_POST['bdate'];
            if ($password === $confirmPassword) 
            {
                header("Location: login.php?username=$username&password=$password");
                exit;
            }
            else 
            {
                echo '<div style="color: red;">Passwords do not match. Please try again.</div>';
            }
        }
        ?>
        <form action="javascript:void(0);" onsubmit="redirectToLogin()">   
       
<div>
		<label for="Fullname">FullName</label>
		<input type="text" id="Fullname" name="Fullname" placeholder="Enter your full name" required>
</div>
<div>
		<label for="username">Username</label>
		<input type="text" id="username" name="username" placeholder="Enter a username" required>
</div>
<div>
                <label for="password">Create Password</label>
                <input type="password" id="pass" name="password" maxlength="8" placeholder="Enter your password" required>
    </div>
    <div>

                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" maxlength="8" placeholder="Confirm your password" required>
            </div>
<div>
		<label for="email">Email address</label>
		<input type="text" id="email" name="email" placeholder="sfdh@gmail.com" required>
</div>

<div>
		<label for="phone">Phone number</label>
		<input type="tel" id="phone" name="phone" placeholder="1234567890" required>
</div>

<div>
		<label for="bdate">Date of birth</label>
		<input type="date" id="bdate" name="bdate" >
</div>
<div>
        <label for="gender">Gender</label>
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female
</div>

<div>
<label for="terms-and-conditions">
        <input id="terms-and-conditions" type="checkbox" required name="terms-and-conditions" /> I accept the terms and conditions</a>
      </label>
</div>

<div>
		<center><input type="submit" value="Register" ></center>
	
</div>



</form>

    </div>
</body>
</html>
