<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControllerPagamento extends Controller
{
    public function pagamento(Request $request){

        $dados = $request->only('amount', 'token');

            require("vendor/PagarMe.php");

            Pagarme::setApiKey("ak_test_ONjLYjXZBwQ2h6juQ9M8nBULDEQjrG");
        
            $transaction = PagarMe_Transaction::findById($dados->token);
            $transaction->capture($dados->amount);

        return response()->json($dados, 200);
}

}
