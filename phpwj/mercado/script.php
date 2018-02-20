<script type="text/javascript">
$( document ).ready(function() {
	$("#situacao").bind("click",function(){
		$(this).css({"color":"green"});
		$(this).html("Estabelecimento está Aberto");
	});
	$("#situacao").bind("dblclick",function(){
		$(this).css({"color":"red"});
		$(this).html("Estabelecimento está Fechado");
		
	});


});

</script>