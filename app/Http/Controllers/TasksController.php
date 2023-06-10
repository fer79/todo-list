<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

# Models
use App\Models\Tasks;

class TasksController extends Controller
{
  public function tasksListHeader()
  {
    return view('tasksListHeader');
  }

  public function tasksList(Request $request)
  {
    $isEnded = $request->isEnded;
    $due_date_ini = $request->due_date_ini;
    $due_date_end = $request->due_date_end;
    $end_date_ini = $request->end_date_ini;
    $end_date_end = $request->end_date_end;

    $data = new Tasks();

    $data = ($isEnded == 'N') ? $data->whereNull('end_date') : $data->whereNotNull('end_date');
    if(!empty($due_date_ini)) { $data = $data->where('due_date', '>=', $due_date_ini); }
    if(!empty($due_date_end)) { $data = $data->where('due_date', '<=', $due_date_end); }
    if(!empty($end_date_ini)) { $data = $data->where('end_date', '>=', $end_date_ini); }
    if(!empty($end_date_end)) { $data = $data->where('end_date', '<=', $end_date_end); }
    $data = $data->orderBy('due_date', 'desc')->Paginate(10);

    echo view('tasksList', compact('data'))->render();
    exit;
  }

  public function taskEnd(Request $request)
  {
    # Update end_date
  }

  public function destroyTask(Request $request)
  {
    # Delete from db
  }
}
