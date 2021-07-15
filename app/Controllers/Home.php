<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('user/index');
	}

	public function profile() {
		return view('user/profile');
	}

	public function check() {
		return view('user/check2');
	}

	public function survey_action(){
		$score = 0;
		$score2 = 0;
		$status = "";
		$statusku = "";
		$q1 = $this->request->getPost('q1');
		$q2 = $this->request->getPost('q2');
		$q3 = $this->request->getPost('q3');
		$q4 = $this->request->getPost('q4');
		$q5 = $this->request->getPost('q5');
		$q6 = $this->request->getPost('q6');
		$q7 = $this->request->getPost('q7');
		$q8 = $this->request->getPost('q8');
		$q9 = $this->request->getPost('q9');
		$q10 = $this->request->getPost('q10');
		$q11 = $this->request->getPost('q11');
		$q12 = $this->request->getPost('q12');
		$q13 = $this->request->getPost('q13');
		$q14 = $this->request->getPost('q14');
		$q15 = $this->request->getPost('q15');
		$q16 = $this->request->getPost('q16');
		$q17 = $this->request->getPost('q17');
		$q18 = $this->request->getPost('q18');

		switch($q1){
			case "2x":
				$score++;
				break;
			case "3x":
				$score += 2;
				break;
			case "4x":
				$score += 3;
				break;
			case "5x":
				$score += 4;
				break;
		}

		switch($q2){
			case "2x":
				$score++;
				break;
			case "3x":
				$score += 2;
				break;
			case "4x":
				$score += 3;
				break;
			case "5x":
				$score += 4;
				break;
		}

		switch($q3){
			case "ya":
				$score++;
				break;
			case "tidak":
				$score += 4;
				break;
		}

		switch($q4){
			case "1/2":
				$score += 2;
				break;
			case "1":
				$score++;
				break;
			case "2":
				$score += 3;
				break;
			case "3":
				$score += 4;
				break;
		}

		switch($q5){
			case "pagi":
				$score += 2;
				break;
			case "siang":
				$score++;
				break;
			case "malam":
				$score += 3;
				break;
			case "ketiganya":
				$score += 4;
				break;
		}

		switch($q6){
			case "beras":
				$score++;
				break;
			case "sagu":
				$score++;
				break;
			case "umbi":
				$score++;
				break;
			case "ketiganya":
				$score++;
				break;
		}

		switch($q7){
			case "ikan":
				$score++;
				break;
			case "daging":
				$score += 2;
				break;
			case "telur":
				$score++;
				break;
			case "susu":
				$score++;
				break;
		}

		switch($q8){
			case "kacang":
				$score += 2;
				break;
			case "tahu":
				$score++;
				break;
			case "sayur":
				$score++;
				break;
			case "tempe":
				$score++;
				break;
		}

		switch($q9){
			case "setiap":
				$score += 4;
				break;
			case "kadang":
				$score += 2;
				break;
			case "jarang":
				$score++;
				break;
			case "tidak":
				$score++;
				break;
		}

		switch($q10){
			case "setiap":
				$score++;
				break;
			case "kadang":
				$score += 2;
				break;
			case "jarang":
				$score += 3;
				break;
			case "tidak":
				$score += 4;
				break;
		}

		switch($q11){
			case "setiap":
				$score++;
				break;
			case "kadang":
				$score += 2;
				break;
			case "jarang":
				$score += 3;
				break;
			case "tidak":
				$score += 4;
				break;
		}

		switch($q12){
			case "setiap":
				$score += 2;
				break;
			case "kadang":
				$score += 1;
				break;
			case "jarang":
				$score += 1;
				break;
			case "tidak":
				$score += 2;
				break;
		}

		switch($q13){
			case "setiap":
				$score += 4;
				break;
			case "kadang":
				$score += 2;
				break;
			case "jarang":
				$score += 2;
				break;
			case "tidak":
				$score += 1;
				break;
		}

		switch($q14){
			case "2":
				$score++;
				break;
			case "3":
				$score += 2;
				break;
			case "4":
				$score += 3;
				break;
			case "5":
				$score += 4;
				break;
		}

		switch($q15){
			case "tidur":
				$score += 4;
				break;
			case "belajar":
				$score += 1;
				break;
			case "nonton":
				$score += 1;
				break;
			case "berat":
				$score += 2;
				break;
		}
		switch($q16){
			case "tidak":
				$score2 += 4;
				break;
			case "jarang":
				$score2 += 3;
				break;
			case "kadang":
				$score2 += 2;
				break;
			case "sering":
				$score2 += 1;
				break;
		}
		switch($q17){
			case "singkat":
				$score2 += 4;
				break;
			case "sedang":
				$score2 += 3;
				break;
			case "panjang":
				$score2 += 2;
				break;
			case "sangat":
				$score2 += 1;
				break;
		}
		switch($q18){
			case "ringan":
				$score2 += 4;
				break;
			case "sedang":
				$score2 += 3;
				break;
			case "agak":
				$score2 += 2;
				break;
			case "berat":
				$score2 += 1;
				break;
		}
		if ($score > 0){
			if ($score <= 20){
				$answer = [
					'status' => 'Sehat'
				];
			} else if ($score <= 40){
				$answer = [
					'status' => 'Kurang Sehat'
				];
				// $status = "Kurang Sehat";
			} else{
				$answer = [
					'status' => 'Tidak Sehat'
				];
				// $status = "Tidak sehat";
			}
		}else{
			$answer = [
				'status' => 'Gagal'
			];
			// $status = "Gagal";
		}
		
		if ($score2 > 0){
			if ($score2 <= 6){
				$answer2 = [
					'statusku' => 'Sehat'
				];
			} else if ($score2 <= 10){
				$answer2 = [
					'statusku' => 'Kurang Sehat'
				];
				// $statusku = "Kurang Sehat";
			} else{
				$answer2 = [
					'statusku' => 'Tidak Sehat'
				];
				// $status = "Tidak sehat";
			}
		}else{
			$answer2 = [
				'statusku' => 'Gagal'
			];
			// $status = "Gagal";
		}
		return view('user/profile', $answer, $answer2);

		//DBmodel ($status)
	}
	
}
