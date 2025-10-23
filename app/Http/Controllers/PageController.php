<?php

namespace App\Http\Controllers;
use Symfony\Component\VarDumper\VarDumper;

class PageController
{
    private $users = [
        [
            'username' => 'agathon',
            'password' => '123',
            'email' => 'agathon6@gmail.com',
            'foto' => 'agathon.jpg',
            'role' => 'Admin'
        ],
        [
            'username' => 'Darrel',
            'email' => 'darrelfaa@gmail.com',
            'password' => '000',
            'foto' => 'Darrel.jpg',
            'role' => 'Admin'
        ],
        [
            'username' => 'anjay',
            'password' => '111',
            'email' => 'hmmmmm123@gmail.com',
            'foto' => 'anjay.jpg',
            'role' => 'Admin'
        ],
    ];

    public function login()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        $user = collect($this->users)->first(fn($u) => $u['username'] === $username);
        
        if ($user && $user['password'] === $password) {
            return redirect('/dashboard?username=' . urlencode($username));
        } else {
            return redirect('/')->with('login_error', true);
        }
    }

    public function dashboard()
    {
        $username = $_GET['username'] ?? 'Who?';
        $user = collect($this->users)->first(fn($u) => $u['username'] === $username);

        $data_pegawai = [
            ['id'=>1,'nama'=>'Yuji Itadori'], 
            ['id'=>2,'nama'=>'Megumi Fushiguro'], 
            ['id'=>3,'nama'=>'Gojo Satoru'],
            ['id'=>4,'nama'=>'Tobio Kageyama'],
            ['id'=>5,'nama'=>'Budi Hartono'],
        ];

        $jmlData = count($data_pegawai);

        return view('dashboard', [
            'username' => $username,
            'foto' => $user['foto'] ?? 'icon-profile.jpg',
            'email' => $user['email'] ?? 'Guest',
            'jmlData' => $jmlData
        ]);
    }

    public function profile()
    {
        $username = $_GET['username'] ?? 'Who?';
        $user = collect($this->users)->first(fn($u) => $u['username'] === $username);

        return view('profile', [
            'username' => $username,
            'foto' => $user['foto'] ?? 'icon-profile.jpg',
            'role' => $user['role'] ?? 'Guest',
            'email' => $user['email'] ?? 'Guest'
        ]);
    }

    public function pengelolaan()
    {
        $username = $_GET['username'] ?? 'Who?';
        $user = collect($this->users)->first(fn($u) => $u['username'] === $username);

        $data_pegawai = [
            [
                'id' => 1,
                'foto' => 'yuji.jpg',
                'nama' => 'Yuji Itadori',
                'umur' => 25,
                'tanggal_masuk' => 'Januari 15, 2023',
                'posisi' => 'HRD',
                'no_hp' => '08763728273'
            ],
            [
                'id' => 2,
                'foto' => 'fushiguro.jpg',
                'nama' => 'Megumi Fushiguro',
                'umur' => 25,
                'tanggal_masuk' => 'August 10, 2022',
                'posisi' => 'Secretary',
                'no_hp' => '085850273839'
            ],
            [
                'id' => 3,
                'foto' => 'gojo.jpg',
                'nama' => 'Gojo Satoru',
                'umur' => 30,
                'tanggal_masuk' => 'November 25, 2021',
                'posisi' => 'Manager',
                'no_hp' => '081281723934'
            ],
            [
                'id' => 4,
                'foto' => 'kageyama.jpg',
                'nama' => 'Tobio Kageyama',
                'umur' => 22,
                'tanggal_masuk' => 'Mei 01, 2023',
                'posisi' => 'Admin Staff',
                'no_hp' => '087765262823'
            ],
            [
                'id' => 5,
                'foto' => 'midoriya.jpg',
                'nama' => 'Budi Hartono',
                'umur' => 32,
                'tanggal_masuk' => 'September 18, 2020',
                'posisi' => 'Director',
                'no_hp' => '089735372934'
            ],
        ];

        $jmlDataHalaman = 3;
        $jmlData = count($data_pegawai);
        $jmlHalaman = ceil($jmlData / $jmlDataHalaman);
        $halSkrg = isset($_GET['hal']) ? (int) $_GET['hal'] : 1;
        if ($halSkrg < 1) $halSkrg = 1;
        if ($halSkrg > $jmlHalaman) $halSkrg = $jmlHalaman;
        $awalData = ($halSkrg - 1) * $jmlDataHalaman;
        $data_pegawai = array_slice($data_pegawai, $awalData, $jmlDataHalaman);

        return view('pengelolaan', [
            'data_pegawai' => $data_pegawai,
            'halSkrg' => $halSkrg,
            'awalData' => $awalData,
            'jmlDataHalaman' => $jmlDataHalaman,
            'jmlData' => $jmlData,
            'jmlHalaman' => $jmlHalaman,
            'username' => $username,
            'foto' => $user['foto'] ?? 'icon-profile.jpg',
            'email' => $user['email'] ?? 'Guest'
        ]);
    }

    public function contact()
    {
        $username = $_GET['username'] ?? 'Who?';
        $user = collect($this->users)->first(fn($u) => $u['username'] === $username);

        return view('contact', [
            'username' => $username,
            'foto' => $user['foto'] ?? 'icon-profile.jpg',
            'email' => $user['email'] ?? 'Guest'
        ]);
    }
}
