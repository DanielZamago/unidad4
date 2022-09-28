<!DOCTYPE html>
<html lang="en">
<head>

    <?php include "../layouts/head.template.php"; ?>

</head>
<body>
    
    <?php include "../layouts/nav.template.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "../layouts/sidebar.template.php"; ?>
            <!-- CONTENIDO -->
            <div class="col-lg-10 col-sm-12">
                <div class="container-fluid">
                    <div class="border-buttom">
                        <div class="row m-2">
                            <div class="col">
                                <h4>Productos</h4>
                            </div>
                            <div class="col">
                                <button data-bs-toggle="modal" data-bs-target="#createProductModal" class="btn btn-success float-end">
                                    Añador Productos
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-12 p-2">
                            <div class="card" style="width: 18rem;">
                                <img src="../public/ame.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="row">
                                        <a data-bs-toggle="modal" data-bs-target="#createProductModal" href="#" class="btn btn-primary col-6">Editar</a>
                                        <a onclick="remove(this)" href="#" class="btn btn-danger col-6">Eliminar</a>
                                        <a href="details.php" class="mt-2 btn btn-success col-12">Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "../layouts/scripts.template.php"; ?>
    <!-- Modal -->
    <div class="modal fade" id="createProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModelLabel">
                        Modal title
                    </h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php for($i=0;$i<6;$i++): ?>
                        <span class="input-group-text" id="basic-addon1">info</span>
                    <?php endfor; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function remove(target){
            swal({
                title: "Estas seguro?",
                text: "Una vez borrado, no podras recuperar la información!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                swal("El archivo se elimino exitosamente!", {
                    icon: "success",
                });
                } else {
                swal("El archivo continua guardado!");
                }
            });
        }
    </script>

</body>
</html>