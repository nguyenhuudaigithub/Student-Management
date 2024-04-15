<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     * Get the department name corresponding to the departmentId of the logged-in user.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserDepartment()
    {
        $user = Auth::user();

        if ($user && $user->departmentId) {
            $department = Department::find($user->departmentId);
            if ($department) {
                return response()->json(['department_name' => $department->name], 200);
            } else {
                return response()->json(['error' => 'Department not found'], 404);
            }
        } else {
            return response()->json(['error' => 'User not found or does not have departmentId'], 404);
        }
    }

    /**
     * Get the list of departments for the select dropdown.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDepartmentsForDropdown()
    {
        $departments = Department::all();
        return response()->json(['departments' => $departments], 200);
    }
}
