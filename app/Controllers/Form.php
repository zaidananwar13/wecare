<?php

namespace App\Controllers;

class Form extends BaseController
{
	public function __construct()
	{
    $this->session = \Config\Services::session();
    
    
	}

  public function post() {
    if(isset($_POST['name'])) {
      $user = new \App\Models\User();
      $status = $user->where('email', $this->request->getPost('email'))->findAll();
      $subject = "[S]" . $this->request->getPost('subject') . "[S]\n";

      $dataKonsul = [
        'id_user' => 0,
        'pertanyaan' => $subject . $this->request->getPost('message'),
      ];

      if(count($status) > 0) {
        $dataKonsul['id_user'] = $status[0]['id_user'];

      }else {
        $data = [
          'nama' => $this->request->getPost('name'),
          'email' => $this->request->getPost('email'),
          'gender' => 'Unidentified',
          'birthday' => null,
          'penyakit' => null,
          'pola_makan' => null,
          'pola_olahraga' => null,
        ];
        $user->insert($data);
        
        $status = $user->where('email', $this->request->getPost('email'))->findAll();

        $dataKonsul['id_user'] = $status[0]['id_user'];
        $subject = "[S]" . $this->request->getPost('subject') . "[S]\n";
        $message = $subject . $this->request->getPost('message');
      }
      
      $konsultasi = new \App\Models\Konsultasi();
      $konsultasi->insert($dataKonsul);
    }else {
      echo "are you lost?"; die;
    }
  }
}