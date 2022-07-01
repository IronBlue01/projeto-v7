$(document).ready(function(){
    
    //url Base
    const origin = $(location).attr('origin');

    $(document).on('click','.delete',function(){

        let result = confirm('Tem certeza que deseja exluir este usuário?');
        if(result){ 
        let id = $(this).attr('data-id');
        window.location.href = `/deleta-usuario/${id}`;
        }
        console.log('olá mundo');

    });

    //Adiciona mascara no cpf
    $('#cpf').mask('000.000.000-00', {reverse: true});



    //
    //ALTERNA O STATUS ENTRE PAGO E PENDENTE
    //
    $(document).on('click', '.status', function(){
        let text = $(this).text().trim();
        let id   = $(this).attr('id'); 

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

        $.ajax({
            url: origin+`/api/atualiza-status-pagamento/${id}`,
            method: 'post',
            dataType: 'json',
            async: true,
            success: function(response){
                // console.log(response);
            }
        });
    });


    //
    //DA A OPÇÃO DE EDITAR O CPF DO USER AO CLICAR DUAS VEZES SOBRE ELE
    //
    $(document).on('dblclick', '.tdcpf', function(){

        let td_id =  $(this).attr('id');
        let valor = $(this).html();

        let input = `<input
        class="block  w-50 tdcpf mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none dark:text-gray-300 "
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


    //
    //AO CLICAR FORA DO CAMPO DE INPUT DE EDIÇÃO DO CPF FECHA O CAMPO E ATRIBUI O NOVO VALOR
    //
    $(document).on('focusout', '.tdcpf', function(){
        let valor = $(this).val();
        let td_id = $(this).attr('data-id-td');
        $(`#${td_id}`).html(valor);
    });


    //
    //ABRE O CAMPO PARA EDIÇÃO DO NOME DO USER
    //

    $(document).on('dblclick', '.nomeUser', function(){

        let valor = $(this).text();
        let id       = $(this).attr('data-nome-id');

        let input_nome = `<input
                            class="block tdnome w-full  mt-1 text-sm  dark:bg-gray-700   dark:text-gray-300  "
                            name="tdnome"
                            id="input_nome_${id}"
                            data-id-td-nome="${id}"
                            />`;

        setTimeout(function(){
            $(`#input_nome_${id}`).focus();
            $(`#input_nome_${id}`).val(valor.trim());
        },200);


        $(this).html(input_nome);

    

    });


    //
    //AO CLICAR FORA DO CAMPO DE INPUT DE EDIÇÃO DO CPF FECHA O CAMPO E ATRIBUI O NOVO VALOR
    //
    $(document).on('focusout', '.tdnome', function(){
        let valor = $(this).val();
        let id = $(this).attr('data-id-td-nome');
        $(`#data-nome-id-${id}`).html(valor);
    });

    $(document).on('click', '.editicon', function(){



        //Usar o id do user para popular o model de edição
        let id_user = $(this).attr('id');

        //Busca as informações do cliente
        $.ajax({
            url: origin+`/lista-dados-cliente/${id_user}`,
            method: 'get',
            dataType: 'json',
            async: true,
            success: function(response){

                    console.log(response);


            }
        });
            
    });





























});//end function ready