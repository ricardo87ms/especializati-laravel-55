<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\State;

class StateController extends Controller
{
    private $state;

    public function __construct(State $state)
    {
        $this->state = $state;
    }

    public function index()
    {
        $states = $this->state->get();

        $title = "Listagem de Estados Brasileiros";

        return view('panel.states.index', compact('states', 'title'));
    }

    public function search(Request $request)
    {
        $dataForm = $request->all();

        $keySearch = $request->key_search;

        $states = $this->state->search($keySearch);

        $title = "Resultados de Estados: {$keySearch}";

        return view('panel.states.index', compact('dataForm', 'states', 'title'));
    }
}
