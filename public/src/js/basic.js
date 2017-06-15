/**
 * Created by Jude on 12/19/2016.
 */


    $(document).ready(function(){
        $('#myCarousel').carousel({
            interval: 2600
        })
    });

$(document).ready(function(){
    $('#searchbar').hide();
    $('#searchbtn').on('click', function(event) {
        $('#searchbar').show('show');
    });
    $('#searchbtnclose').on('click', function(event) {
        $('#searchbar').hide('show');
    });

});


