<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\TransactionDetail;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        $transactions = TransactionDetail::with(['transaction.user', 'product.galleries'])
                            ->whereHas('product', function($product){
                                $product->where('users_id', Auth::user()->id);
                            });
        // carry adalah sebelumnya
        // item adalah dari transaksi itu sendiri
        $revenue = $transactions->get()->reduce(function($carry, $item){
            return $carry + $item->price;
        });

        $customer = User::count();
            
        return view('pages.dashboard', [
            'transaction_count' => $transactions->count(),
            'transaction_data' => $transactions->get(),
            'revenue' => $revenue,
            'customer' => $customer,
        ]);
    }
}
