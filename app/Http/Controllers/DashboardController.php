<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEmployees = Employee::count();
        $activeEmployees = Employee::active()->count();
        $cutiEmployees = Employee::cuti()->count();
        $berhentiEmployees = Employee::berhenti()->count();

        return view('dashboard', compact(
            'totalEmployees',
            'activeEmployees', 
            'cutiEmployees',
            'berhentiEmployees'
        ));
    }
}