<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;

class TurmaController extends Controller
{
    private $turma;

    public function __construct(Turma $turma){
        $this->turma = $turma;
    }
}
