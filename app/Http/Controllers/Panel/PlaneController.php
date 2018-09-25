<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Plane;
use App\Models\Brand;
use App\Http\Requests\PlaneStoreUpdateFormRequest;

class PlaneController extends Controller
{
    private $plane;
    private $totalPage = 20;

    public function __construct(Plane $plane)
    {
        $this->plane = $plane;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Listagem de aviões';

        $planes = $this->plane->with('brand')->paginate($this->totalPage);

        return view('panel.planes.index', compact('title', 'planes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar Novo Avião';

        $classes = $this->plane->classes();

        $brands = Brand::pluck('name', 'id');

        return view('panel.planes.create', compact('title', 'classes', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlaneStoreUpdateFormRequest $request)
    {
        $dataForm = $request->all();

        $insert = $this->plane->create($dataForm);

        if($insert){
            return redirect()
                        ->route('planes.index')
                        ->with('success', 'Cadastro realizado com sucesso!');
        } else {
            return redirect()
                        ->back()
                        ->with('error', 'Não foi possível Cadastrar')
                        ->withInput();
        }
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
        $plane = $this->plane->find($id);

        if(!$plane){
            return redirect()->back();
        }

        $classes = $this->plane->classes();

        $brands = Brand::pluck('name', 'id');

        $title = "Editar Avião: {$plane->id}";

        return view('panel.planes.edit', compact('title','plane', 'brands', 'classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlaneStoreUpdateFormRequest $request, $id)
    {

        $plane = $this->plane->find($id);

        if(!$plane){
            return redirect()->back();
        }

        $dataForm = $request->all();

        $update = $plane->update($dataForm);

        if($update){
            return redirect()
                        ->route('planes.index')
                        ->with('success', 'Edição realizada com sucesso!');
        } else {
            return redirect()
                        ->back()
                        ->with('error', 'Não foi possível Editar')
                        ->withInput();
        }
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

    public function search(Request $request)
    {
        $dataForm = $request->except(['_token']);

        $keySearch = $request->key_search;

        $title = 'Resultado de aviões para a pesquisa: ' . $keySearch;

        $planes = $this->plane->search($dataForm, $this->totalPage);

        return view('panel.planes.index', compact('dataForm', 'title', 'planes'));
    }
}
