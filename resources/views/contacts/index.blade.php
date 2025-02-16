@extends('contacts.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Laravel CRUD Example</h2>
    <div class="card-body">
        
        @if(session('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @endif

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('contacts.create') }}">
                <i class="fa fa-plus"></i> Create New Contact
            </a>
        </div>

        <!-- Bulk XML Import Form (Simple Input) -->
        <form action="{{ route('contacts.import.xml') }}" method="POST" enctype="multipart/form-data" class="mt-3">
            @csrf
            <div class="input-group">
                <input type="file" name="xml_file" class="form-control" accept=".xml" required>
                <button type="submit" class="btn btn-primary">Upload XML</button>
            </div>
        </form>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($contacts as $contact)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{ route('contacts.show', $contact->id) }}">
                                    <i class="fa-solid fa-list"></i> Show
                                </a>
                                <a class="btn btn-primary btn-sm" href="{{ route('contacts.edit', $contact->id) }}">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">There are no contacts available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
        {!! $contacts->links() !!}

    </div>
</div>  

@endsection
