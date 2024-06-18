<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coomic;
use Carbon\Carbon;
use App\Http\Requests\StoreCoomicRequest;
use App\Http\Requests\UpdateCoomicRequest;

class CoomicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coomics = Coomic::all();
        return view('coomic.index', compact('coomics'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { {
            return view("coomic.create");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCoomicRequest $request)
    {
        $data = $request->all();
        $data['sale_date'] = \Carbon\Carbon::createFromFormat('Y-m-d', $data['sale_date'])->format('Y-m-d');
        $data['price'] = "$" . $data['price'];
        $coomic = new Coomic();
        $coomic->fill($data);
        $coomic->save();

        return redirect()->route("coomic.show", ["coomic" => $coomic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Coomic $coomic)
    {
        return view('coomic.show', compact('coomic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coomic $coomic)
    {
        $coomic->price = str_replace('$', '', $coomic->price);
        return view('coomic.edit', compact('coomic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoomicRequest $request, Coomic $coomic)
    {
        $data = $request->all();
        $data['price'] = "$" . $data['price'];
        $coomic->update($data);
        return redirect()->route('coomic.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coomic $coomic)
    {

        $coomic->delete();
        return redirect()->route('coomic.index');
    }
}
