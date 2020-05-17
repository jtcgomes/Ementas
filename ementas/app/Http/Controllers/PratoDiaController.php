<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Storage;

use App\PratoDia;


class PratoDiaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hoje = date("Y-m-d");
        $ultimoIntroduzido = PratoDia::where('dia', '=', $hoje)->latest("updated_at")->limit(1)->get();
        //dd($ultimoIntroduzido);
        return view('pratodia.pratododia',compact('ultimoIntroduzido',$ultimoIntroduzido));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hoje = date("Y-m-d");
        $ultimoIntroduzido = PratoDia::where('dia', '<=', $hoje)->latest("updated_at")->limit(1)->get();
        //dd($ultimoIntroduzido);
        return view('pratodia.create',compact('ultimoIntroduzido',$ultimoIntroduzido));
//        return view('pratodia.create');

    }

    public function all()
    {
        $pratodias = PratoDia::all();
        return view('pratodia.all',compact('pratodias',$pratodias));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*echo '<pre>' .
            var_dump([
                $request->sopa1,
                $request->sopa2
            ])
            . '</pre>';
            */
       $validatedData = $request->validate([
            'sopa1' => 'max:100',
            'sopa2' => 'max:100',
            'peixe1' => 'max:100',
            'peixe2' => 'max:100',
            'carne1' => 'max:100',
            'carne2' => 'max:100',
            'sobremesa1' => 'max:100',
            'sobremesa2' => 'max:100',
        ]);

        PratoDia::create($request->all());
       
       // $pratodias = PratoDia::all();
        $ultimoIntroduzido = PratoDia::where('dia', '<=', date("Y-m-d"))->latest("updated_at")->limit(1)->get();
        //dd($request->sopa1);
       // return redirect('pratodia')->with('alert', 'Prato do dia introduzido');
       //return view('pratodia.facebook',compact('pratodias',$pratodias))->with('alert', 'Prato do dia introduzido'); 
       return view('pratodia.facebook',compact('ultimoIntroduzido',$ultimoIntroduzido))->with('alert', 'Prato do dia introduzido');
        //return view('pratodia.pratododia',compact());
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
