<?php

namespace App\Controllers;

use App\Models\Jadwal as ModelsJadwal;
use App\Models\User;

class Jadwal extends BaseController
{
    public function __construct()
    {
    $this->session = \Config\Services::session();
    }

	public function index($id_user = null)
	{
        header("Content-Type: Application/json");
        $model = new ModelsJadwal;

        if($id_user != null) {
            echo json_encode($model->where('id_user', $id_user)->findAll()); die;
        }
        
        echo json_encode($model->findAll()); die;
	}

	public function get($id_user = null)
	{
        header("Content-Type: Application/json");
        $db      = \Config\Database::connect();
        $builder = $db->table('jadwal');
        $builder->select('title, start, end');

        if($id_user != null) {
            $builder->where('id_user', $id_user);
            $query = $builder->get();

            echo json_encode($query->getResult()); die;
        }
        
        $query = $builder->get();

        echo json_encode($query->getResult()); die;
	}

    public function post() {

        $user = new User;
        $user = $user->where('email', $_SESSION['email'])->findAll();
        $id = $user[0]['id_user'];

        if(isset($_POST['title'])) {
            $model = new ModelsJadwal;


            $data = [
                'id_user' => $id,
                'title' => $_POST['title'],
                'start' => $_POST['start'],
                'end' => $_POST['end']
            ];

            $model->insert($data);
        }
    }
}