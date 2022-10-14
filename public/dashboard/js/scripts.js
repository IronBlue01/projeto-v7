$(document).ready(function(){
    
    //url Base
    const origin = $(location).attr('origin');

    $(document).on('click','.delete',function(){

        let result = confirm('Tem certeza que deseja exluir este usuário?');
        if(result){ 
        let id = $(this).attr('data-id');
        window.location.href = `/deleta-usuario/${id}`;
        }
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
            async: true
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

        //Faz uma requisição para atualizar o CPF
        $.ajax({
            url: origin+`/api/atualiza-cpf`,
            method: 'post',
            dataType: 'json',
            data: {
                id: td_id,
                cpf: valor
            },
            async: true
        });
      
        return false;

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

        $.ajax({
            url: origin+`/api/atualiza-nome`,
            method: 'post',
            dataType: 'json',
            data:{
                nome: valor,
                id: id
            },
            async: true
        });



        return false;
    });

    $(document).on('click', '.editicon', function(){
        //Usar o id do user para popular o model de edição
        let id_user = $(this).attr('id');

        
        $('#edit_id_cliente').val(id_user);

        //Busca as informações do cliente
        $.ajax({
            url: origin+`/lista-dados-cliente/${id_user}`,
            method: 'get',
            dataType: 'json',
            async: true,
            success: function(response){

                    let dados = response;

                    //Atribui o link ao campo input do user
                    $('#edit_link').val(dados.data.link_drive);

                    if(dados.boleto){
                        $('#label_file').removeClass('hidden');
                        $('#label_dia').removeClass('hidden');
                        $('#label_download').removeClass('hidden');
                        $('#editar_data').val(dados.data_formatada);
                        $('#label_download').attr('data-file', dados.boleto.arquivo);
                        $('#label_download').attr('data-name-file', dados.boleto.nome_arquivo);

                        $('#edit_file').val(dados.boleto.arquivo);
                        $('#name_file').val(dados.boleto.nome_arquivo);

                    }else{
                        $('#label_file').addClass('hidden');
                        $('#label_dia').addClass('hidden');
                        $('#label_download').addClass('hidden');
                    }

            }
        });
            
    });


    $(document).on('click','.box-download', function(){
        let arquivo      = $(this).attr('data-file');
        let nome_arquivo = $(this).attr('data-name-file'); 
        window.location.href = `/download/${arquivo}/${nome_arquivo}`;
    });

    $(document).on('click', '#btn-previous, #btn-next, .btn-number', function(){
        window.location.href = $(this).attr('href');
    });























});//end function ready