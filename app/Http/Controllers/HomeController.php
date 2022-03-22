<?php

namespace App\Http\Controllers;

use App\Repositories\CustomerRepository;
use App\Repositories\HousingRepository;
use App\Repositories\LandingRepository;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $landingRepository;
    private $serviceRepository;
    private $customRepository;
    private $housingRepository;

    public function __construct()
    {
        $this->landingRepository = new LandingRepository();
        $this->serviceRepository = new ServiceRepository();
        $this->customRepository  = new CustomerRepository();
        $this->housingRepository = new HousingRepository();
    }
    public function index()
    {
        $landing  = $this->landingRepository->getIsActive();
        $housing  = $this->housingRepository->getIsActive();
        $services = $this->serviceRepository->getIsActive();
        $comments = $this->customRepository->getIsActive();

        return view('index', compact('landing','housing','services','comments'));
    }
}
