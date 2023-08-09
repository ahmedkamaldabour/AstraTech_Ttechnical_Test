@extends('inc.master')

@section('content')
    <h1>User Data</h1>

    <a href="{{ route('admin.exportExcel') }}">Download Excel</a>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Phone Number</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->full_name }}</td>
                <td>{{ $user->phone_number }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
