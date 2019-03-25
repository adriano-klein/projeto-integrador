<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
require('vendor\autoload.php');

class ControllerPagamento extends Controller
{
    public function pagamento(Request $request){

        $dados = $request->only('amount', 'token');
        
        PagarMe::setApiKey("ak_test_grXijQ4GicOa2BLGZrDRTR5qNQxJW0");

        $transaction = PagarMe_Transaction::findById($dados->token);
        $transaction->capture($dados->amount);

        return response()->json($dados, 200);

    }
}
