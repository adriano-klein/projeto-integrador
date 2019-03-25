<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
require('../vendor/autoload.php');

class ControllerPagamento extends Controller
{
    public function pagamento(Request $request){

        $dados = $request->only('amount', 'token');

        $pagarme = new \PagarMe\Sdk\PagarMe('ak_test_ONjLYjXZBwQ2h6juQ9M8nBULDEQjrG');

        // $pagarme = new PagarMe\Client('ak_test_ONjLYjXZBwQ2h6juQ9M8nBULDEQjrG');

        $capturedTransaction = $pagarme->transactions()->capture([
            'id' => $dados->amount,
            'amount' => $dados->amount
        ]);

        return response()->json($dados, 200);




        // Pagarme::setApiKey("ak_test_ONjLYjXZBwQ2h6juQ9M8nBULDEQjrG");

        // $transaction = PagarMe_Transaction::findById($dados->token);
        // $transaction->capture($dados->amount);

        // return response()->json($dados, 200);
}

}
