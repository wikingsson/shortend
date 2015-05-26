
jQuery(document).ready(function($){

    $('.shorten').on('click', function(){

        var url = $(this).siblings('.url').val();

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

                var source = $('#test').html();
                var template = Handlebars.compile(source);
                var context = {
                    url: jQuery.parseJSON(data)
                };

                var html = template(context);

                $('#result').attr('name', html);
                $('#result').html('http://shorty.se/' + html);

            });
    });

    $('#result').on('click', function(){


        var code = $('#result').attr('name');

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

                //alert(result);

                $('#result').attr('href', result);

            });
    });
});
