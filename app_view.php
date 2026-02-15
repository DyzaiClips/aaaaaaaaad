<?php
include('../template/navbar_app.php');

?>

<div class="container mx-auto mt-3 my-6">
    <div class="row mb-4">

        <!-- Comença la fila amb les tasques -->
        <div class="col-md-3 mbok-2">
            <!-- Comença la tasca -->
            <div class="card my-3" style="width: 18rem;">
                <div class="card-body">
                    <!-- Contingut de la tasca -->
                    <h5 class="card-title fw-bold"> NOM DE LA TASCA </h5>
                    <p class="card-text overflow-hidden " style="height:10rem; "> DESCRIPCIÓ DE LA TASCA</p>
                    <div class="d-flex justify-content-center">
                        <a href="./editTask_view.php" class="btn btn-success mx-2">Editar</a>
                        <form action="../controller/deleteTAsk_controller.php" method="post">
                            <input hidden  name="id"  >
                            <input class="btn btn-danger" type="submit" value="Eliminar">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Acaba la tasca -->
        </div>
        <!-- Acaba la fila-->

    </div>


</div>

