<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use App\Http\Requests\StoreBuyRequest;
use App\Http\Requests\UpdateBuyRequest;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user()->id;

        $buys = Buy::where('user_id', $user)->get();

        return view('routes.buy.index', compact('buys'));
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
     * @param  \App\Http\Requests\StoreBuyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuyRequest $request)
    {   
        $buy = new Buy();

        $buy->user_id = auth()->user()->id;
        $buy->book_id = $request->book_id;

        $precio = $request->precio;
        $cantidad = $request->cantidad;
        $total = $precio * $cantidad;

        $buy->total = $total;
        $buy->cantidad = $cantidad;
        $buy->envio = $request->envio;
        $buy->pago = $request->pago;
        $buy->forma_envio = $request->forma_envio;
        $buy->status = 1;

        $buy->save();

        /* $book = Book::find($request->book_id);
        $id = $book->number->id;

        $number = Number::find('book_id', $id);

        $ejemplares = $number->numero_ejemplares;
        $resta = $ejemplares - $cantidad;
        $number->numero_ejemplares = $resta;
        $number->save(); */

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function show(Buy $buy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function edit(Buy $buy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBuyRequest  $request
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBuyRequest $request, Buy $buy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buy $buy)
    {
        //
    }
}
