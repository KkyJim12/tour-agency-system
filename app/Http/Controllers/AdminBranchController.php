<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Branch;

class AdminBranchController extends Controller
{
    public function AdminCreateBranchProcess(Request $request)  {
      $branch = new Branch;
      $branch->branch_name = $request->branch_name;
      $branch->branch_sort = $request->branch_sort;
      $branch->branch_hide = $request->branch_hide;
      $branch->save();

      return redirect()->route('admin-branch');
    }

    public function AdminEditBranchProcess(Request $request)  {
      $branch = Branch::find($request->branch_id);
      $branch->branch_name = $request->branch_name;
      $branch->branch_sort = $request->branch_sort;
      $branch->branch_hide = $request->branch_hide;
      $branch->save();

      return redirect()->route('admin-branch');
    }

    public function AdminDeleteBranchProcess(Request $request)  {
      $branch = Branch::find($request->branch_id);
      $branch->delete();

      return redirect()->route('admin-branch');
    }
}
