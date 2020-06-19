<?php

namespace App\Http\Controllers\Api\V1;

use Excel;
use App\Residue;
use Illuminate\Http\Request;
use App\Imports\ResiduesImport;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class ResidueApiController extends Controller
{
    private $limit = 10;
    
    public function index(Request $request)
    {
        $this->limit = $request->query('limit', $this->limit);
        return Residue::paginate($this->limit);
    }

    function import(Request $request)
    {
        $this->validate($request, [
            'file'  => 'required|mimes:xls,xlsx'
        ],
        [
            'file.required'    => 'O campo arquivo é obrigatório.',
            'file.mimes'       => 'O arquivo deve ser do tipo: xls, xlsx.',
        ]);

        Excel::import(new ResiduesImport, $request->file('file'));

        return response()->json([
            'success' => 'Excel importado com sucesso.'
        ], Response::HTTP_CREATED);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Residue $residue)
    {
        return $residue;
    }

    public function update(Request $request, Residue $residue)
    {
        $residue->update($request->all());

        return response($residue, Response::HTTP_ACCEPTED);
    }

    public function destroy(Residue $residue)
    {
        $residue->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
