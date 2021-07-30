<?php

namespace App\Service;

use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class FirstChallengeService
{
    public function getFirstQuestionFromAnInvoice($invoiceId)
    {
        return Product::where('invoice_id', $invoiceId)->sum(DB::raw('quantity * price'));
    }

    public function getFirstQuestionFromAllInvoice()
    {
        return Invoice::withSum('products as total', DB::raw('"products"."quantity"*"products"."price"'))->get()->pluck('total', 'id');
    }

    public function getSecondQuestion()
    {
        return Invoice::with('products')->whereHas('products', function ($query) {
            $query->where('quantity', '>', '100');
        }, '>=', 1)->pluck('id');

    }

    public function getThirdQuestion()
    {
        return Product::whereRaw('quantity * price > ?', [1000000])->get()->pluck('name');
    }
}
