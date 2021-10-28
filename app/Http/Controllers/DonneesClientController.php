<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\DB;

class DonneesClientController extends Controller
{
    public function index()
    {
        return view('page_acces_donnees', [
        'clients' => DB::table('clients')->paginate(50)
        ]);
    }
}

