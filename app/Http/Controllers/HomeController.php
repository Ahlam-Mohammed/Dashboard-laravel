<?php

namespace App\Http\Controllers;

use App\Repositories\CustomerRepository;
use App\Repositories\LandingRepository;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $landingRepository;
    private $serviceRepository;
    private $customRepository;

    public function __construct()
    {
        $this->landingRepository = new LandingRepository();
        $this->serviceRepository = new ServiceRepository();
        $this->customRepository  = new CustomerRepository();
    }
    public function index()
    {
        $landing  = $this->landingRepository->getIsActive();
        $services = $this->serviceRepository->getIsActive();
        $comments = $this->customRepository->getAll();

        return view('index', compact('landing','services','comments'));
    }
}
