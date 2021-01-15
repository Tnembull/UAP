<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BarangModel;

class Auth extends BaseController
{
    public function __construct()
    {
		helper('number');
        $this->barangModel = new BarangModel();
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $barang = $this->barangModel->findAll();
        $data = [
            'title' => 'Dashboard',
            'barang' => $barang

        ];
        echo view('dashboard', $data);
    }
    public function editprofile()
    {
        $user = $this->userModel->findAll();
        $data = [
            'title' => 'Dashboard',
            'user' => $user

        ];
        echo view('editprofile', $data);
    }
    public function lihatprofile()
    {
        $user = $this->userModel->findAll();
        $data = [
            'title' => 'Lihat Profile',
            'user' => $user

        ];
        echo view('lihatprofile', $data);
    }
    public function update($id)
    {
        if ($bukulama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[buku.judul]';
        }
        if (!$this->validate([
            'kode' => 'required',
            'judul' => $rule_judul,
            'penulis' => 'required',
            'penerbit' => 'required',



        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pages/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $fileSampul = $this->request->getFile('sampul');
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            $namaSampul = $fileSampul->getName();
            $fileSampul->move('img', $namaSampul);
            unlink('img/' . $this->request->getVar('sampulLama'));
        }


        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->pagesModel->save([
            'id' => $id,
            'kode' => $this->request->getVar('kode'),
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul

        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('editprofile');
    }
    public function lihatbarang()
    {
        $barang = $this->barangModel->findAll();
        $data = [
            'title' => 'Lihat Barang',
            'barang' => $barang

        ];
        echo view('lihatbarang', $data);
    }
    public function proseslelang()
    {
        $barang = $this->barangModel->findAll();
        $data = [
            'title' => 'Proses Lelang',
            'barang' => $barang

        ];
        echo view('proseslelang', $data);
    }
    public function delete($id)
    {
        $barang = $this->barangModel->find($id);
        // unlink('assets/image/' . $barang['foto']);
        $this->barangModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to(base_url('auth/lihatbarang'));
    }
    
 
    public function login()
    {
        if (session()->get('id_level')) {
            return redirect()->to('/dashboard');
        }
        helper(['form']);
        $data = [
            'title' => 'Login Page',

        ];
        echo view('/login', $data);
    }
    public function masuk()
    {
        $session = session();
        $model = new UserModel();
        $namauser = $this->request->getVar('namalengkap');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $level = $this->request->getVar('id_level');
        $data = $model->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);

            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data['id'],
                    'namalengkap'     => $data['namalengkap'],
                    'username'     => $data['username'],
                    'email'    => $data['email'],
                    'id_level'     => $data['id_level']
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/auth/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/auth/login');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/auth/login');
    }

    public function register()
    {
        helper(['form']);
        $data = [
            'title' => 'Registrasi Page',

        ];
        return view('register', $data);
    }
    public function save()
    {
        helper(['form']);
        $data = [
            'title' => 'Registrasi Page',

        ];
        //set rules validation form
        $rules = [

            'namalengkap'          => 'required|min_length[3]|max_length[25]',
            'username'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[tb_user.email]',
            'password'      => 'required|min_length[6]|max_length[200]',

        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'namalengkap'     => $this->request->getVar('namalengkap'),
                'username'     => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'id_level' => 2
            ];
            $model->save($data);
            return redirect()->to('login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
    
}