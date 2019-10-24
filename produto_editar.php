<?php
require __DIR__.'/../controllers/usuario.php';
if (isset($_SESSION['logado']) and $_SESSION['logado']){
  require __DIR__.'/cabecalho_geral.php';
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
  <script>
    $(document).ready(function () {
      var $seuCampotelefone = $("#telefone");
      $seuCampotelefone.mask('(00)000000000', {reverse: false});
    })
  </script>
  <div class="ui mobile reversed equal width grid">
    <div class="column"></div>
    <div class="column">

      <div class="marginCad">
        <h1>
          <div class="ui horizontal divider">
            Editar Produto  
          </div>
        </h1>
      </div>

      <form class="ui large form" method="post" action="../controllers/usuario.php?acao=usuario_editar">
        <div class="ui stacked segment">


          <div class="fields">

            <div class="ten wide field">
              <label>Nome do Produto</label>
              <input name="nome_editar" id="nome_produto" type="text" value="<?php echo $_SESSION['primeiro_nome'] ?>" required>
            </div>

            <div class="six wide field">
              <label>Peso Liquido</label>
              <input name="peso_editar" id="peso" placeholder="Ex.: 500g" type="text" required>
            </div>
          </div>
          <div class="field">
            <label>Marca do Produto</label>
            <input name="marca_editar" id="marca" type="text" value="<?php echo $_SESSION['sobrenome'] ?>" required>
          </div>

          <div class="field">
            <label>Preço do Produto</label>
            <input name="preco_editar" id="preco" type="text" value="" required>
          </div>



          <div class="field">
            <label>Descrição do Produto</label>
            <input name="descricao_editar" id="descricao" type="text" value="<?php echo $_SESSION['email'] ?>" required>
          </div>

          <div class="field">
            <label>Categoria do Produto</label>
            <select class="ui fluid dropdown" name="cod_cat" id="categoria" required>
              <option value="">Categoria</option>
              <?php
              $conexaos = new Connection();
              $recebeConexao = $conexaos->conectar();
              $sql_categorias = "select * from categoria_prod; ";
              $categoria = $recebeConexao->query($sql_categorias)->fetchAll(PDO::FETCH_ASSOC);
              foreach ($categoria as $categorias) {
                echo '<option value="' . $categorias['cod_cat'] . '">' . $categorias['nome_cat'] . '</option>';
              }
              ?>
            </select>
          </div>

          <div class="field">
            <label>Foto do Produto</label>
            <input type='file' name='foto_produto' placeholder="Escolha uma imagem"/>
          </div>

          <div class="tiny ui basic button negative right floated del" id="c">
            Deletar conta
          </div>
          <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
          <script>
            $(document).ready(function () {

              $( "#c" ).click(function() {
                var desicao
                var delete_usu = confirm( "Você tem certeza que deseja excluir sua conta?" );
                if (delete_usu == true) {
                  decisao = 1;
                } else {
                 desicao = 0; 
               }
             })
           </script>

           <button type="submit" class="ui fluid large teal submit button bg_secundario" name="editar">Atualizar</button>
         </div>
       </form>

     </div>
     <div class="column"></div>
   </div>
   <br>
   <br>
   <br>



 </body>
 <?php
 require __DIR__.'/footer.php';
}else{
  index();
}