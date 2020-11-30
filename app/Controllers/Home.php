<?php 
	namespace App\Controllers;
    use App\Controllers\BaseController;
    use App\Models\HalamanModel;
    use App\Models\BeritaModel;
    use App\Models\AboutModel;

class Home extends BaseController
{
	public function index()
	{
		//buat object dari class UserModel
		$modelberita = new BeritaModel();
		$modelabout = new AboutModel();
		
		//load seluruh data
		$databerita['berita'] = $modelberita->orderBy('id','DESC')->findAll();
		$dataabout['about'] = $modelabout->orderBy('id','DESC')->findAll();

		return view('welcome_message', $databerita, $dataabout);
	}
	public function dashboard($id,$nama)
	{
		echo "Parameter yang diinput adalah = ".$id;
		return view('home_dashboard');
	}
	public function berita($id = null) {
		$model = new BeritaModel();
		$data['berita'] = $model->where('id',$id)->first();

		return view('lihat_lengkap_berita',$data);
	}
	public function bacaberita() {
		$modelberita = new BeritaModel();
		$databerita['berita'] = $modelberita->orderBy('id','DESC')->findAll();

		return view('berita_all',$databerita);
	}
	public function halaman($id = null) {
		$model = new HalamanModel();
		$data['halaman'] = $model->where('id',$id)->first();

		return view('lihat_lengkap_halaman',$data);
	}
	public function bacahalaman() {
		$modelhalaman = new HalamanModel();
		$datahalaman['halaman'] = $modelhalaman->orderBy('id','DESC')->findAll();

		return view('halaman_all',$datahalaman);
	}

	//--------------------------------------------------------------------

}
