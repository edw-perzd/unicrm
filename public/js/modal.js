document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("modal");
    const abrirModal = document.getElementById("abrir-modal");
    const cerrarModal = document.getElementById("cerrar-modal");

    // Asegurar que el modal esté oculto al inicio
    modal.style.display = "none";

    abrirModal.addEventListener("click", function () {
        modal.style.display = "flex";
    });

    cerrarModal.addEventListener("click", function () {
        modal.style.display = "none";
    });

    window.addEventListener("click", function (e) {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });
});
