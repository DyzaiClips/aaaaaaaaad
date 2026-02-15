<?php
include('../template/navbar_out.php');

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5"> 
            <h2 class="text-center mb-4">Log in</h2>
            <form action="../controller/login_controller.php" method="POST" class="border p-4 bg-light">
                <div class="mb-3">
                    <label for="username" class="form-label">Usuari</label>
                    <input type="text" id="username" name="username" class="form-control"  required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">contrasenya</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>

                <!-- Errors control -->
                <div class="mt-3 text-center">
                    <p class="from-label mb-3 text-danger fw-bold fs-2">
                        <?php
                        
                        //en aquesta etiqueta de php cal incloure el missatge d'error
                        ?>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>


<?php

include('../template/footer.php');
?>