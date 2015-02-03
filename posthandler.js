$(document).ready(function() {
    $("#generatorForm").submit(function(event)
         {
             /* stop form from submitting normally */
             event.preventDefault();

             /* get some values from elements on the page: */
             var $form = $( this ),
                 $submit = $form.find( 'button[type="submit"]' ),
                 name_value = $form.find( 'input[name="name"]' ).val(),
                 age_value = $form.find( 'input[name="age"]' ).val(),
                 url = $form.attr('action');

             /* Send the data using post */
             var posting = $.post( url, {
                               name: name_value,
                               age: age_value
                           });

             posting.done(function( data )
             {
                 /* Put the results in a div */
                 $( "#nameResponse" ).html(data);

                 /* Change the button text.
                 $submit.text('Sent, Thank you'); */

                 /* Disable the button.
                 $submit.attr("disabled", true); */
             });
        });
    });
