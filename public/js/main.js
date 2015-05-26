
jQuery(document).ready(function($){

    $('.shorten').on('click', function(){
        //saves input URL in url variable
        var url = $(this).siblings('.url').val();

        //Makes ajax post call with url variable
        $.post("../public/make" ,
            {
                url: url
            }
        )
            .error(
            function(){
                console.log("Error: ");
            })
            .success(
            function(data){

                //Uses handlebar to display shortened URL
                var source = $('#handlebarsURL').html();
                var template = Handlebars.compile(source);
                var context = {
                    url: jQuery.parseJSON(data)
                };

                var html = template(context);

                //saves code in attribute name for later use
                $('#result').attr('name', html);
                //Sets shortened URL in <a id="result">
                $('#result').html('http://shorty.se/' + html);

            });
    });

    $('#result').on('click', function(){

        //Gets code from attribute name
        var code = $('#result').attr('name');

        //Ajax get call, to get extended URL
        $.get("../public/get" ,
            {
                code: code
            }
        )
            .error(
            function(){
                console.log("Error: Something is fucking wrong");
            })
            .success(
            function(result){

                //Inserts extended URL in attribute href
                $('#result').attr('href', result);

            });
    });
});
