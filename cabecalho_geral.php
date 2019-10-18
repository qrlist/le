<?php
 require __DIR__.'/cabecalho.php';
?>
<?php if (!isset($_SESSION['cpf'])) :?>
<nav>
<div class="ui inverted menu">
  <a class="active item" href="../views/home.php">
    Home
  </a>
  <a class="item" href="../views/usuario_login.php">
    Logar
  </a>
  <a class="item" href="../views/usuario_cadastro.php">
    Cadastrar
  </a>
</div>
</nav>
<?php else: ?>
<nav>
<div class="ui inverted menu">
    <a class="active item" href="../views/home.php">
        Home
    </a>
    <a class="item" href='../controllers/usuario.php?acao=usuario_delete'>
        Deletar conta
    </a>
    <a class="item" href="../views/confirmacao_delete.php">
        Deletar conta teste
    </a>
    <a class="item" href='../views/usuario_editar.php'>
        Editar Informações
    </a>
    <div class="right menu">
        <a href="../controllers/usuario.php?acao=usuario_deslogar" class="ui item">
            Deslogar
        </a>
    </div>
</div>
</nav>
<?php endif; ?>