
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

                console.log(data);

                //$('#resultURL').attr('href', data);

                //console.log($('#resultURL').href());
            }
        );
    });
});
