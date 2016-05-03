$(document).ready(function(){
    $("#text").keydown(function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
    
    var text=$("#text").val();
    alert(text);
   $.ajax({
            url: 'chat',
            type: 'post',
            data: {leters: text},
            success: function (data) {
                $(".message").html(data);
                setInterval(function(){ display(); }, 3000);
            }

});
});
});