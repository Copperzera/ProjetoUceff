<h1>Listar Usuários</h1>
<?php
    $sql = "SELECT ALL * FROM usuarios";

    /* Do BANCO = "SELECIONE todos * da tabela usuarios";*/

    $res = $conn->query($sql);

    /* Resultado = conexão tem que executar a query(sql)*/

    $qtd = $res->num_rows;

    /* quantidade dos usuários = ele pega do RESULTADO o NUMERO DE LINHAS; */
    
    if($qtd > 0){
        /* SE (a quantidade de linhas for > 0){ */

                print "class="search-wrapper";
                print "<label for="search">Localizar Aniversariante</label>">;
                print "<input type="search" id="search";

                print "<table class='table table-hover table-bordered'>";
                print "<tr>";
                print "<th>#</th>";
                print "<th>Nome</th>";
                print "<th>E-Mail</th>";
                print "<th>Data de Nascimento</th>";
                print "<th>Ações</th>";
                print "</tr>";
        while($row = $res->fetch_object()){
        /* laço de Repetição(array vai receber do resultado->vai trazer os dados da consulta e colocar na variável) */
                print "<tr>";
                print "<td>".$row->id."</td>";
                print "<td>".$row->nome."</td>";
                print "<td>".$row->email."</td>";
                print "<td>".$row->data_nasc."</td>";
                print "<td>
                        <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                        <button onclick=\"if(confirm('Tem Certeza que deseja Excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false}\"
                        <button class='btn btn-danger'>Excluir</button>
                        </td>";
                print "</tr>";
        }
        print "</table>";
    }else{
        /* caso não encontrar imprime um alerta */
        print "<p class='alert alert-danger'>Não Encontou Nenhum Resultado!</p>";
    }
    ?>