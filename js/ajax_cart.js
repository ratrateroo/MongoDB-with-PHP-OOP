
//const book_array = [];

// function ajaxBuy(value) {
//     //book_array.push(value);
//     //console.log(book_array);
    
//     $.post('http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/ajax/buy.php', {book: value} , function(data) {
//         if(data == "unregistered") {
//             $("#loginWarning").modal('show');
//         } else {
//             $("#shopcart").html(data);
//         }
        
//     });
// }

/* Get from elements values */

function ajaxBuy(value) {
    $.ajax({
        url: "http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/ajax/buy.php",
        type: "post",
        data: {book: value},
        success: function (response) {
            console.log(response);   
                if(response.trim() == "unregistered") {
                    $("#loginWarning").modal('show');
                    console.log(response.trim());
                } else {
                    
                    $("#shopcart").html(response);
                }              

        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }


    });
}