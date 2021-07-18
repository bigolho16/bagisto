<?php

namespace ACME\HelloWorld\Http\Controllers\Shop;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HelloWorldController extends Controller
{
    // use DispatchesJobs, ValidatesRequests;

    /**
     * Contains route related configuration
     *
     * @var array
     */
    // protected $_config;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->_config = request('_config');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // return view($this->_config['view']); // o que estava quando executei make-shop-controller e as linhas comentadas acima

        // return view('helloworld::shop.index'); // somente o redirecionamento sozinho
        // $meuPrimeiroCampo = "Enviando...";

        $meuPrimeiroCampo  = core()->getConfigData('helloworld_menu.settings.general_config.meuprimeirocampo');
        
        return view('helloworld::shop.index', compact('meuPrimeiroCampo'));
    }
}
