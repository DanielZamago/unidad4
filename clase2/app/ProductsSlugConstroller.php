<?php
    // echo $_GET['slug'];
    include_once "config.php";
    $slug;
    if (isset($_POST['global_token']) && ($_POST['global_token'] == $_SESSION['global_token'])){
        if(isset($_GET['slug'])){
            $slug = $_GET['slug'];
            // $productSlugController = new ProductSlugController(); 
            // $productSlugController->infoProduct($slug);
        }
    }

    class ProductSlugController{
        public function infoProduct($slug){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products/slug/'.$slug,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['token'],
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);
            // echo $response;
            if (isset($response->code) && $response->code > 0) {
                return $response->data;
            }else{
                return [];
            }
        }
    }

?>