<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests;
use App\User;
use Auth;
use Bouncer;
use DB;
use Excel;
use Illuminate\Http\Request;
use Input;
use Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        $sellman = Client::with('sellmanlist')->firstOrFail();
//        $user_id = Auth::user()->id;
        return view('admin.client.index', compact('clients', 'sellman'));

    }

    public function showcostumers()
    {
        $clients = Client::all();
        return view('admin.client.costumers', compact('clients', $clients));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.client.create');
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


        $filename = $request->file('agreement')->store('subfolder', 'public');
//            $filename = $request->file('agreement')->hashName();

        $client = Client::create([
            'title' => $request->title,
            'description' => $request->description,
            'fax' => $request->fax,
            'adrress1' => $request->adrress1,
            'adrress2' => $request->adrress2,
            'adrress3' => $request->adrress3,
            'adrress4' => $request->adrress4,
            'adrress5' => $request->adrress5,
            'telephone1' => $request->telephone1,
            'telephone2' => $request->telephone2,
            'telephone3' => $request->telephone3,
            'telephone4' => $request->telephone4,
            'telephone5' => $request->telephone5,
            'client_type' => $request->client_type,
            'sellpercent' => $request->sellpercent,
            'agreement' => $filename,
        ]);
        return redirect('admin/client/' . $client->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $sellman = Client::with('sellmanlist')->where('id', '=', $client->id)->firstOrFail();
        return view('admin.client.show', compact('client', 'sellman'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.client.edit', compact('client', $client));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //Validate
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);

        $client->title = $request->title;
        $client->description = $request->description;
        $client->fax = $request->fax;
        $client->adrress1 = $request->adrress1;
        $client->adrress2 = $request->adrress2;
        $client->adrress3 = $request->adrress3;
        $client->adrress4 = $request->adrress4;
        $client->adrress5 = $request->adrress5;
        $client->telephone1 = $request->telephone1;
        $client->telephone2 = $request->telephone2;
        $client->telephone3 = $request->telephone3;
        $client->telephone4 = $request->telephone4;
        $client->telephone5 = $request->telephone5;
        $client->client_type = $request->client_type;
        $client->sellpercent = $request->sellpercent;
        $client->save();
        $request->session()->flash('message', 'Successfully modified the task!');
        return redirect('admin/client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect('admin/client');
    }

    public function showimport()
    {
        return view('admin.client.import');
    }

    public function downloadExcel($type)
    {
        $data = Post::get()->toArray();
        return Excel::create('laravelcode', function ($excel) use ($data) {
            $excel->sheet('mySheet', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function importExcel(Request $request)
    {
        if ($request->hasFile('import_file')) {
            Excel::load($request->file('import_file')->getRealPath(), function ($reader) {
                foreach ($reader->toArray() as $key => $row) {
                    $data['title'] = $row['title'];
                    $data['description'] = $row['description'];
                    $data['fax'] = $row['fax'];
                    $data['adrress1'] = $row['adrress1'];
                    $data['adrress2'] = $row['adrress2'];
                    $data['adrress3'] = $row['adrress3'];
                    $data['adrress4'] = $row['adrress4'];
                    $data['adrress5'] = $row['adrress5'];
                    $data['telephone1'] = $row['telephone1'];
                    $data['telephone2'] = $row['telephone2'];
                    $data['telephone3'] = $row['telephone3'];
                    $data['telephone4'] = $row['telephone4'];
                    $data['telephone5'] = $row['telephone5'];
                    $data['telephone5'] = $row['telephone5'];
                    $data['client_type'] = $row['client_type'];


                    if (!empty($data)) {
                        DB::table('clients')->insert($data);
                    }
                }
            });
        }

        Session::put('لیست مشتریان با موفقیت بارگزاری شد .');

        return back();
    }
//    public function assignsellman(Request $request){
//        $user = User::all();
//        $client_list = Client::all();
//        $client = Client::with('sellmanlist')->firstOrFail();
//        $sellman = $request->input('sellman');
//        $client_name = $request->input('client');
//        $client->sellmanlist()->attach($sellman);
//        $client->sellmanlist()->attach($client_name);
//        $client->save();
//        return view('admin.client.assign',compact('client_list','user'));
//    }
    public function assignsellman(Client $client)
    {
        $user = User::all();
        $client_list = Client::all();
        return view('admin.client.assign', compact('client_list', 'user'));
    }

    public function assignsellmanSave(Request $request)
    {
        $user = User::all();
        $client_list = Client::all();
        $client = Client::with('sellmanlist')->firstOrFail();
        $sellman = $request->input('sellman');
        $client_name = $request->input('client');
        $client->sellmanlist()->attach($sellman, ['client_id' => $client_name]);
        $user_notification = Auth::user();
        $client->sellmanlist()->sync($sellman);
        $user_notification->sendClientAddedNotification($client_name, $sellman);
        return view('admin.client.assign', compact('client_list', 'user'));
    }

    public function myclient(Client $client)
    {
//        $user_id =Auth::user()->id;
//        $client = Client::with('sellmanlist')->firstOrFail();
//        return view('admin.client.myclient',compact('user_id','client'));
        $user = Auth::user();
        $user->load('clients'); //lazy-eager loading
        return view('admin.client.myclient', compact('user', 'client'));
    }

    public function agreement(Client $client)
    {
        $client = Client::all();
        return view('admin.client.agreement', compact('client'));
    }

    public function agreementsave(Request $request,Client $client)
    {
        $client = Client::all();
        $client_id = $request->clientid;
        $clientfind = Client::where("id", $client_id)->first();

        $request->file('agreementedit')->store('subfolder', 'public');
        $image = $request->file('agreementedit')->store('subfolder', 'public');
//            Client::where('id', $client_id)->update(array('agreement' => $image));
        $clientfind->agreement = $image;
        $clientfind->save();
        return view('admin.client.agreement', compact('client',$client));
    }

}
