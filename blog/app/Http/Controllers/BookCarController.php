<?php

namespace App\Http\Controllers;

use App\BookCar;
use Illuminate\Http\Request;
use DB;

class BookCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = DB::table('cars')
                    ->distinct()
                    ->get() ->toArray();

        return view('bookcar', ['cars' => $cars]);
    }

    public function fetch(Request $request)
    {
         $select = $request->get('select');
         $dependent = $request->get('dependent');
         $data = DB::table('cars')
           ->where($select)
           ->get();
         $output = '<option value="">Select '.ucfirst($dependent).'</option>';
         foreach($data as $row)
         {
          $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
         }
         echo $output;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookCar  $bookCar
     * @return \Illuminate\Http\Response
     */
    public function show(BookCar $bookCar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookCar  $bookCar
     * @return \Illuminate\Http\Response
     */
    public function edit(BookCar $bookCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookCar  $bookCar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookCar $bookCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookCar  $bookCar
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookCar $bookCar)
    {
        //
    }
}
