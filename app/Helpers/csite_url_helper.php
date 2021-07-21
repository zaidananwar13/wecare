<?php 


if(!function_exists('csite_url')) {
	function csite_url($param = '') {
		$site_url = site_url();
		$site_url = explode('/', $site_url);

		array_pop($site_url);

		$site_url = implode('/', $site_url) . '/';

		return $site_url . $param;
	}
	
}

if(!function_exists('generateRandImage')) {
	function generateRandImage($param = '') {
		if($param != '') {
			return "assets/admin/assets/images/faces/face$param";
		}
		
		return "assets/admin/assets/images/faces/face" . rand(1, 27) . '.jpg';
	}
	
}

if(!function_exists('checkReplyStatus')) {
	function checkReplyStatus($param = '') {
		$conn = new mysqli('localhost', 'root', '', 'wecare');


		if(mysqli_num_rows($conn->query("SELECT * FROM balasan where id_konsultasi='$param'")) > 0) {
			return " <i class='mdi mdi-bell mr-2 text-success'></i> Dibalas ";
		}

		return "<i class='mdi mdi-bell-ring mr-2 text-danger'></i> Queue ";
	}
	
}

if(!function_exists('getUserName')) {
	function getUserName($param = '') {
		$model = new \App\Models\User();
		$data = $model->find($param);

		return $data['nama'];
	}
	
}

if(!function_exists('getAdminName')) {
	function getAdminName($param = '') {
		$model = new \App\Models\Admin();
		$data = $model->find($param);

		return $data['username'];
	}
	
}

if(!function_exists('getFeed')) {
	function getFeed($param = '') {
		$model = new \App\Models\Balasan();

		return $model->where('id_konsultasi', $param)->findAll();
	}
	
}

if(!function_exists('getKeluhan')) {
	function getKeluhan($param = '') {
		$model = new \App\Models\Konsultasi();
		$data = $model->find($param);

		return $data['pertanyaan'];
	}
	
}

if(!function_exists('getKeluhanIdUser')) {
	function getKeluhanIdUser($param = '') {
		$model = new \App\Models\Konsultasi();
		$data = $model->find($param);

		return $data['id_user'];
	}
	
}

if(!function_exists('getKeluhanUserEmail')) {
	function getKeluhanUserEmail($param = '') {

		$model = new \App\Models\User();
		$data = $model->find(getKeluhanIdUser($param));

		return $data['email'];
	}
	
}

if(!function_exists('getKeluhanUserName')) {
	function getKeluhanUserName($param = '') {

		$model = new \App\Models\User();
		$data = $model->find(getKeluhanIdUser($param));

		return $data['nama'];
	}
	
}

if(!function_exists('getUserIdFromMail')) {
	function getUserIdFromMail($param = '') {

		$model = new \App\Models\User();
		$data = $model->where('email', $param)->findAll();

		return $data[0]['id_user'];
	}
	
}

if(!function_exists('getStatusMakanFromMail')) {
	function getStatusMakanFromMail($param = '') {

		$model = new \App\Models\User();
		$data = $model->where('email', $param)->findAll();

		return $data[0]['pola_makan'];
	}
	
}

if(!function_exists('getStatusOlahragaFromMail')) {
	function getStatusOlahragaFromMail($param = '') {

		$model = new \App\Models\User();
		$data = $model->where('email', $param)->findAll();

		return $data[0]['pola_olahraga'];
	}
	
}
