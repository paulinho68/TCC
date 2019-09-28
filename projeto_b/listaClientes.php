<?php 
    //session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Folha de Estilo -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/admStyle.css">
    <title>Maurício Luminárias</title>
</head>

<body>
    
    <?php include 'topo_adm.php'; ?>

    <div id="container" class="box">

        <div class="container">
            <div class="text-start pt-5">
                <a href="#" onclick=goBack() class="btn btn-secondary btn-lg active fas fa-arrow-circle-left" role="button" aria-pressed="true"></a>
            </div>
            <div class="row" style="margin-top:150px;">
                <table class="col-12 text-center table-hover table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Dt Nasc.</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody style="height-max:">

                        <?php
                            $contador = 1;
                            include 'bd/conexao.php';
                            $sql = "SELECT * FROM clientes";
                            $busca = mysqli_query($con, $sql);
                            while ($array = mysqli_fetch_array($busca)) {
                                $id = $array['id'];
                                $nome = $array['nome'];
                                $email = $array['email'];
                                $telefone = $array['telefone'];
                                $celular = $array['celular'];
                                $datadenascimento = $array['datadenascimento'];
                                $dtNasc = explode('-',$datadenascimento);
                                $datadenascimento = $dtNasc[2]. '-' . $dtNasc[1] . '-' . $dtNasc[0];

                                $cep = $array['cep'];
                                $rua = $array['rua'];
                                $numero = $array['numero'];
                                $complemento = $array['complemento'];
                                $bairro = $array['bairro'];
                                $cidade = $array['cidade'];
                                $uf = $array['uf'];
                        ?>

                        <tr>
                            <th><?php echo $id ?></th>
                            <th><?php echo $nome ?></th>
                            <th><?php echo $email ?></th>
                            <th><?php echo $telefone ?></th>
                            <th><?php echo $celular ?></th>
                            <th><?php echo $datadenascimento ?></th>

                            <td>
                                <div class="row">
                                    <div class="col-6">
                                        <a href="?id=<?php echo $id ?>"><i class="fas fa-edit text-secondary"></i></a>
                                    </div>
                                    <div class="col-6">
                                        <a data-toggle="collapse" data-target="#group-of-rows-<?php echo $contador; ?>" aria-expanded="false" aria-controls="group-of-rows-<?php echo $contador; ?>" href="#">
                                            <i class="fas fa-plus text-secondary"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <thead id="group-of-rows-<?php echo $contador; ?>" class="collapse">
                            <tr>
                                <th class="text-secondary" scope="col">CEP</th>
                                <th class="text-secondary" scope="col">Rua</th>
                                <th class="text-secondary" scope="col">Número</th>
                                <th class="text-secondary" scope="col">Complemento</th>
                                <th class="text-secondary" scope="col">Bairro</th>
                                <th class="text-secondary" scope="col">Cidade</th>
                                <th class="text-secondary" scope="col">UF</th>
                            </tr>
                        </thead>

                        <tbody id="group-of-rows-<?php echo $contador; ?>" class="collapse">
                            <tr>
                                <th class="text-secondary"><?php echo $cep ?></th>
                                <th class="text-secondary"><?php echo $rua ?></th>
                                <th class="text-secondary"><?php echo $numero ?></th>
                                <th class="text-secondary"><?php echo $complemento ?></th>
                                <th class="text-secondary"><?php echo $bairro ?></th>
                                <th class="text-secondary"><?php echo $cidade ?></th>
                                <th class="text-secondary"><?php echo $uf ?></th>
                            </tr>
                        </tbody>
                        
                        <?php
                                $contador++;
                            } 
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    
    <!-- JavaScript (Opcional)  -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
