<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \App\Models\Student|null
     */
    public function model(array $row)
    {
        return new Student([
            'gr_no'                        => $row['gr_no'], // Adjust based on your CSV headings
            'name'                         => $row['name'], 
            'caste'                        => $row['caste'],
            'place_of_birth'              => $row['place_of_birth'],
            'date_of_birth'               => $row['date_of_birth'],
            'last_institution_attended'    => $row['last_institution_attended'],
            'date_of_admission'           => $row['date_of_admission'],
            'class_admitted'              => $row['class_admitted'],
            'conduct'                     => $row['conduct'],
            'remarks'                     => $row['remarks'],
            'extra_field'                 => $row['extra_field'],
            'status'                      => $row['status'] ?? 'Pending',
        ]);
    }
}
