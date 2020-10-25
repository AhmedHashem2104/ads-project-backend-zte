<?php 

class ImageController extends Image {
    
    public function index ($response , $request , $auth){
        $auth->authenticate();
    }

    public function store($response , $request , $auth){
        $auth->authenticate();
        $data = $request->file('image');
        if($data){
		$new_image_name = time().rand().$data->name;
		$uploaded_image = movePublicPath($data , $new_image_name , 'uploads');
		if ($uploaded_image){
		$query = Image::createORM(['image' => $new_image_name]);
		}
        return $response->json($query);
        
    }
    else{
        return $response->json(['status' => 400 , 'message' => 'Please Insert Image']);
    }
    
}
  public function update($response , $request , $auth){
      $auth->authenticate();
      $data = $request->file('image');
        if($data){
		$new_image_name = time().rand().$data->name;
        $uploaded_image = movePublicPath($data , $new_image_name , 'uploads');
		if ($uploaded_image){
		$query = Image::updateORM(['image' => $new_image_name] , $request->input('id'));
		}
        return $response->json($query);
        
    }
    else{
        return $response->json(['status' => 400 , 'message' => 'Please Insert Image']);
    }
  }

}
?>