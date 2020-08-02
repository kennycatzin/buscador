$(function() {

    // Single Select
    $("#autocomplete").autocomplete({
        source: function(request, response) {
            // Fetch data
            $.ajax({
                url: "data/fetchData.php",
                type: 'post',
                dataType: "json",
                data: {
                    buscar: request.term
                },
                success: function(data) {
                    response(data);
                }
            });
        },
        select: function(event, ui) {
            // Set selection
            $('#autocomplete').val(ui.item.label);
            $('#user_id').val(ui.item.value);
            accion();
            return false;
        }
    });
});

function split(val) {
    return val.split(/,\s*/);
}

function accion() {
    var id = $("#user_id").val();
    alert("listo para obtener la información de la persona" + id);
}

function extractLast(term) {
    return split(term).pop();
}