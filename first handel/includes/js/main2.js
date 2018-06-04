$(document).ready(function () {
    
    for( var i=0; i<6 ; i++ ){

        var listNode= $("<div></div>");
        listNode.addClass('listClass');
        var container = $('#boxContainer');
        // if( i == 0 ){
        //     var dogImage = $('<img />');
        //     dogImage.attr('src',"/images/dogImage.png")
        //     dogImage.addClass('dogImageClass')
        //     listNode.append(dogImage);
        // }
        container.append(listNode);
    }
   });
