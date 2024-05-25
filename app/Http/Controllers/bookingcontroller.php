<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\Ticket;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

use function Laravel\Prompts\form;

class bookingcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('form.tampil');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function submit(Request $request)
    {
            $booking = new booking();
            $booking->nama = $request->nama;
            $booking->nik = $request->nik;
            $booking->nomor = $request->nomor;
            $booking->email = $request->email;
            $booking->date = $request->date;
            $booking->keberangkatan = $request->keberangkatan;
            $booking->tujuan = $request->tujuan;
            $booking->maskapai = $request->maskapai;
            $booking->save();
    
            return redirect()->route('form.tampil');
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
}
