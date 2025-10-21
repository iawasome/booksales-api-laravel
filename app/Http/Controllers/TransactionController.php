<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['customer', 'book'])->get();

        return response()->json([
            'status' => 'success',
            'data' => $transactions
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'total_amount' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 400);
        }

        $transaction = Transaction::create([
            'order_number' => 'ORD-' . Str::uuid(),
            'customer_id' => Auth::id(),
            'book_id' => $request->book_id,
            'total_amount' => $request->total_amount,
        ]);

        return response()->json([
            'status' => 'success',
            'data' => $transaction
        ], 201);
    }

    public function show(Transaction $transaction)
    {
        if (Auth::id() !== $transaction->customer_id && Auth::user()->role !== 'admin') {
            return response()->json([
                'status' => 'error',
                'message' => 'Forbidden. You do not own this transaction.'
            ], 403);
        }

        $transaction->load(['customer', 'book']);

        return response()->json([
            'status' => 'success',
            'data' => $transaction
        ]);
    }

    public function update(Request $request, Transaction $transaction)
    {
        if (Auth::id() !== $transaction->customer_id) {
             return response()->json([
                'status' => 'error',
                'message' => 'Forbidden. You do not own this transaction.'
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'total_amount' => 'numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 400);
        }

        $transaction->update($request->only(['total_amount']));

        return response()->json([
            'status' => 'success',
            'data' => $transaction
        ]);
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Transaction deleted successfully'
        ]);
    }
}