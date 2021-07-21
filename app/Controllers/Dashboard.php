<?php

namespace App\Controllers;

use App\Models\User;

class Dashboard extends BaseController
{
	private $username;

	public function __construct()
	{	

		$this->session = \Config\Services::session();

		if($this->session->get('role') == 'Admin') {
			$this->username = $this->session->get('username');
		}else {
			
			header('Location: http://localhost/wecare/auth/admin'); die;
		}
	}

	public function index()
	{
		return view('admin/index', ['username' => $this->username]);
	}
	
	public function konsultasi($method = "", $id = "")
	{
		$konsultasi = new \App\Models\Konsultasi();

		$data = [
			'consultations' => $konsultasi->findAll(),
			'username' => $this->username
		];

		if($method != null) {
			switch($method) {
				case "delete":
					$konsultasi->delete($id);

					header('Location: ' . csite_url('dashboard/konsultasi')); die;

					return view('admin/add-feedback', $data);
					break;
				default: echo "are you lost?"; break;
			}
		}
 
		return view('admin/konsultasi', $data);
	}
	
	public function feedback($method = "", $id = "", $sid = "")
	{
		$feedback = new \App\Models\Feedback();

		switch($method) {
			case "add":
				$data = ['id' => $id, 'keluhan' => getKeluhan($id), 'username' => $this->username];
				$request = $this->request->getPost();

				if(isset($request['submit'])) {

					// $feedback->insert([
					// 	'id_balasan' => null,
					// 	'id_admin' => 1,
					// 	'id_konsultasi' => $id,
					// 	'balasan' => $request['balasan'],
					// 	'tanggal' => date("Y-m-d"),
					// 	'username' => $this->username
					// ]);

					$userEmail = getKeluhanUserEmail($id);
					$userName = getKeluhanUserName($id);

					$headerFields = array(
						"<div>
							<h3>Halo,   $userName</h3>
							<p>Semoga sehat selalu ya :)</p><br>
							
							<p>$request[balasan]</p>
							<p>Silahkan balas email ini, atau klik link berikut untuk membalas:
							<a href='http://localhost/wecare?name=$userName&email=$userEmail&subject=Re:wecare-reply'>link</a></p>
							<br>
							
							<p>Terimakasih telah menggunakan layanan kami ^^,</p>
							<p>Admin WeCare</p>
						</div>"
					);


					$email = \Config\Services::email();

					$email->setFrom('kitacare21@gmail.com','kitacare21');
					$email->setTo($userEmail);

					$email->setSubject('Reply from your report');
					$email->setMessage(implode("\r\n", $headerFields));

					$email->send();
					
					return redirect()->to(csite_url('dashboard/konsultasi'));
				}


				return view('admin/add-feedback', $data);
				break;

			case "edit":
				$text = $feedback->find($sid);
				$request = $this->request->getPost();
				$data = [
					'id' => $id, 
					'sid' => $sid, 
					'text' => $text['balasan'],
					'date' => $text['tanggal'],
					'keluhan' => getKeluhan($id),			
					'username' => $this->username
				];

				if(isset($request['submit'])) {

					$feedback->update($sid, [
						'id_admin' => 1,
						'balasan' => $request['balasan'],
						'tanggal' => $request['tanggal']
					]);

					header('Location: ' . csite_url('dashboard/konsultasi')); die;
				}

				return view('admin/edit-feedback', $data);
				break;

			case "delete":
				$feedback->delete($sid);
				header('Location: ' . csite_url('dashboard/konsultasi')); die;

			default: echo "are you lost?"; break;
		}
 
		return view('admin/feedback', ['username' => $this->username]);
	}
	
	public function administrator()
	{
		return view('admin/admin', ['username' => $this->username]);
	}

	public function logout() {
		$this->session->set([]);
		session_destroy();
		
		header('Location: ' . csite_url('auth/admin')); die;
	}
}
