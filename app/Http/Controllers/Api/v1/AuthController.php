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

        // cek user di database
        $user = $this->authRepo->isPegawaiExist($request);
        if (!$user) {
            return ResponseFormatter::error('Maaf, NIP Anda salah atau Anda belum terdaftar. Segera hubungi Superadmin agar dapat menggunakan aplikasi ini');
        }

        // cek password
        if (!$this->authRepo->matchPassword($request, $user)) {
            return ResponseFormatter::error('Maaf, password Anda salah. Silahkan coba kembali atau hubungi Superadmin');
        }

        // proses mendapatkan token
        $data['token'] = $user->createToken(config('app.name'))->plainTextToken;
        $data['token_type'] = 'Bearer';

        return ResponseFormatter::success('Berhasil Login', $data);
    }
}
