<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionStatusRequest;
use App\Http\Requests\UpdateTransactionStatusRequest;
use App\Models\TransactionStatus;

class TransactionStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransactionStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactionStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransactionStatus  $transactionStatus
     * @return \Illuminate\Http\Response
     */
    public function show(TransactionStatus $transactionStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransactionStatus  $transactionStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(TransactionStatus $transactionStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionStatusRequest  $request
     * @param  \App\Models\TransactionStatus  $transactionStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionStatusRequest $request, TransactionStatus $transactionStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransactionStatus  $transactionStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransactionStatus $transactionStatus)
    {
        //
    }
}
