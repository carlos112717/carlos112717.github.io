function pagine(a){
    $.ajax({
        type:'POST',
        url:'pagine/'+a+'.html',
        success:function(data){
            $("#resp_data").html(data);
        },
        error:function(data){
            $("#resp_data").html('<div class="alert alert-danger">Hubo un problema al cargar la pagina</div>');
        }
    })
    //$(".menu").click();


}