<?php

namespace ACME\HelloWorld\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use  ACME\HelloWorld\Models\SupExp;
use Illuminate\Http\Request;

class MeuSupExpController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');

        $this->_config = request('_config');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // return view($this->_config['view']);

        return view('helloworld::admin.index'); // meusupexp
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // return view($this->_config['view']);

        return view('helloworld::admin.create'); // meusupexp/create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estabelecimento = new SupExp();

        $estabelecimento->nome = $request->nome;
        $estabelecimento->endereco = $request->endereco;
        $estabelecimento->save();

        return redirect(route('meusupexp.admin.index')); // p/ o name da rota
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    { // página edit!
        
        $estabelecimento = SupExp::find($id);
        return view('helloworld::admin.edit', compact('estabelecimento')); // mandar p/ outra página

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { // atualizar em si!
        $estabelecimento = SupExp::find($id);

        $estabelecimento->nome = $request->nome;
        $estabelecimento->endereco = $request->endereco;
        $estabelecimento->save();

        return redirect(route('meusupexp.admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estabelecimento = SupExp::find($id);
        $estabelecimento->delete();

        return redirect(route('meusupexp.admin.index'));
    }
}
