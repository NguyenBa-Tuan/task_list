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

        return back()->with('store', 'Đã thêm thành công');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        
        return view('update', compact('task'));
    }

    public function update(Request $request,$id)
    {
        $task = Task::findOrFail($id);

        // dd($task);

        $task->name = $request->name;
        
        $task->save();

        return redirect('/')->with('update', 'Đã cập nhật thành công');

    }

    public function delete($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();
        return back()->with('delete', 'đã xóa thành công');
    }
    
}
