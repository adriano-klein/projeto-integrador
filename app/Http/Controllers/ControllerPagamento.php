<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPagamento extends Controller
{
    public function pagamento(){
    
        require("pagarme-php/Pagarme.php");

        Pagarme::setApiKey("ak_test_3LymLK2iDuhUeY617dbMbZ3mnSiMPr");

        $total_formt = $total_pedido_replace(',', '', $total_pedido);

        $transaction = PagarMe_Transaction::findById(data);
        $transaction->capture($total_formt);

    }
}
