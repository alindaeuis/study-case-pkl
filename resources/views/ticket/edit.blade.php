@extends('templates.app')
@section('content')
<div class="container">
  <form action="{{ route('tickets.update', $ticket->id) }}" method="POST" class="w-50 mt-5">
    @csrf
    <div class="mb-3">
      <label for="status" class="form-label">status</label>
      <input type="status" name="status" class="form-control" id="status" aria-describedby="emailHelp" value="{{ $ticket['status'] }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
@endsection