<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


/** 
 * Creation du controlleur de l'administrateur 
 * qui va gerer les requêtes de l'administrateur et appeler les modèles et les vues propres a l'admin.
 * 
 * */ 

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.admin_dashboard');

    }//Fin Methode AdminDashboard
}
