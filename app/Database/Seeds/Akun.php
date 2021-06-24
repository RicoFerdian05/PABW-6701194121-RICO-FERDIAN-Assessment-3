<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Akun extends Seeder
{
	public function run()
	{
		$data = [
			'username' => 'patrikgp',
			'password'    => '1234',
			'nama_lengkap' => 'Patrik Gunti Pratama',
			'tanggal_lahir' => '20 Maret 2001',
			'jenis_kelamin' => 'Laki-Laki'
		];

		$this->db->query("INSERT INTO Akun (username, password, nama_lengkap, tanggal_lahir, jenis_kelamin) 
		VALUES(:username:, :password:, :nama_lengkap:, :tanggal_lahir:, :jenis_kelamin:)", $data);

		// Using Query Builder
		$this->db->table('Akun')->insert($data);
		
	}
}