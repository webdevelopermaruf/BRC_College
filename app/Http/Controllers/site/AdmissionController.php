<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admissionRules()
    {
        return view('pages.admission.admission-rules');
    }

    public function prospectus()
    {
        return view('pages.admission.prospectus');
    }

    public function applyform()
    {
        return view('pages.admission.admission-form');
    }
    public function admissionform(Request $request)
    {
        //
    }

    public function admissionStatus()
    {
        return view('pages.admission.admission-login');
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
