<?php

namespace App\Http\Controllers;

use Excel;
use App\Residue;
use Illuminate\Http\Request;
use App\Imports\ResiduesImport;

class ResidueController extends Controller
{
    private $limit = 10;

    public function index(Request $request)
    {
        $this->limit = $request->query('limit', $this->limit);
        $data = Residue::paginate($this->limit);

        return view('residues.index', compact('data'));
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'file'  => 'required|mimes:xls,xlsx'
        ],
        [
            'file.required'    => 'O campo arquivo é obrigatório.',
            'file.mimes'       => 'O arquivo deve ser do tipo: xls, xlsx.',
        ]);
        
        Excel::import(new ResiduesImport, $request->file('file'));
        
        return redirect('residues')->with('success', 'Excel importado com sucesso.');
    }

    public function create()
    {
        // 
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Residue $residue)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Residue $residue)
    {
        //
    }

    public function destroy(Residue $residue)
    {
        //
    }
}
