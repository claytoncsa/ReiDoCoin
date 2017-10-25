<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moedas;
use Illuminate\Support\Facades\DB;

class MoedasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $model =  DB::table('tb_moedas')->paginate(10);

       // dd($model);

        return view('moedas.index')->with('model', $model);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Moedas();

        return view('moedas.create', compact('model'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        $model = new Moedas();

        $model->NO_MOEDA     = $request->NO_MOEDA;
        $model->SG_MOEDA     = $request->SG_MOEDA;

        // $model = $request->all();
        $model->save();

        return redirect()->action('MoedasController@listar');

    }

    /**
     * @param Request $request
     * @return $this
     */
    public function listar(Request $request)
    {


        $model =  DB::table('tb_moedas')->paginate(10);


         //dd($model);
        if($model->isEmpty()){
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Nenhum tipo de recebimento cadastrado!');

        }

        return view('moedas.listar')->with('model', $model);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
