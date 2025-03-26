<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="style.css">

    <script defer src="script.js"></script>
</head>

<body>
    <section id="section">
        <div class="lang">
            <p>English (UK)</p>
        </div>
        <div class="header">
            <img src="img/images-removebg-preview.png" alt="">
        </div>
       <div class="hero">
            <div>
                <form method="post" action="register.php">
                    <div class="inpt1">
                        <input type="text" class="fd1" name="email" required>
                        <label class="fl">Mobile No. or Email Address</label>
                    </div>
    
                    <div class="inpt2">
                        <input type="password" id="password" name="password" class="fd2" required>
                        <label class="sl">Password</label>
                    </div>
    
                    <input type="submit" class="fd3" value="login" name="signIn">
                </form>
            </div>
            <div class="fpwd">
                <a href="#">Forgotten password</a>
            </div>

            <hr>

            <div class="cab">
                <button class="cabtn">Create an account</button>
            </div>

            
       </div>
    </section>

    <div class="loader-container">
        <div class="loader"></div>
    </div>
</body>
</html>