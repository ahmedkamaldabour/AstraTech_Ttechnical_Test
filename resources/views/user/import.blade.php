@extends('inc.master')

@section('content')
    <h1>Import Excel</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

{{--    Donload excel template example--}}
    <a href="{{ route('admin.downloadExample') }}">Download Empty Excel File</a>

    <br><br>

    <form action="{{ route('admin.importExcel') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="excel_file">
        <button type="submit">Import</button>
    </form>
@endsection
