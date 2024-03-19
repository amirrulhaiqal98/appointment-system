<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard(){

        // $results = ClubType::leftJoin('approvals', 'club_types.id', '=', 'approvals.club_id')
        //     ->select('club_types.type_name', DB::raw('SUM(approvals.budget_request) AS total_budget_request'))
        //     ->groupBy('club_types.type_name')
        //     ->get();
        
        return view('admin.admin_dashboard');
    }

}
