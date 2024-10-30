<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentsImport;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
class StudentImportController extends Controller
{
    public function index()
    {
        return view('upload_csv');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xlsx,xls|max:2048',
        ]);

        Excel::import(new StudentsImport, $request->file('file'));

        return redirect()->back()->with('success', 'Students imported successfully!');
    }


    public function store(Request $request)
    {
        // Save the data in the students table without validation
        Student::create([
            'gr_no' => $request->input('grno'),
            'name' => $request->input('stud_name'),
            'caste' => $request->input('stud_cast'),
            'place_of_birth' => $request->input('stud_birthplace'),
            'date_of_birth' => $request->input('dob'),
            'last_institution_attended' => $request->input('stud_LastClg'),
            'date_of_admission' => $request->input('stud_adDate'),
            'class_admitted' => $request->input('stud_ClassAdmitted'),
            'conduct' => $request->input('stud_conduct'),
            'remarks' => $request->input('stud_remark'),
            'status' => 'Pending'
        ]);
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Student added successfully!');
    }

    public function studentlist(){
        return view('studel_list');
    }

    public function studentListAjax(Request $request)
    {
        $columns = ['id', 'gr_no', 'name', 'class_admitted']; // Column names from the database
        $query = Student::select(['id', 'gr_no as GRNO', 'name as NAME', 'class_admitted as CLASSADMITTED']);
    
        // Search functionality
        if ($request->has('search') && $request->search['value'] != '') {
            $searchValue = $request->search['value'];
            $query->where(function($q) use ($searchValue) {
                $q->where('gr_no', 'LIKE', "%{$searchValue}%")
                  ->orWhere('name', 'LIKE', "%{$searchValue}%")
                  ->orWhere('class_admitted', 'LIKE', "%{$searchValue}%");
            });
        }
    
        // Get total records without filtering
        $totalData = $query->count();
    
        // Pagination
        $totalFiltered = $query->count(); // For filtered records
        $students = $query->offset($request->start)
                          ->limit($request->length)
                          ->get();
    
        // Prepare data for DataTables
        $data = [];
        foreach ($students as $student) {
            $data[] = [
                'id' => $student->id,
                'GRNO' => $student->GRNO,
                'NAME' => $student->NAME,
                'CLASSADMITTED' => $student->CLASSADMITTED,
                'action' => '<a href="' . route('students.edit', $student->id) . '" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i> Edit</a>
                             <a href="javascript:void(0);" data-id="' . $student->id . '" class="btn btn-danger deletbtn"><i class="fas fa-trash-alt"></i> Delete</a>',
            ];
        }
        
    
        // Return JSON response
        return response()->json([
            'draw' => intval($request->draw),
            'recordsTotal' => intval($totalData),
            'recordsFiltered' => intval($totalFiltered),
            'data' => $data
        ]);
    }
    

public function deleteStudent(Request $request)
{
    $student = Student::find($request->id);
    if ($student) {
        $student->delete();
        return response()->json(['success' => true]);
    }
    return response()->json(['success' => false, 'message' => 'Student not found']);
}

public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('edit_student', compact('student'));
    }

    public function update(Request $request, $id)
    {
     
        $student = Student::find($id);
    
  
        if (!$student) {
            return redirect()->route('studentlist')->with('error', 'Student not found.');
        }
    
    
        $data = $request->only([
            'grno', 'stud_name', 'stud_cast', 'stud_birthplace',
            'dob', 'stud_LastClg', 'stud_adDate', 
            'stud_ClassAdmitted', 'stud_conduct', 'stud_remark'
        ]);
    
        // Update the student record
        $student->update($data);
    
        // Redirect to the student list with a success message
        return redirect()->route('studentlist')->with('success', 'Student Information Updated!');
    }
    
    
}
