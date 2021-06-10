<?php

namespace App\Http\Controllers;

use App\Models\Knygomatas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KnygomatasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $knygomatas = Knygomatas::orderBy('id', 'desc')->get();
        return view('create', compact('knygomatas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
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
            'reader_id' =>'required',
            'reader_phone'=>'required',

        ]);

        $knygomatas =  new Knygomatas();
        $knygomatas->reader_id = $request->reader_id;
        $knygomatas->reader_phone= $request->reader_phone;

        $knygomatas->save();

        return view('index', compact('knygomatas'));
    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
     function show()
    {

        $data = Knygomatas::orderBy('id', 'desc')->get();

        return view('valdymas', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $knygomatas = Knygo::findOrFail($id);
        $statuses = [
            [
                'label' => 'Laukiama',
                'value' => 'Laukiama',
            ],
            [
                'label' => 'Atlikta',
                'value' => 'Atlikta',
            ]
        ];
        return view('valdymas', compact('statuses', 'knygomatas'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $knygomatas = Knygomatas::findOrFail($id);
        $knygomatas->delete();
        return redirect('valdymas');
    }
    public function completed($id)
    {
        $task_complete = Knygomatas::find($id) ;
        $task_complete->completed = 1;
        $task_complete->save() ;
        return redirect()->back();
    }


}
