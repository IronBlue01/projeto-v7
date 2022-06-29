$(document).ready(function(){


    $(document).on('click','.delete',function(){

        let result = confirm('Tem certeza que deseja exluir este usuário?');
        if(result){ 
        let id = $(this).attr('data-id');
        window.location.href = `/deleta-usuario/${id}`;
        }
        console.log('heelo');

    });

    //Adiciona mascara no cpf
    $('#cpf').mask('000.000.000-00', {reverse: true});



    $(document).on('click', '.status', function(){

        let text = $(this).text();

        if(text=='Pendente'){
            //requisisção para atualizar o status para pago

            $(this).removeClass('orange');
            $(this).addClass('green');
            $(this).text('Pago');
        }

        if(text=='Pago'){

            //requisisção para atualizar o status para pendente

            $(this).removeClass('green');
            $(this).addClass('orange');
            $(this).text('Pendente');
        }
    });


    $(document).on('dblclick', '.tdcpf', function(){

        let td_id =  $(this).attr('id');
        let valor = $(this).html();

        let input = `<input
        class="block  w-full tdcpf mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
        placeholder="000.000.000-00"
        name="tdcpf"
        id="input_${td_id}"
        data-id-td="${td_id}"
        />`;

        setTimeout(function(){
            $(`#input_${td_id}`).focus();
            $(`#input_${td_id}`).val(valor.trim());
        },200);

        

        $(this).html(input);

        $('#tdcpf').mask('000.000.000-00', {reverse: true});

    });


    $(document).on('focusout', '.tdcpf', function(){

        let valor = $(this).val();
        let td_id = $(this).attr('data-id-td');
        $(`#${td_id}`).html(valor);
    });








});//end function ready