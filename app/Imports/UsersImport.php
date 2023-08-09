<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\User;
use Maatwebsite\Excel\Concerns\WithValidation;

/**
 *
 */
class UsersImport implements ToModel , WithHeadingRow , WithValidation
{
    public function model(array $row)
    {
        return new User([
            'full_name' => $row['full_name'],
            'phone_number' => $row['cell'] ?? $row['phone'] ?? $row['telephone_number'],
            'email' => $row['email'],
        ]);
    }


    public function rules(): array
    {
        return [
            'full_name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'cell' => 'required|numeric|unique:users,phone_number',
        ];
    }
}
