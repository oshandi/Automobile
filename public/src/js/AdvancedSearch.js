/**
 * Created by Jude on 2/5/2017.
 */

    $('#maker').on('change',function(e){
        var brand=e.target.value;

        $.get('brands?manufac=',function (data) {
            // $.each(data,function (index,brandObj) {
            //     alert("akaks")
            //     $('#maker').append(' <option value = "'+brandObj.manufacturer+'">'+brandObj.manufacturer+'</option>');
            //
            // });
        });
     });
