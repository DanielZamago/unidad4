<?php 
    include "../layouts/includeProducts.template.php" 
?>


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
                                <button onclick="addProduct()" data-bs-toggle="modal" data-bs-target="#createProductModal" class="btn btn-success float-end">
                                    Añadir Productos
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php if(isset($products) && count($products)>0): ?>
                            <?php foreach($products as $product): ?>
                            
                                <div class="col-md-3 col-sm-12 p-2">
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?php echo $product->cover ?> " class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $product->name ?></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $product->brand->name ?></h6>
                                            <p class="card-text"><?php echo $product->description ?></p>
                                            <div class="row">
                                                <a data-product='<?php echo json_encode($product) ?>' onclick="editProduct(this)" data-bs-toggle="modal" data-bs-target="#createProductModal" href="#" class="btn btn-primary col-6">Editar</a>
                                                <a onclick="remove(<?php echo $product->id ?>)" href="#" class="btn btn-danger col-6">Eliminar</a>
                                                <a href="details.php?slug=<?php echo $product->slug ?>" class="mt-2 btn btn-success col-12">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif ?>
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
                        Añadir producto
                    </h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form enctype="multipart/form-data" method="POST" action="../app/ProductsController.php">
                    
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Product slug" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control"  id="description" name="description" placeholder="Descripcion" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="features" name="features" placeholder="Features" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-3">
                            <label for="" class="">Escoge la Marca de tu producto</label>
                        </div>
                        <div class="btn-group">
                            <select name="brand_id" id="brand_id" class="form-select">
                                <ul class="dropdown-menu">
                                    <?php foreach($array as $brand): ?>
                                        <li><option value="<?php echo $brand->id?>"><?php echo $brand->id. "->".$brand->name ?></option></li>
                                     <?php endforeach ?>
                                </ul>
                            </select>
                        </div>
                        <div class="input-group mb-3 mt-4">
                            <label class="form-label">Imagen del producto</label>
                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control form-control-sm" name="uploadedfile" type="file">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Save changes
                        </button>
                    </div>
                    <input id="input_oculto" type="hidden" name="action" value="create">
                    <input id="id" type="hidden" name="id">
                    //global Token en el modal
                    <input type="hidden" value="<?php echo $_SESSION['global_token'] ?>" name="global_token">

                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function remove(id){
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
                    var bodyFormData = new FormData();
                    bodyFormData.append('id', id);
                    bodyFormData.append('action', 'delete');
                    bodyFormData.append('global_token', '<?php echo $_SESSION['global_token'] ?>');

                    axios.post('../app/ProductsController.php', bodyFormData)
                    .then(function (response){
                        console.log(response);
                    })
                    .catch(function (error){
                        console.log('error')
                    })
                } else {
                    swal("El archivo continua guardado!");
                }
            });
        }

        function addProduct(){
            document.getElementById("input_oculto").value="create";
        }
    
        function editProduct(target){
            document.getElementById("input_oculto").value = "update";
            let product = JSON.parse(target.getAttribute("data-product"));
            console.log(product);
            console.log(product.name);
            document.getElementById("name").value = product.name;
            document.getElementById("description").value = product.description;
            document.getElementById("slug").value = product.slug;
            document.getElementById("features").value = product.features;
            document.getElementById("id").value = product.id;
            
        }
    </script>

</body>
</html>