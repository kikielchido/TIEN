$(document).ready(inicio)
function inicio(){
$(".botoncompra").click(anade)
$("#carrito").load("php/poncarrito.php");
}
function anade(){
    var idnumero = $(this).val();
    var cantidad = $("#num"+idnumero).val();
    //alert(cantidad);
    $("#carrito").load("php/poncarrito.php?p="+$(this).val()
+"&cant="+cantidad);
}