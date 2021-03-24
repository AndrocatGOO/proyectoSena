// Cart.js
$(function() {
    $(document).on("click", "#eliminar", function() {
        $(this).parent().parent().remove();
        obtenerTotal()
    });
});

$(function() {
    $(document).on("keyup", "input[name*=cantidad]", function() {
        var subTotal = $(this).val() * $(this).closest("tr").find("td:eq(1)").html();
        $(this).closest("tr").find("td:eq(3)").html("$" + subTotal + '.000');    
        obtenerTotal()
    });    
});


function obtenerTotal() {
    var total = 0;
    $("tbody tr").each(function () {
        total = total + Number($(this).find("td:eq(3)").html());
    });
    $("#total").html("$" + total + ".000");
}

obtenerTotal();


