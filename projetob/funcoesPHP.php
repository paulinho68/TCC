<?php

    function enviaemail($body, $subject){

        $para = "luana.jcg03@gmail.com";
        $assunto = $subject;
        $mensagem = $body;
        $cabecalho = "Content-type: text/html; charset=ISO 8859-1" . "\r\n";
        $cabecalho .= "from: Mauricio Luminarias<luminariasmauricio@gmail.com>" . "\r\n";

        return $retorno = (mail($para, $assunto, $mensagem, $cabecalho)) ? "true" : "Erro ao enviar email. Tente novamente mais tarde.";

    }

    //Função envia link de confirmação de cadastro
    function linkconfirmacao($chave){
        $subject = 'Link para confirmação do cadastro';
        $body = 'Olá,<br><br>
        Link para confirmar seu cadastro: <a href="http://localhost/MauricioLuminariass/emailconfirmado.php?chave='.$chave.'">http://localhost/MauricioLuminariass/emailconfirmado.php?chave='.$chave.'</a><br><br>
        <strong>ATENÇÂO: O link expira após 30 minutos da hora em que foi solicitado</strong><br><br><br>
        Atenciosamente,<br>
        Maurício Luminárias';
        $retorno = enviaemail($body, $subject);
        $status = ($retorno == "true") ? "Confirme seu cadastro clicando no link enviado para seu email" : $retorno;
        return $status;
    }
    
    //Função envia link de alteração de senha
    function linksenha($chave){
        $subject = 'Link para redefinição de senha';
        $body = 'Olá,<br><br>
        Link para redefinir sua senha: <a href="http://localhost/MauricioLuminariass/redefinirsenha.php?chave='.$chave.'">http://localhost/MauricioLuminariass/redefinirsenha.php?chave='.$chave.'</a><br><br>
        <strong>ATENÇÂO: O link expira após 30 minutos da hora em que foi solicitado</strong><br><br><br>
        Atenciosamente,<br>
        Maurício Luminárias';
        $retorno = enviaemail($body, $subject);
        $status = ($retorno == "true") ? "Email enviado com sucesso" : $retorno;
        return $status;
    }

    //Gerador de chave
    function geradorchave($qtyCaraceters = 20){
        //Letras minúsculas embaralhadas
        $smallLetters = str_shuffle('abcdefghijklmnopqrstuvwxyz');

        //Letras maiúsculas embaralhadas
        $capitalLetters = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');

        //Números aleatórios
        $numbers = (((date('Ymd') / 12) * 24) + mt_rand(800, 9999));
        $numbers .= 1234567890;

        //Junta tudo
        $characters = $capitalLetters.$smallLetters.$numbers;

        //Embaralha e pega apenas a quantidade de caracteres informada no parâmetro
        $key = substr(str_shuffle($characters), 0, $qtyCaraceters);

        //Retorna a chave
        return $key;
    }


?>