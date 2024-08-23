<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

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
        // return view('pages.admission.admission-form');
        return Inertia::render('admission/AdmissionForm');
    }
    public function applyAdmission(Request $req)
    {
        $personal = json_decode($req->personal);  
        $id = uniqid(date('y'));

        Storage::put("applicant/$id/photo",$req->file('student_photo'));

        $apply = Applicant::insert([
            "student_personal" => $req->personal,
            "student_academic" => $req->academic,
            "student_files" => json_encode([
                'student_photo' => $req->file('student_photo'),
                'father_nid' => $req->file('father_nid'),
                'mother_nid' => $req->file('mother_nid'),
                'testimonial' => $req->file('testimonial'),
                'admit_card' => $req->file('admit_card'),
                'transcript' => $req->file('transcript'),
            ]),
            "applicant_no" => $id,
            "applicant_phone" => $personal->student_mobile,
            "applicant_email" => $personal->student_email,
            "applicant_password" => str()->random(8),
            "applicant_status" => 0, // pending
        ]);


        if($apply){
            return response()->json(['status'=> 200, 'data'=> 'success']);
        }else{
            return response()->json(['status'=> 400, 'data'=> 'failed']);
        }

    }

    public function admissionStatus()
    {
        return Inertia::render('admission/AdmissionLogin');
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
