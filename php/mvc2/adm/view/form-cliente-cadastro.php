<?php
    include "topo.php";
	include "menu.php";
?>

<div class="container">
    
	<form class="form-horizontal" method="post" action="controller.php?acao=cliente-cadastrar">
<fieldset>

<!-- Form Name -->
<legend>Meu Cadastro</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="matricula">Matricula</label>  
  <div class="col-md-2">
  <input value="<?php echo $dados['matricula']; ?>" id="matricula" name="matricula" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpf">CPF</label>  
  <div class="col-md-2">
  <input value="<?php echo $dados['cpf']; ?>" id="cpf" name="cpf" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-4">
  <input value="<?php echo $dados['nome']; ?>" id="nome" name="nome" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="endereco">Endereço</label>  
  <div class="col-md-5">
  <input value="<?php echo $dados['endereco']; ?>" id="endereco" name="endereco" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numero_endereco">Número:</label>  
  <div class="col-md-1">
  <input value="<?php echo $dados['numero_endereco']; ?>" id="numero_endereco" name="numero_endereco" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="bairro">Bairro</label>  
  <div class="col-md-2">
  <input value="<?php echo $dados['bairro']; ?>" id="bairro" name="bairro" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cidade">Cidade</label>  
  <div class="col-md-2">
  <input value="<?php echo $dados['cidade']; ?>" id="cidade" name="cidade" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cep">CEP</label>  
  <div class="col-md-1">
  <input value="<?php echo $dados['cep']; ?>" id="cep" name="cep" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone">Telefone</label>  
  <div class="col-md-2">
  <input value="<?php echo $dados['telefone']; ?>" id="telefone" name="telefone" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="celular">Celular</label>  
  <div class="col-md-2">
  <input value="<?php echo $dados['celular']; ?>" id="celular" name="celular" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">E-mail</label>  
  <div class="col-md-4">
  <input value="<?php echo $dados['email']; ?>" id="email" name="email" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senha">Senha</label>  
  <div class="col-md-4">
  <input value="<?php echo $dados['senha']; ?>" id="senha" name="senha" type="password" placeholder="" class="form-control input-md">
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cadastrar"></label>
  <div class="col-md-4">
    <button id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
  </div>
</div>

</fieldset>
</form>


</div>