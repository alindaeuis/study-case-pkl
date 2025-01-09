@extends('templates.navbar')

@section('content-dinamis')
<div class="container mt-5">
<button class="btn btn-success mb-2"><a href="{{ route('ticket_types.create') }}" class="text-white">Tambah</a></button>
<table class="table w-50">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach($ticketTypes as $index => $item)
        <tr>
        <td>{{ $item['id'] }}</td>
        <td>{{ $item['name'] }}</td>
        <td>
            <button class="btn btn-primary"><a href="{{ route('ticket_types.edit') }}" class="text-white">Edit</a></button>
            <button class="btn btn-danger">Hapus</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection