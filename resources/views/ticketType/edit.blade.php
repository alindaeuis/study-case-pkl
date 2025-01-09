@extends('templates.app')

@section('content')
<div class="container">
  <form action="{{ route('ticket_types.store', $ticket->id) }}" method="POST" class="w-50 mt-5">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="name" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="{{ $ticket['name'] }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
@endsection