$(document).ready(function(){


    

$(document).on('click', '.fa-download', function(){
    let arquivo      = $(this).attr('data-file');
    let nome_arquivo = $(this).attr('data-name-file'); 

    window.location.href = `/download/${arquivo}/${nome_arquivo}`;
});



















});//end function ready
  
  