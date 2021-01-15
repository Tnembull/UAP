<?php

namespace App\Controllers;
use App\Models\BarangModel;

class web extends BaseController
{
	protected $barangModel;
    public function __construct()
    {
		helper('number');
        $this->barangModel = new BarangModel();
    }

	public function index()
	{
		$barang = $this->barangModel->findAll();
        $data = [
            
            'barang' => $barang

        ];

        echo view('index', $data);
	
    }
    public function tambahbarang()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Barang',
            'validation' => \Config\Services::validation()
        ];
        return view('/tambahbarang', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'nama_barang' => 'required',
            'harga_awal' => 'required',
            'tgl_buka' => 'required',
            'tgl_tutup' => 'required',
            'deskripsi_barang' => 'required',
            'berat' => 'required',

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/web/tambahbarang')->withInput()->with('validation', $validation);
        }
        $fileSampul = $this->request->getFile('foto');
        $fileSampul->move('assets/image');
        $namaSampul = $fileSampul->getName();

        $slug = url_title($this->request->getVar('nama_barang'), '-', true);
        $this->barangModel->save([

            'slug' => $slug,
            'nama_barang' => $this->request->getVar('nama_barang'),
            'foto' => $namaSampul,
            'harga_awal' => $this->request->getVar('harga_awal'),
            'berat' => $this->request->getVar('berat'),
            'tgl_buka' => $this->request->getVar('tgl_buka'),
            'tgl_tutup' => $this->request->getVar('tgl_tutup'),
            'deskripsi_barang' => $this->request->getVar('deskripsi_barang'),

        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/');
    }
	public function about()
	{
        
		return view('about');
	}
	public function detail($slug)
	{
        $data = [
            'title' => 'Detail Barang',
            'barang' => $this->barangModel->getBarang($slug),

        ];
        
        if (empty($data['barang'])) {
            throw new \Codeigniter\Exceptions\PageNotFoundException('Barang ' . $slug . 'tidak ditemukan');
        }
		return view('detail', $data);
	}
	public function keranjang()
	{
		return view('keranjang');
	}
	public function kontak()
	{
		return view('kontak');
	}
	public function checkout()
	{
		return view('checkout');
	}
	public function pembayaran()
	{
		return view('pembayaran');
	}
	
}
