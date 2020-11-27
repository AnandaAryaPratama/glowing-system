<?php 
	namespace App\Controllers;
    use App\Controllers\BaseController;
    use App\Models\HalamanModel;
    use App\Models\BeritaModel;

class Home extends BaseController
{
	public function index()
	{
		//buat object dari class UserModel
		$modelberita = new BeritaModel();
		
		//load seluruh data
		$data['berita'] = $modelberita->orderBy('id','DESC')->findAll();

		return view('welcome_message', $data);
	}
	public function dashboard($id,$nama)
	{
		echo "Parameter yang diinput adalah = ".$id;
		return view('home_dashboard');
	}

	//--------------------------------------------------------------------

}
