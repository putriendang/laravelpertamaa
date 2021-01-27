<?php

namespace App\Http\Controllers\Api;

use App\Models\Friends;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $friend = Friends::where('id', $id) -> first();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Teman',
            'data' => $friend
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_tlp' => 'required|numeric',
            'alamat' => 'required',
        ]);

        $f = Friends::find($id)->update([
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat
        ]);

            return response()->json([
                'success' => true,
                'message' => 'Post updated',
                'data' => $f
            ], 200);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cek =  Friends::find($id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Post Deleted',
            'data' => $cek
        ], 200);
    }
} 