<?php require __DIR__.'/cabecalho_geral.php';?>
	
	<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
    decisao = confirm("Você tem certeza que deseja excluir sua conta?");
    if (decisao){
      usuario_delete();
      alert ("Conta excluida");
    }
  </SCRIPT>
