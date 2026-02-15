<?php
include('../template/navbar_app.php');

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <h2 class="text-center mb-4">
                Editant Tasca
            </h2>
            <form action="#" method="POST" class="border p-4 bg-light">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom dela tasca: </label>
                    <input type="text" name="name" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="textarea" class="form-label">Descripció de la tasca</label>
                    <textarea name="description" class="form-control text-start" rows="8"> 
                    </textarea>
                </div>
                <div class="gap-4 d-flex justify-content-center">
                    <input type="submit" class="btn btn-success" value="Desar els canvis">
                </div>
            </form>
        </div>
    </div>
</div>


