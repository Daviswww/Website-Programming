$(function(){
    $('#controller_start').on('click',function(){
        $.ajax({         
            url: 'control/tackp.php',
            cache: false,
            dataType: 'String',
            type:'POST',
        }).done(function(res){
            console.log('ready!');
        });
    })
});