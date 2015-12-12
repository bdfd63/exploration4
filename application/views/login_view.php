<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style>
body {
    font-family: helvetica, sans-serif;
}

@font-face {
    font-family: 'icons';
    src: url('icons.ttf')  format('truetype');
}

div, input {
    box-sizing: border-box;
}

.container {
    margin-top: 10%;
    width: 365px;
    height: 274px;
    padding: 0px 0;
    background: -webkit-linear-gradient(top, #1e5799 0%,#7db9e8 90%) 
}

.form {
    width: 365px; height: 274px;
    margin: auto;
    background: rgba(0,0,0,.23);
    padding: 2px;
}

.header {
    height: 44px;
    line-height: 44px;
    padding-left: 30px;
    font-size: 20px;
    background: 325px center no-repeat, -webkit-linear-gradient(top, rgb(253,253,253), rgb(198,203,199));
}

form {
    margin: 0 31px;
}

input[type=text], input[type=password] {
    display: block;
    width: 100%;
    height: 38px;
    padding-left: 30px;
    background: 10px center no-repeat, -webkit-linear-gradient(45deg, #404040 0%, #404040 60%, #535353 60%, #494949);
    color: #AAA;
    border: 1px solid black;
    transition: box-shadow .3s;
}

input[type=text]:focus, input[type=password]:focus {
    outline: 0;
    box-shadow: inset 0 0 8px rgba(226,239,207,.7);
}

input[type=text] { margin-top: 36px; margin-bottom: 26px; }

input[type=password] { margin-bottom: 36px; margin-top: 26px; }

input[type=submit] {
    float: right;
    width: 134px; height: 31px;
    border: 1px solid #1e5799;
    font-weight: bold;
    color: white;
    text-align: right;
    padding-right: 45px;
}

input[type=submit]:active {
    box-shadow: inset 0 -3 5px rgba(0,0,0,.5);
    background: -webkit-linear-gradient(top, #1e5799, #7db9e8);
}
shareimprove this answer

    </style>

</head>

<body>
    
<div class="container">
    <div class="form">
        <div class="header">
            Login
        </div>
        <div class="body">
            <form>
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="password">
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</div>

<p style="margin-left: 45%;"> User: test, password: test</p>
</body>
</html>