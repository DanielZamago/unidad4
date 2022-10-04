<?php
	session_start();

	if (isset($_POST['action'])) {
		switch ($_POST['action']) {
			case 'create':
				$name = strip_tags($_POST['name']);
				$slug = strip_tags($_POST['slug']);
				$description = strip_tags($_POST['description']);
				$features = strip_tags($_POST['features']);
				$brand_id = strip_tags($_POST['brand_id']);

				$target_path = $_FILES['uploadedfile']['tmp_name'];

				$productController = new ProductsController();
				$productController->createProduct($name, $slug, $description, $features, $brand_id, $target_path);

			break; 
			case 'update':
				$name = strip_tags($_POST['name']);
				$slug = strip_tags($_POST['slug']);
				$description = strip_tags($_POST['description']);
				$features = strip_tags($_POST['features']);
				$brand_id = strip_tags($_POST['brand_id']);

				$productController = new ProductsController();
				$productController->editProduct($name, $slug, $description, $features, $brand_id, $id);

			break; 
		}
	}

Class ProductsController{
    public function info(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
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
		//Validar que no atrape un error
		if ( isset($response->code) && $response->code > 0) {
			return $response->data;
		}else{
			return array();
		}
    }

	public function createProduct($name, $slug, $description, $features, $brand_id, $target_path){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_HTTPHEADER => array(
			'Authorization: Bearer ' . $_SESSION['token'],
		),
		CURLOPT_POSTFIELDS => array('name' => $name,
			'slug' => $slug,
			'description' => $description,
			'features' => $features,
			'brand_id' => $brand_id,
			'cover'=> new CURLFILE($target_path)
		),
		));
		// echo $brand_id;
		$response = curl_exec($curl);
		curl_close($curl);
        $response = json_decode($response);

		if (isset($response->code) && $response->code > 0) {
			header("Location:../products?sucess=true");
		}else{
			header("Location:../products?sucess=false");
		}
			
	}

	public function editProduct($name, $slug, $description, $features, $brand_id, $id){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'PUT',
		CURLOPT_POSTFIELDS => 'name='.$name.'&slug='.$slug.'&description='.$description.'&features='.$features.'&brand_id='.$brand_id.'&id='.$id.'',
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$response = json_decode($response);

		if (isset($response->code) && $response->code > 0) {
			header("Location:../products?sucess=true");
		}else{
			header("Location:../products?sucess=false");
		}
	}
}

?>