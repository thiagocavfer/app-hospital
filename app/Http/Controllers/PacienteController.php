<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PacienteController extends Controller
{
    public static function exibirPaciente()
    {
        return 'Esse é um paciente';
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {

            $novoEndereco = Endereco::create([
                'logradouro' => $request->logradouro,
                'numero' => $request->numero,
                'complemento' => isset($request->complemento)
                    ? $request->complemento
                    : '',
                'cep' => $request->cep,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade,
                'uf' => $request->uf,
            ]);

            if (!$novoEndereco instanceof Endereco) {
                throw new \Exception('O novo endereço não pode ser cadastrado.');
            }

            $novoPaciente = Paciente::create([
                'endereco_id' => $novoEndereco->id,
                'nome' => $request->nome,
                'sexo' => $request->sexo,
                'email' => $request->email,
                'telefone' => $request->telefone,
                'data_nascimento' => $request->data_nascimento,
            ])
                ->with('endereco')
                ->first();

            DB::commit();

            return response()->json($novoPaciente, 200);                                 

        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(
                $th->getMessage(),
                403
            );
        }
    }
}
