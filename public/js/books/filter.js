/* Filtros 16/03/23 ADR */
$(document).ready(function () {
    $('#authorFilter').selectpicker({
        actionsBox: true,
        liveSearch: true,
        size: 4,
        virtualScroll: true,
        sanitize: true,
        noneSelectedText: 'Selecciona un autor...',
        noneResultsText: 'Sin resultados encontrados para: {0}',
        deselectAllText: 'Ninguno',
        selectAllText: 'Todos',
        selectedTextFormat: 'count > 2',
        countSelectedText: '{0} autores seleccionados',
    });

    $('#categorytFilter').selectpicker({
        actionsBox: true,
        liveSearch: true,
        size: 4,
        virtualScroll: true,
        sanitize: true,
        noneSelectedText: 'Selecciona una categoria...',
        noneResultsText: 'Sin resultados encontrados para: {0}',
        deselectAllText: 'Ninguno',
        selectAllText: 'Todos',
        selectedTextFormat: 'count > 2',
        countSelectedText: '{0} categorias seleccionadas',
    });

    filterData();
});

function filterData() {
    $('#books_data').html('');
    $('#charging').css('display', 'block');

    $.ajax({
        url: './filter',
        data: {
            author: $('#authorFilter').selectpicker('val'),
            category: $('#categorytFilter').selectpicker('val'),
            book: $('#bookFilter').val(),
        },
        success: function(data) {
            $('#charging').css('display', 'none');
            $('#books_data').html(data);
        },
        error: function(data) {
            $('#charging').css('display', 'none');
        }
    })
}