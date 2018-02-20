<div class="container">
  <div class="row">
    <div class="col-md-8">
    </div>
    <div class="col-md-4">
      <button class="btn btn-primary" id="mostrar-cadastro">Inserir Conta</button>
    </div>
  </div>
</div>

<?php  include("cadastrar_planilha.php") ?>
<?php  include("listar_planilha.php") ?>

<script type="text/javascript">
  $( document ).ready(function() {
      $("#mostrar-cadastro").bind("click", function(){

          $(this).hide("slow");
          $("#form-cadastro").show("slow");

      });


      
 
});

</script>
