<div class="modal fade" id="nuevoModal" tabindex="-1" role="dialog" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="nuevoModalLabel">Agregar Terrenos</h5>
            </div>
            <div class="modal-body">
                <form action="vista/guardar4.php" method="POST">
                    <div class="mb-3">
                        <label for="ubicacion">Ubicación:</label>
                        <input type="text" class="form-control" name="ubi" placeholder="Ubicación del Terreno" required>
                    </div>
                    <div class="mb-3">
                        <label for="tipo_propiedad">Tipo de Propiedad:</label>
                        <input type="text" class="form-control" name="tipo_propiedad" placeholder="Tipo de propiedad" required>
                    </div>
                    <div class="mb-3">
                        <label for="vivienda">Vivienda:</label>
                        <input type="text" class="form-control" name="vivienda" placeholder="Tipo de vivienda" required>
                    </div>
                    <div class="mb-3">
                        <label for="costo">Costo:</label>
                        <input type="text" class="form-control" name="cost" placeholder="Costo del Tereno" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>