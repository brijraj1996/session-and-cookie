<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div id = "wrapper">

        <div id = "page" class = "container">
    <form method = "POST" action = "/store">
        @csrf
            <h1 class = "heading-has-text-weight-bold is-size-4">Login Form</h1>

        Name :   <input type = "text" name = "name">
        <br>
        <br>
        <br>
        Username:  <input type = "text" name ="username">
        <br>
        <br>
        <br>

        Password:  <input type ="password" name ="password">

        <br>
        <br>
        <input type = "submit" text = "submit">
           
    </form>
    </div> 
</body>
</html>