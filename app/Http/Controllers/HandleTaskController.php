<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class HandleTaskController extends Controller
{
    //
    public function index()
    {
        $data = Task::all();
        // dd($data);
        return view('tasks', compact('data'));
    }

    public function create()
    {
        return view('tasks');
    }

    public function store(Request $request)
    {
        $dataRq = $request->all();

        // dd($data);

        Task::create($dataRq);

        $data = Task::all();

        echo '<p style="text-align:center;"> đã thêm thành công </p>';
        return view('tasks', compact('data'));
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        
        return view('update', compact('task'));
    }

    public function delete($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();
        return back()->with('delete', 'đã xóa thành công');
    }
    
}
