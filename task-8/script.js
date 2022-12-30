$('form').on("submit", function (e) {    
    e.preventDefault();
    $.ajax({
        url:"gpa-calculator.php",
        type:"post",
        data: new FormData(this),
        contentType:false,
        cache:false,
        processData: false,
        success: function(data,stutus){
            $('#message').text(JSON.parse(data));
        }
    });
});