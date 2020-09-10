<?php
namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\ClientModel\ClientModel;


class Client extends BaseController
{
	public function index()
	{
		return view('client/client');
	}

	public function clientMoral() {
		return view('clientMoral');

	}

} 
