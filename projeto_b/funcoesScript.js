    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua').value=("");
        document.getElementById('bairro').value=("");
        document.getElementById('cidade').value=("");
        document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
    
    //Máscara telefone
    function formatar(mascara, documento){
      var i = documento.value.length;
      var saida = mascara.substring(0,1);
      var texto = mascara.substring(i);

      if (texto.substring(0,1) != saida){
                documento.value += texto.substring(0,1);
      }
    }

    //Mostrar senha
    jQuery(document).ready(function($) {
        jQuery('#show_senha').click(function(e) {
            e.preventDefault();
            if ( jQuery('#senha').attr('type') == 'password' ) {
                jQuery('#senha').attr('type', 'text');
                jQuery('#show_senha').attr('class', 'fa fa-eye');
            } else {
                jQuery('#senha').attr('type', 'password');
                jQuery('#show_senha').attr('class', 'fa fa-eye-slash');
            }
        });
    });

    //ajax para enviar formulário da página cadastro.php
//    jQuery(document).ready(function(){
//        jQuery('#formcadastro').submit(function(event) {
//             event.preventDefault();
//             // seleciona o botão de submit
//             var botao = $(this).find('input[type="submit"]');
//             // desabilita o botão para evitar multiplos envio
//             botao.prop("disabled", true).val("Enviando..").css('opacity', '0.5');
//             data = jQuery("#formcadastro").serialize();
//             jQuery.ajax({
//                type: "post",
//                url: $(this).attr('action'),
//                dataType: "json",
//                data: data,
//            }).done(function(data){
//                alert(data.status);
//                botao.prop("disabled", false).val("Cadastrar").css('opacity', '1');
//            });
//        });
//    });
    
    //ajax para enviar formulário da página login.php
//    jQuery(document).ready(function(){
//        jQuery('#formesqueceusenha').submit(function(event) {
//             event.preventDefault();
//             // seleciona o botão de submit
//             var botao = $(this).find('input[type="submit"]');
//             // desabilita o botão para evitar multiplos envio
//             botao.prop("disabled", true).val("Enviando..").css('opacity', '0.5');
//             data = jQuery("#formesqueceusenha").serialize();
//             jQuery.ajax({
//                type: "post",
//                url: $(this).attr('action'),
//                dataType: "json",
//                data: data,
//            }).done(function(data){
//                alert(data.status);
//                botao.prop("disabled", false).val("Enviar").css('opacity', '1');
//            });
//        });
//    });
    
    //ajax para enviar formulário da página redefinirsenha.php
//    jQuery(document).ready(function(){
//        jQuery('#formredefinirsenha').submit(function(event) {
//             event.preventDefault();
//             // seleciona o botão de submit
//             var botao = $(this).find('input[type="submit"]');
//             // desabilita o botão para evitar multiplos envio
//             botao.prop("disabled", true).val("Enviando..").css('opacity', '0.5');
//             data = jQuery("#formredefinirsenha").serialize();
//             jQuery.ajax({
//                type: "post",
//                url: $(this).attr('action'),
//                dataType: "json",
//                data: data,
//
//            }).done(function(data){
//                alert(data.status);
//                botao.prop("disabled", false).val("Redefinir").css('opacity', '1');
//            });
//        });
//    });
    