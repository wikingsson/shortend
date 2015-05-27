<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>URL Shortener</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/handlebars.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <h1 class="stop">Stop making it smaller, Vaginaface</h1>
    <div class="container">
        <h1 class="title">Shorten your URL</h1>
        <!-- Hämtar in Handlebars -->
        <script id="handlebarsURL" type="text/x-handlebars-template">{{url}}</script>
        <a id="result" href="#" name=""></a>
        <div>
            <input type="url" name="url" class="url" placeholder="Enter your URL here..." autocomplete="off"/>
            <input type="button" name="shorten_button" value="SHORTEN" class="shorten">
        </div>
        <div class="table">
            <div class="tableHeader">
                <p class="tableHeaderText left">LONG URL</p>
                <p class="tableHeaderText middle">SHORT URL</p>
                <p class="tableHeaderText right">CREATED</p>
            </div>
            <div class="tableContent">
                <a href="#"><p class="tableContentText left">https://www.google.se/search?q=masariner?=somsmakargott</p></a>
                <a href="#"><p class="tableContentText middle">https://goo.gl/Ef75tW</p></a>
                <p class="tableContentText right">19/05-21:52</p>
            </div>
            <div class="tableContent">
                <a href="#"><p class="tableContentText left">https://www.facebook.com/richard.bang.9/posts/10206137921149049?notif_t=wall</p></a>
                <a href="#"><p class="tableContentText middle">https://wie.se/5Ci9E</p></a>
                <p class="tableContentText right">25/05-12:21</p>
            </div>
        </div>
    </div>
</body>
</html>

