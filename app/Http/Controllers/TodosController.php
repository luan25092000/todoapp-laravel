<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Lấy tất cả giá trị trong bảng todos
        $todos=Todo::all();
        return view('todos.index')->with('todos',$todos);//todos là key
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:6|max:12',//bắt buộc nhập,tối thiểu là 6 kí tự và tối đa là 12 kí tự
            'description'=>'required'//băt buộc nhập
        ]);
        $data=$request->all();//lấy tất cả dữ liệu từ request của client
        $todos=new Todo();
        $todos->name=$data['name'];
        $todos->description=$data['description'];
        $todos->completed=false;
        $todos->save();
        session()->flash('success','Created todo successfully.');
        return redirect('todos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        return view('todos.show')->with('todo',$todo);//todo là key  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        return view('todos.edit')->with('todo',$todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'name'=>'required|min:6|max:12',
            'description'=>'required'
        ]);
        $data=$request->all();
        $todo->name=$data['name'];
        $todo->description=$data['description'];
        $todo->save();

        session()->flash('success','Updated todo successfully.');
        return redirect('todos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        session()->flash('success','Deleted todo successfully.');
        return redirect('todos');
    }
    /**Complete todo */
    public function complete(Todo $todo){
        $todo->completed=true;
        $todo->save();
        session()->flash('success','Completed todo');
        return redirect('todos');
    }
}
