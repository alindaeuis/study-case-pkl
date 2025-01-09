<?php

namespace App\Http\Controllers;

use App\Models\TicketType;
use Illuminate\Http\Request;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticketTypes = TicketType::all();
        return view('ticketType.ticket_type', compact('ticketTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        TicketType::all();
        return view('ticketType.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);

        TicketType::create($request->all());
        return redirect()->route('ticket_types.index')->with('success', 'data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(TicketType $ticketType)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ticket = TicketType::find($id);
        return view('ticketType.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
        ]);

        TicketType::where('id', $id)->update([
            'name'=>$request->name,
        ]);

        return redirect()->route('ticket_types.index')->with('success', 'data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketType $ticketType)
    {
        //
    }
}
