<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Branch;

class AdminBranchController extends Controller
{

    /** Admin Create Branch Process **/
    public function AdminCreateBranchProcess(Request $request)  {

      /* Validate First */

      $request->validate([
      'branch_name' => 'required|max:255',
      'branch_sort' => 'required',
      ]);

      /* End Validate */

      $branch = new Branch;
      $branch->branch_name = $request->branch_name;
      $branch->branch_sort = $request->branch_sort;
      $branch->branch_hide = $request->branch_hide;
      $branch->save();

      return redirect()->route('admin-branch');
    }


    /** Admin Edit Branch Process **/
    public function AdminEditBranchProcess(Request $request)  {

      $request->validate([
      'branch_name' => 'required|max:255',
      'branch_sort' => 'required',
      ]);

      $branch = Branch::find($request->branch_id);
      $branch->branch_name = $request->branch_name;
      $branch->branch_sort = $request->branch_sort;
      $branch->branch_hide = $request->branch_hide;
      $branch->save();

      return redirect()->route('admin-branch');
    }


    /** Admin Delete Branch Process **/
    public function AdminDeleteBranchProcess(Request $request)  {
      $branch = Branch::find($request->branch_id);
      $branch->delete();

      return redirect()->route('admin-branch');
    }
}
