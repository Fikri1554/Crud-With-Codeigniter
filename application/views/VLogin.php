<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style type="text/css">
     body {
    background-color: grey;
    font-family: 'Open Sans', sans-serif;
}
.login {
    width: 400px;
    margin: 16px auto;
    font-size: 16px;
    margin-top: 20vh;
    margin-left: 71vh;
}
.login-header,
.login p {
    margin-top: 0;
    margin-bottom: 0;
}
.login-header {
    background: dodgerblue;
    padding: 20px;
    font-size: 1.4em;
    font-weight: normal;
    text-align: center;
    text-transform: uppercase;
    color: white;
}
.login-container {
    background: white;
    padding: 12px;
}
.login p {
    padding: 12px;
}
.login input {
    box-sizing: border-box;
    display: block;
    width: 100%;
    border-width: 1px;
    border-style: solid;
    padding: 16px;
    outline: 0;
    font-family: inherit;
    font-size: 0.95em;
}
.login input[type="text"],
.login input[type="password"] {
    background: white;
    border-color: gray;
    color: black;
}
.login input[type="text"]:focus,
.login input[type="password"]:focus {
    border-color: black;
}
.login input[type="submit"] {
    background: dodgerblue;
    border-color: transparent;
    color: white;
    cursor: pointer;
}
.login input[type="submit"]:hover {
    background: cyan;
}
.login input[type="submit"]:focus {
    border-color: #05a;
}
   
    </style>
</head>
<body>
  <div class="login">
        <h2 class="login-header">L O G I N</h2>
        <form class="login-container" method="post" action="">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <p>
                <input type="text" name="txt_user" placeholder="username">
            </p>
            <p>
                <input type="text" name="txt_pass" placeholder="Password">
            </p>
            <p>
                <input type="submit" name="btn_login" value="Login">
            </p>
        </form>
    </div>
</body>
</html>