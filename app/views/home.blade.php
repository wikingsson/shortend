<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>URL Shortener</title>
        <link rel="stylesheet" href="{{ URL::to('css/main.css') }}">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="{{ URL::to('js/main.js') }}"></script>
    </head>
    <body>
        <div class="container">
            <h1 class="title">Shorten your URL</h1>
            <!--blade syntax. checks -->


            <!--checks if sessions exists and then gets session so that we can get access to global-->
                <p><a id="resultURL" href=""></a></p>
                <input type="url" name="url" class="url" placeholder="Enter your URL here..." autocomplete="off" {{ Input::old('url') ? ' value="' . e(Input::old('url')) . '"' : '' }}/>
                <input type="button" name="shorten_button" value="SHORTEN" class="shorten">
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
                </div
            </div>
        </div>
    </body>
</html>
