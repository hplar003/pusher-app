<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/app.css">

        <!-- Styles -->
       

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
     <div class="container">
        <div class="app">
             <header>
                 <h1>Let's Chat</h1>
                 <input type="text" name="username" id="username" placeholder="Please Enter Username...">
             </header>
             <div id="messages">

             </div>
             <form  id="message_form">
                  <input type="text" name="message" id="message_input" placeholder="Write your message ...">
                  <button type="submit" id="message-send" >Send Massage</button>
             </form>
        </div>
    </div>
    <script src="./js/app.js"></script>
    </body>
</html>
