<div class="modal fade" id="editaModal" tabindex="-1" aria-labelledby="editaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="editaModalLabel">Editar Cliente</h5>
            </div>
            <div class="modal-body">
                <form action="./vista/datos/actualiza.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id">
                    <div class="mb-3">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email:</label>
                        <input type="email" class="form-control" id="email" autocomplete="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="telefono">Teléfono:</label>
                        <input type="number" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="dni">DNI:</label>
                        <input type="number" class="form-control" id="dni" name="dni" placeholder="DNI">
                    </div>
                    <div class="mb-3">
                        <img id="img_imagen" width="200">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="imagen">Foto:</label>
                        <input type="file" class="form-control" id="imagen" name="imagen" accept="image/jpeg">
                    </div>
                    <div>
                        <button type="button" class="btn btn-secondary me-1" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary ms-1">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAMxJREFUSEvtlesNwjAMhO82gU3oKEzCKIxCN6GbHHJEpDxFXGiFBP5TNU395ezYJjY2buwf+wIknQBcARwcyhYAE0l7VpYpkHQDYBCvdSElQOaZZFiXFN6jNdaPAOxQprgJeQtgQEnmvAtxAcq4JYoyCElTFuwjgGc4DXJPQ/wS4M10zFlU9gOAgcKzq3kmOafXejhEg4W3xFvjzkHrhzTx5fc/oCqLrwzR2nadqptJTr1eZLPgsnImmM+sLqpW4e09I/v3nckjJ/LueQDtotQZpQ08+gAAAABJRU5ErkJggg=="/> Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>