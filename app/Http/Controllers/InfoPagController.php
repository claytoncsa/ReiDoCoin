<?php

namespace App\Http\Controllers;


use App\Moedas;
use Illuminate\Http\Request;
use App\InfoPag;
use Auth;

class InfoPagController extends Controller
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
        echo 'info';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_moeda)
    {
        $model = new InfoPag();
     //   $moeda =  Moedas::pluck('NO_MOEDA', 'ID_MOEDA');
        $moeda = $id_moeda;
        $usuario = Auth::user()->id;
       // $tempo = array("30 minutos"=>"30", "1 hora"=>"60", "3 horas"=>"180", "6 horas"=>"360", "12 horas"=>"720", "24 horas"=>"1440");
        $tempo = array("30"=>"30  minutos", "60"=>"1 hora", "180"=>"3 hora", "360"=>"6 hora", "720"=>"12 horas", "1440"=>"24 horas");
        $valormin = ["0.1"=>0.1,"0.5"=>0.5,"1"=>1];
        //$valormin = [0.1,0.5,1];


       //    dd($usuario);
        //$moedas =  Moedas::all();
       // dd($moeda);

        return view('infopag.create', compact('model', 'moeda','tempo','usuario','valormin'));
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
        $model = new InfoPag();
        $model->ID_USER         = Auth::user()->id;
        $model->ID_MOEDA        = $request->ID_MOEDA;
        $model->NUM_CARTEIRA    = $request->NUM_CARTEIRA;
        $model->TEMPO_PAG       = $request->TEMPO_PAG;
        $model->VALOR_MIN       = $request->VALOR_MIN;

       // $model = $request->all();
        $model->save();

        return redirect()->action('InfoPagController@listar');


    }

    /**
     *
     *
     */
    public function listar(Request $request)
    {
        $id = Auth::user()->id;

        $model = InfoPag::where('ID_USER', '=', $id)
           // ->where('ST_REGISTRO_ATIVO', '=', 'S')
            ->paginate(10);


          //  dd($model);
        if($model->isEmpty()){
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Nenhum tipo de recebimento cadastrado!');

        }

        return view('infopag.listar')->with('model', $model);

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
