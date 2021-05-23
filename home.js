function init() {}

$(document).ready(() => {
    $.post("controllers/pelicula.php?op=listar", (data) => {
        $("#cartelera").html(data);
    });
});

init();