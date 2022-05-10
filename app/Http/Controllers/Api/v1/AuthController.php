<?php

namespace App\Http\Controllers\Api\v1;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Repositories\AuthRepository;

class AuthController extends Controller
{
    private $authRepo;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepo = $authRepository;
    }

    public function login(LoginRequest $request)
    {

        // cek admin di database
        $admin = $this->authRepo->cekAdmin($request);
        if (!$admin) {
            return ResponseFormatter::error('Maaf, anda belum terdaftar. Segera hubungi Superadmin agar dapat menggunakan aplikasi ini');
        }

        // cek password
        if (!$this->authRepo->cekPassword($request, $admin)) {
            return ResponseFormatter::error('Maaf, password Anda salah. Silahkan coba kembali atau hubungi superadmin');
        }

        // proses mendapatkan token
        $data['token'] = $admin->createToken(config('app.name'))->plainTextToken;
        $data['token_type'] = 'Bearer';

        return ResponseFormatter::success('Berhasil Login', $data);

        return ResponseFormatter::errorServer();
    }
}
