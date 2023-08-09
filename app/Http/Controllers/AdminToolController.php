<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Http\Requests\ImpoetExcelRequest;
use App\Models\User;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use function public_path;

class AdminToolController extends Controller
{
    public function showUsers()
    {
        $users = User::get();
        return view('user.index', compact('users'));
    }

    public function showImportForm()
    {
        return view('user.import');
    }

    public function importExcel(ImpoetExcelRequest $request)
    {
        Excel::import(new UsersImport(), $request->file('excel_file'));
        return redirect()->route('admin.users')->with('success', 'Data imported successfully.');
    }

    public function excelExample()
    {
        return response()->download(public_path('Excel/users_example.xlsx'));
    }

    public function exportExcel()
    {
        return Excel::download(new UsersExport(), 'users.xlsx');
    }

}
