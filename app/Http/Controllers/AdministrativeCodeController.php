<?php

namespace App\Http\Controllers;

use App\Models\AdministrativeCode;
use App\Http\Requests\AdministrativeCodeRequest;

class AdministrativeCodeController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $administrative_codes = AdministrativeCode::where('active', true)->orderBy('id', 'asc')->paginate(10);
        return view('pages/administrative-codes/home')->with('administrative_codes', $administrative_codes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages/administrative-codes/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdministrativeCodeRequest $request)
    {
        $request->validated();

        AdministrativeCode::create([
            'description' => $request->description,
        ]);

        return redirect('/administrative-codes/')->withSuccess('Código administrativo cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(AdministrativeCode $administrativeCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdministrativeCode $administrativeCode)
    {
        return view('pages/administrative-codes/edit')->with('administrativeCode', $administrativeCode);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdministrativeCodeRequest $request, AdministrativeCode $administrativeCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdministrativeCode $administrativeCode)
    {
        //
    }
}
