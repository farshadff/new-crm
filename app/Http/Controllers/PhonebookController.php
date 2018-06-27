<?php

namespace App\Http\Controllers;

use App\Client;
use Carbon\Carbon;
use App\Phonebook;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $phonebooks = Phonebook::with('client')->get();
//        foreach($phonebooks as $phonebook){
//            $remember = new Verta($phonebook->remember_date);
//        }
        $current_time = Carbon::now();
//        making if for the compare time together
        return view('admin.phonebooks.index',
            compact('phonebooks'))
            ->with('current_time',$current_time);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('admin.phonebooks.create', compact('clients', $clients));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);

        $phonebook = Phonebook::create([
            'title' => $request->title,
            'description' => $request->description,
            'client_id' => $request->client_id,
            'calldate' => $request->calldate,
            'rememberdate' => $request->rememberdate
        ]);
        return redirect('admin/phonebooks/' . $phonebook->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Phonebook $phonebook
     * @return \Illuminate\Http\Response
     */
    public function show(Phonebook $phonebook)
    {
        return view('admin.phonebooks.show', compact('phonebook', $phonebook));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Phonebook $phonebook
     * @return \Illuminate\Http\Response
     */
    public function edit(Phonebook $phonebook)
    {
        return view('admin.phonebooks.edit', compact('phonebook', $phonebook));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Phonebook $phonebook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phonebook $phonebook)
    {
        //Validate
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);

        $phonebook->title = $request->title;
        $phonebook->description = $request->description;
        $phonebook->client_id = $request->client_id;
        $phonebook->calldate = $request->calldate;
        $phonebook->rememberdate = $request->rememberdate;
        $phonebook->save();
        $request->session()->flash('message', 'Successfully modified the task!');
        return redirect('admin/phonebooks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Phonebook $phonebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phonebook $phonebook)
    {
        $phonebook->delete();
        return redirect('admin/phonebooks/');
    }
}
