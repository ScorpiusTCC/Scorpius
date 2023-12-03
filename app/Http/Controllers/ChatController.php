<?php

namespace App\Http\Controllers;

use App\Models\Conversa;
use App\Models\Mensagem;
use App\Models\ParticipanteConversa;
use App\Models\User;

class ChatController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->id());

        return view('site/chat', compact('user'));
    }

    public function obterDadosConversas()
    {
        try {
            $idUsuario = auth()->id();

            $conversas = Conversa::all();

            $dados = [];

            foreach ($conversas as $conversa) {
                $user = ParticipanteConversa::where('id_conversa', $conversa->id_conversa)
                    ->where('id_user', '!=', $idUsuario)
                    ->get();

                $dados[$conversa->id_conversa] = $user;
            }

            return response()->json(['dados' => $dados]);
        } catch (\Exception $e) {
            return response()->json(['msg' => 'Erro ao obter dados de conversas: ' . $e->getMessage()], 500);
        }
    }

    public function carregarMensagens()
    {
        try {
            $limit = 10;
            $offset = request('offset', 0);
            $idConversa = request('id_conversa');

            if (!$idConversa) {
                return response()->json(['status' => false, 'msg' => 'Parâmetro id_conversa ausente']);
            }

            $mensagens = Mensagem::where('id_conversa', $idConversa)
                ->orderByDesc('id_msg')
                ->limit($limit)
                ->offset($offset)
                ->get();

            $qtdMensagens = count($mensagens);

            $totalMensagens = Mensagem::where('id_conversa', $idConversa)
                ->count();

            if ($qtdMensagens > 0) {
                $retorno = ['status' => true, 'dados' => $mensagens, 'qtd_msg' => $qtdMensagens, 'qt_total_msg' => $totalMensagens];
            } else {
                $retorno = ['status' => false, 'msg' => 'Todas as mensagens foram carregadas!'];
            }
        } catch (\Exception $e) {
            $retorno = ['status' => false, 'msg' => 'Erro ao carregar mensagens: ' . $e->getMessage()];
        }

        return response()->json($retorno);
    }
}
