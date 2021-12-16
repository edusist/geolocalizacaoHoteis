<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class ObterHoteisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $res = Http::get('https://buzzvel-interviews.s3.eu-west-1.amazonaws.com/hotels.json');
        // var_dump();

        $arr = array();
        $valores = array();
        foreach (array_values($res->json()) as $value) {

            $arr[] = $value;
                // echo "<pre>";
                // print_r($arr);
                // echo "<br>";
                // echo "</pre>";


            foreach ($arr as $valores) {
                if($valores != 1){
                    for ($i=0; $i < count($valores); $i++) {

                        echo "<pre>";
                        print_r($valores[$i][0]);
                        echo "<br>";
                        print_r($valores[$i][1]);
                        echo "<br>";
                        print_r($valores[$i][2]);
                        echo "<br>";
                        print_r($valores[$i][3]);
                        echo "<br>";
                        echo "*****************************";
                        echo "</pre>";
                    }

                }
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
