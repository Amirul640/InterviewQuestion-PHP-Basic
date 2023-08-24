<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Verification</title>

    <!-- jQuery library and custom JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="verify_ajax.js"></script>
    
    <!-- Style the page -->
    <style>
        #main {
            border: 2px solid black; 
            padding: 20px;
            width: 350px; 
            height: 200px;
        }
        #username {
            padding: 3px;
        }
        #submit-button {
            background-color: green;
            color: white;
            float: right;
            padding: 5px 20px;
            margin: 10px 50px;
        }
        #verification-result {
            margin: 50px 50px;
            float: left;
        }
    </style>
</head>
<body>
    <center>
    <div id="main">
    <h1>Username Verification</h1>
    <form id="verification-form">
        User Name: 
        <input type="text" id="username" name="username" required>
        <br>
        <input type="submit" id="submit-button" value="Submit">
    </form>
    <div id="verification-result"></div>
    </div>
    </center>
</body>
</html>
