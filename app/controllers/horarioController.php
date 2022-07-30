<?php

namespace App\Controllers;

use App\Interfaces\IHorarioService;
use App\Services\HorarioService;
use Libs\Controller;

class HorarioController extends Controller
{
    private readonly HorarioService $_service;

    public function __construct(IHorarioService $service)
    {
        $this->_service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->_service->getAll();
        myEchoPre($data);
    }
}
