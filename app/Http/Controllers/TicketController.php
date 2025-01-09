<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\TicketType;
use App\Models\Project;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('ticket.ticket', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ticketType = TicketType::all();
        $project = Project::all();
        return view('ticket.create', compact('ticketType', 'project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email'=>'required',
            'title'=>'required',
            'description'=>'nullable',
            'ticket_type'=>'required',
            'project_id'=>'required',
            'status'=>'nullable',
        ]);

        Ticket::create($request->all());
        return redirect()->route('tickets.index')->with('success', 'data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket, $id)
    {
        $ticket = Ticket::find($id);
        return view('ticket.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'status'=>'required',
        ]);

        Ticket::create($request->all());
        return redirect()->route('tickets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
