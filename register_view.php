<?php
include('../template/navbar_out.php');
?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4"> Registre</h2>
            <form action="../controller/register_controller.php" method="POST" class="border p-4 bg-light">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom d'usuari</label>
                    <input type="text" name="name" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Usuari</label>
                    <input type="text" name="username" class="form-control"  required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label"> Contrasenya</label>
                    <input type="password" name="pass2" class="form-control" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary"> Enviar</button>
                </div>
                <!-- control error -->
                <div class="mt-3 text-center">
                    <p class="from-label mb-3 text-danger fw-bold fs-6">
                        <?php
                        //aqui cal incloure el codi php per mostrar errors
                        ?>
                    </p>
      
                </div>
            </form>
        </div>
    </div>
</div>

<?php

include ('../template/footer.php');
?>