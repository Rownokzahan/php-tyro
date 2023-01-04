$('form').on("submit", function (e) {    
    e.preventDefault();
    $.ajax({
        url:"calculator-using-function.php",
        type:"post",
        data: new FormData(this),
        contentType:false,
        cache:false,
        processData: false,
        success: function(data,stutus){
            $('#result').html(JSON.parse(data));
        }
    });
});