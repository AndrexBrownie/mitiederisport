<?php

namespace App\Services;

use App\Interfaces\IHorarioService;
use App\Models\CategoriaModel;
use App\Models\HorarioModel;
use Libs\Database;

class HorarioService implements IHorarioService
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $result = HorarioModel::all();
        return $result;
    }
    public function getAllSimple()
    {
        $result = HorarioModel::select('idhorario', 'turno')->get();
        return $result;
    }

    public function get(int $id)
    {
    }
    public function insert($obj)
    {
    }
    public function update($obj)
    {
    }
    public function delete(int $id)
    {
    }
}
