<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        $employees = [
            [
                'employee_id' => 'EMP001',
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '081234567890',
                'department' => 'IT',
                'position' => 'Software Developer',
                'salary' => 8000000,
                'hire_date' => '2023-01-15',
                'status' => 'active'
            ],
            [
                'employee_id' => 'EMP002',
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'phone' => '081234567891',
                'department' => 'HR',
                'position' => 'HR Manager',
                'salary' => 7000000,
                'hire_date' => '2023-02-20',
                'status' => 'active'
            ],
            [
                'employee_id' => 'EMP003',
                'name' => 'Bob Johnson',
                'email' => 'bob@example.com',
                'phone' => '081234567892',
                'department' => 'Finance',
                'position' => 'Accountant',
                'salary' => 6000000,
                'hire_date' => '2023-03-10',
                'status' => 'cuti'
            ],
            [
                'employee_id' => 'EMP004',
                'name' => 'Alice Brown',
                'email' => 'alice@example.com',
                'phone' => '081234567893',
                'department' => 'Marketing',
                'position' => 'Marketing Specialist',
                'salary' => 5500000,
                'hire_date' => '2023-04-05',
                'status' => 'berhenti'
            ],
            [
                'employee_id' => 'EMP005',
                'name' => 'Charlie Wilson',
                'email' => 'charlie@example.com',
                'phone' => '081234567894',
                'department' => 'IT',
                'position' => 'System Administrator',
                'salary' => 7500000,
                'hire_date' => '2023-05-12',
                'status' => 'active'
            ]
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}