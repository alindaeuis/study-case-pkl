@extends('templates.app')

@section('content')
<div class="container">
  <form action="{{ route('tickets.store') }}" method="POST" class="w-50 mt-5">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="name" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">email</label>
      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">title</label>
      <input type="title" name="title" class="form-control" id="title" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">description</label>
      <input type="description" name="description" class="form-control" id="description" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Ticket_id</label>
      <select name="ticket_type" id="ticket_tyoe" class="form-select">
        <option selected disabled>Pilih Tiket</option>
        @foreach ($ticketType as $ticket)
          <option value="{{ $ticket->id }}">{{ $ticket->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Ticket_id</label>
      <select name="project_id" id="project_id" class="form-select">
        <option selected disabled>Pilih Tiket</option>
        @foreach ($project as $item)
          <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
@endsection