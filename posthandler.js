$(document).ready(function() {
    $("#generatorForm").submit(function(event)
         {
             /* stop form from submitting normally */
             event.preventDefault();

             /* get some values from elements on the page: */
             var $form = $( this ),
                 $submit = $form.find( 'button[type="submit"]' ),
                 location_value = $form.find( 'input[name="location"]' ).val(),
                 name_value = $form.find( 'input[name="name"]' ).val(),
                 url = $form.attr('action');

             /* Send the data using post */
             var posting = $.post( url, {
                               location: location_value,
                               name: name_value
                           });

             posting.done(function( data )
             {
                 /* Put the results in a div */
                 $( "#nameResponse" ).html(data);
             });
        });
    });
