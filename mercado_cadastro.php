<?php
require __DIR__.'/cabecalho_geral.php';
require __DIR__."/../conexao/Connection.php";
?>
<script>
    $("#uf").on("change",function(){
        var nome_estado = $("#uf").val();
        $.ajax({
            url:'../controllers/mercado_select.php',
            type:'POST',
            data:{cod_uf:nome_uf},
            beforeSend: function(){
                $("#cidades").html("Carregando...");
            },
            success: function(data){
                $('#cidades').html(data);
            },
            error: function(data){
                $('#cidades').html("Houve um erro ao carregar");
            }
        });
    });
</script>

<body>

    <div class="ui mobile reversed equal width grid footerM">
        <div class="column footerM"></div>
        <div class="column footerM">

            <div class="marginCadM">
                <h1>
                    <div class="ui horizontal divider">
                        Cadastro de mercado
                    </div>
                </h1>
            </div>

            <form class="ui large form" method="post" action="../controllers/mercado.php?acao=mercado_cadastro">
                <div class="ui stacked segment">

                    <div class="field">
                        <label>Nome do mercado</label>
                        <input type="text" placeholder="Ex.: Pague Menos" name="nome_mercado" required>
                    </div>
                    <?php
                    if (isset($_GET['error']) and $_GET['error'] == 'cnpj') {
                        echo '<div class="ui horizontal red">Cnpj ja cadastrado</div>';
                    }
                    ?>
                    <div class="field">
                        <label>CNPJ</label>
                        <input type="text" placeholder="Ex.: 22.333.333/4444.22" name="cnpj" required>
                    </div>

                    <div class="field">
                        <label>Senha</label>
                        <input name="senha_mercado" id="senha" placeholder="Ex: ******" type="password" required>
                    </div>

                    <?php
                    if (isset($_GET['error']) and $_GET['error'] == 'ie') {
                        echo '<div class="ui horizontal red">Inscrição Estadual ja cadastrado</div>';
                    }
                    ?>
                    <div class="field">
                        <label>Inscrição Estadual</label>
                        <input type="text" placeholder="Ex.: 22.333.333/4444.22" name="ie" required>
                    </div>
                    <?php
                    if (isset($_GET['error']) and $_GET['error'] == 'email_mercado') {
                        echo '<div class="ui horizontal red">Email ja cadastrado</div>';
                    }
                    ?>
                    <div class="field">
                        <label>E-mail</label>
                        <input name="email_mercado" id="email" type="text" placeholder="Ex: ivo_reigel@gmail.com" required>
                    </div>

                    <div class="field">
                        <label>Telefone</label>
                        <input type="text" placeholder="Ex.: (00) 1234-5678" name="telefone_mercado" required>
                    </div>

                    <div class="two fields">
                        <div class="eight wide field">
                            <label>UF</label>
                            <select class="ui fluid dropdown" required name="uf" id="uf">
                                <option value="">UF</option>
                                <?php
                                 $conexaos = new Connection();
                                 $recebeConexao = $conexaos->conectar();
                                 $sql_uf = "select * from uf ";
                                 $uf = $recebeConexao->query($sql_uf)->fetch(PDO::FETCH_ASSOC);
                                foreach($uf as $estados){
                                    echo '<option value="'.$estados['cod_uf'].'">'.$estados['nome_mercado'].'</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="field">
                            <label>Cidade</label>
                            <select name="cidade" id="cidades" class="ui fluid dropdown" required>
                        <option value="">Cidade</option>
                    </select>
                        </div>
                    </div>

                    <div class="fields">

                        <div class="eight wide field">
                            <label>Bairro</label>
                            <select class="ui fluid dropdown" name="bairro" required>
                                <option value="">Bairro</option>
                                <option value="AL">Alabama</option>
                            </select>
                        </div>

                        <div class="field">
                            <label>Rua</label>
                            <input placeholder="Ex.: Das Palmeiras" type="text" name="rua" required>
                        </div>

                        <div class="eight wide field">
                            <label>Numero</label>
                            <input type="number" placeholder="Ex.: 365" name="numero" required>
                        </div>

                    </div>

                    <div class="fields">
                        <div class="sixteen wide field">
                            <label>CEP</label>
                            <input type="text" placeholder="Ex.: 12345-67" name="cep" required>
                        </div>
                    </div>



                    <button class="ui fluid large teal submit button bg_secundario" name="cadastrar_mercado">Cadastrar</button>
                </div>

            </form>
        </div>
       <div class="column footerM"></div>
    </div>

</div>
</div>
</div>
</body>
<?php
    require __DIR__.'/footer.php';
?>