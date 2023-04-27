
<?php
    /* Pagina com o CRUD */

        switch ($_REQUEST["acao"]) {

            /*esse switch recebe a ação que vou receber do novo-usuario.php*/
            /* OBS: que está Oculto(Hidden) linha 3 */

            case 'cadastrar':

                /*Próximo passo é receber os dados do novo-usuario.php */

                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = md5($_POST["senha"]);  
                /* OBS: nesse caso estou usando a função MD5 de criptografia na senha, pois se não ela é totalmente exposta no banco*/

                $data_nasc = $_POST["data_nasc"];

                $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

                $res = $conn->query($sql);
                /* Variável de Resultado = conexão -> execução da query que é o (SQL);*/

                if($res==true){
                    /* SE(O resultado for Verdadeiro) 
                    Abaixo ele irá Confirmar e Redirecionar*/
                    print "<script>alert('Cadastro Realizado com Sucesso!');</script>";
                    print "<script>location.href='?page=listar';</script>";
                }else{
                    /*caso não ser possível, Redirecionar também*/
                    print "<script>alert('Não Foi Possível Cadastrar!');</script>";
                    print "<script>location.href='?page=listar';</script>";
                }
               break;

            case 'editar':
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = md5($_POST["senha"]);  
                $data_nasc = $_POST["data_nasc"];

                $sql = "UPDATE USUARIOS SET
                                nome='{$nome}',
                                email='{$email}',
                                senha='{$senha}',
                                data_nasc='{$data_nasc}' /*Sempre Virgula*/
                            WHERE
                                id=".$_REQUEST["id"]; 

                $res = $conn->query($sql);

                if($res==true){
                    print "<script>alert('Editado com Sucesso!');</script>";
                    print "<script>location.href='?page=listar';</script>";
                }else{
                    print "<script>alert('Não Foi Possível Editar!');</script>";
                    print "<script>location.href='?page=listar';</script>";
                }
                break;

            case 'excluir':

                $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

                $res = $conn->query($sql);

                if($res==true){
                    print "<script>alert('Excluído com Sucesso!');</script>";
                    print "<script>location.href='?page=listar';</script>";
                }else{
                    print "<script>alert('Não Foi Possível Excluir!');</script>";
                    print "<script>location.href='?page=listar';</script>";
                }

                break;
        }