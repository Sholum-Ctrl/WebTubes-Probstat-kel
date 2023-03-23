<?php

namespace App\Http\Controllers;

use App\Models\Powercons;
use Illuminate\Http\Request;

class PowerConsumptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataset = Powercons::all();
        return view('showdataset', compact('dataset'));
        return view('showdataset3', compact('dataset'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    // use League\Csv\Reader;

    // public function upload(Request $request)
    // {
    //     $filein = $request->file('csv_file');
    //     $csv = Reader::createFromPath($filein->getRealPath());
    //     $csv->setHeaderOffset(0);

    //     foreach ($csv as $record) {
    //         PowerConsumption::create([
    //             'Time' => $record['Time'],
    //             'Punjab' => $record['Punjab'],
    //             'Haryana' => $record['Haryana'],
    //             'Rajasthan' => $record['Rajasthan'],
    //             'Delhi' => $record['Delhi'],
    //             'UP' => $record['UP'],
    //             'Uttarakha' => $record['Uttarakha'],
    //             'HP' => $record['HP'],
    //             'Pondy' => $record['Pondy'],
    //             'Chandigarh' => $record['Chandigarh'],
    //             'Chattisgarh' => $record['Chattisgarh'],
    //             'Gujarat' => $record['Gujarat'],
    //             'MP' => $record['MP'],
    //             'Maharashtra' => $record['Maharashtra'],
    //             'Goa' => $record['Goa'],
    //             'DNH' => $record['DNH'],
    //             'Andhra' => $record['Andhra'],
    //         ]);
    //     }
    //     return redirect()->back()->with('success', 'File CSV berhasil diunggah.');
    // }
}
