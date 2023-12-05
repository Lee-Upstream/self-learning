<?php

namespace App\Http\Controllers;

// namespace App\Http\functions1; // Example of other namespace  

use Illeminate\Foundation\Bus\DispathchesJobs;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController; // import some class to the namespace 

class Controller extends BaseController {
    use AuthorizesRequests, ValidatesRequests;
}

// A easy way to create a new controller is run the following command in the terminal: 
//    php artisan make:controller PostsController  
//    
//   Create controller using reources:  php artisan make:controller --resource PostsController