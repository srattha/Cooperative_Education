<?php

namespace App\ Http\ Controllers\ Api;

use Illuminate\ Support\ Facades\ Auth;
use Illuminate\ Support\ Facades\ Hash;

class CompanyController extends Controller {
    

    public function __construct() {
        parent::__construct();
        $this->adminMode = new Admin;
    }
public function index(){
    return "ff";
}


}