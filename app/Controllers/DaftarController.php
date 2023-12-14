<?php

namespace App\Controllers;
use App\Models\PesertaBPJS;

class DaftarController extends BaseController
{
    public function index(): string
    {
        return view('headerBeforeLogin').view('daftar').view('footer');
    }

    public function daftar_action() {
        $model = model(PesertaBPJS::class);
        $nama = $this->request->getPost('nama');
        $nik = $this->request->getPost('nik');
        $alamat = $this->request->getPost('alamat');
        $input_tanggal_lahir = $this->request->getPost('tanggal_lahir');
        $tanggal_lahir = date("Y-m-d H:i:s",strtotime($input_tanggal_lahir));
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');
        $no_telp = $this->request->getPost('no_telp');
        $password = $this->request->getPost('password');
        $no_kartu = rand(1000000000, 9999999999);

        $data_daftar = [
            'no_kartu' => $no_kartu,
            'password' => $password,
            'nama' => $nama,
            'nik' => $nik,
            'alamat' => $alamat,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'no_telp' => $no_telp
        ];
        $model->daftar($data_daftar);
        $data['no_kartu'] = $no_kartu;
        return view('headerBeforeLogin', $data).view('daftarBerhasil').view('footer');
    }
}
