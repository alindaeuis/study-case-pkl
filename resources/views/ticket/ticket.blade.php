@extends('templates.navbar')

@section('content-dinamis')
<div class="container mt-5">
  <button class="btn btn-success mb-2"><a href="{{ route('tickets.create') }}" class="text-white">Tambah</a></button>
  <table class="table ">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Assign_at</th>
          <th scope="col">Ticket Type</th>
          <th scope="col">Status</th>
          <th scope="col">Project_id</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach($tickets as $index => $item)
          <tr>
          <td>{{ $item['id'] }}</td>
          <td>{{ $item['name'] }}</td>
          <td>{{ $item['email'] }}</td>
          <td>{{ $item['title'] }}</td>
          <td>{{ $item['description'] }}</td>
          <td>{{ $item['assign_at'] }}</td>
          <td>{{ $item['ticket_type'] }}</td>
          <td>{{ $item['status'] }}</td>
          <td>{{ $item['project_id'] }}</td>
          <td>
              <button class="btn btn-primary"><a href="{{ route('tickets.edit') }}" class="text-white">Edit</a></button>
              <button class="btn btn-danger">Hapus</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection