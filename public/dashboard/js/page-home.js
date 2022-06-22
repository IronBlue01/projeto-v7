$(document).ready(function(){


    $(document).on('click','.delete',function(){

        alert('Tem certeza que deseja exluir este usuário?');

        let id = $(this).attr('data-id');

        window.location.href = `/deleta-usuario/${id}`;

    });



});