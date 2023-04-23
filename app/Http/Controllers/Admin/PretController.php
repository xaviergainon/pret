<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PretFormRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Pret;
use App\Models\TypePret;
use Illuminate\Support\Facades\Log;

class PretController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::info('PretController.index:');

        return view('admin.prets.index', [
            'prets' => Pret::orderBy('created_at','desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Log::info('PretController.create:');

        $typePrets = TypePret::all();

        $typePretItems = TypePret::pluck('name', 'id');

        $pret = new Pret() ;
        $pret->fill([
            'dureeaa' => 20,
            'dureemm' => 0,
            'taux' => 3,
            'type_pret_id' => 1
        ]);
       
        $typePretselectedID = $pret->type_pret_id;


        return view('admin.prets.form',[
            'pret' =>  $pret,
            'typePretItems' => $typePretItems,
            'typePretselectedID' => $typePretselectedID
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PretFormRequest $request)
    {
        dd($request);
        $pret = Pret::create($request->validated());
 
        return redirect()->route('admin.pret.index')->with('success', 'Le prêt a été créé');
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
