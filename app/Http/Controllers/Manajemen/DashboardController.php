<?php

namespace App\Http\Controllers\Manajemen;

use App\Http\Controllers\Controller;
use App\Repositories\DashboardRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $dashboardRepo;
    
    public function __construct(DashboardRepository $dashboardRepository) {
        $this->dashboardRepo = $dashboardRepository;
    }

    public function index()
    {
        $data['pageTitle'] = 'Dashboard';
        
        return view('manajemen.dashboard.index', $data);
    }
}
