<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Cart;
use App\Transaction;
use App\TransactionDetail;

use Exception;
use Midtrans\Snap;
use Midtrans\Config;

class CheckoutController extends Controller
{
    public function process(Request $request)
    {
        // save data user
        $user = Auth::user();
        $user->update($request->except('total_price'));

        // process checkout
        $code_transaction = 'BWASTORE-' . mt_rand(0000, 9999);
        $carts = Cart::with(['product', 'user'])
                    ->where('users_id', Auth::user()->id)
                    ->get();

        // create transaction
        $transaction = Transaction::create([
            'users_id' => Auth::user()->id,
            'insurance_price' => 0,
            'shipping_price' => 20000,
            'total_price' => (int) $request->total_price,
            'transaction_status' => 'PENDING',
            'code_transaction' => $code_transaction,
        ]);

        foreach ($carts as $cart) {
            $trx_transaction = 'BWATRX-' . mt_rand(0000, 9999);
            TransactionDetail::create([
                'transactions_id' => $transaction->id,
                'products_id' => $cart->product->id,
                'price' => $cart->product->price,
                'shipping_status' => 'PENDING',
                'resi' => '',
                'code_transaction' => $trx_transaction,
            ]);
        }

        // return dd($transaction);

        // konfigurasi midtrans
        // Set your Merchant Server Key
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction =  config('services.midtrans.isProduction');
        Config::$isSanitized =  config('services.midtrans.isSanitized');
        Config::$is3ds =  config('services.midtrans.is3ds');

        // buat array untuk kirim ke midtrans
        $midtrans = [
            'transaction_details' => [
                'order_id' => $code_transaction,
                'gross_amount' => (int) $request->total_price
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
            'enabled_payments' => [
                'gopay', 'bank_transfer'
            ],
            'vtweb' => []
        ];

        try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;
            
            // Redirect to Snap Payment Page
            return redirect($paymentUrl);
          }
          catch (Exception $e) {
            echo $e->getMessage();
            exit;
          }

    }
    public function callback(Request $request)
    {
        
    }
}
