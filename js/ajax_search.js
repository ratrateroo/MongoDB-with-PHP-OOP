$(document).ready(function(){
    
    
    $("#searchBar").keyup(function(){
        var search = $(this).val();

        $.post('http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/ajax/search.php', 
        {data_to_send: search}, 
        function(data){
            $("#searchedBooks").empty();
            var arrayOfBooks = data.split(";");
            arrayOfBooks.pop();
            

            //foreach loop

            $.each(arrayOfBooks, function(index, value) {
                var element = '<option value=' + '"' + value + '"' +'> </option>';
                console.log(element);
                element = $.trim(element);
                element = element.replace(/(\r\n|\n|\r)/gm, "");
                $("#searchedBooks").append(element);
            });

        });
    });
});