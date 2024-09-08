<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Jobs\AdmissionStarted;
use App\Mail\AdmissionInfoMail;
use App\Models\Applicant;
use Buglinjo\LaravelWebp\Webp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Inertia\Inertia;
use Illuminate\Support\Facades\Mail;


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
        return Inertia::render('admission/AdmissionForm');
    }
    public function applyAdmission(Request $req)
    {
        $personal = json_decode($req->personal);  
        $id = uniqid(date('y'));
        
        $path = storage_path("app/public/applicant/$id/");
        File::makeDirectory($path, 0777, true, true);

        Webp::make($req->file('student_photo'))->save(storage_path("app/public/applicant/$id/photo.webp"));
        Webp::make($req->file('father_nid'))->save(storage_path("app/public/applicant/$id/father_nid.webp"));
        Webp::make($req->file('mother_nid'))->save(storage_path("app/public/applicant/$id/mother_nid.webp"));
        Webp::make($req->file('testimonial'))->save(storage_path("app/public/applicant/$id/testimonial.webp"));
        Webp::make($req->file('transcript'))->save(storage_path("app/public/applicant/$id/transcript.webp"));
        Webp::make($req->file('admit_card'))->save(storage_path("app/public/applicant/$id/admit_card.webp"));
        
        $pwd = str()->random(8);
        $apply = Applicant::insert([
            "student_personal" => $req->personal,
            "student_academic" => $req->academic,
            "student_files" => json_encode([
                'student_photo' => "/applicant/$id/photo.webp",
                'father_nid' => "/applicant/$id/father_nid.webp",
                'mother_nid' => "/applicant/$id/mother_nid.webp",
                'testimonial' => "/applicant/$id/testimonial.webp",
                'transcript' => "/applicant/$id/transcript.webp",
                'admit_card' => "/applicant/$id/admit_card.webp",
            ]),
            "applicant_no" => $id,
            "applicant_phone" => $personal->student_mobile,
            "applicant_email" => $personal->student_email,
            "applicant_password" => $pwd,
            "applicant_status" => 0, // pending
        ]);

        if($apply){
            AdmissionStarted::dispatch($id, $personal->student_email, $personal->student_mobile, $pwd);
            return response()->json(['status'=> 200, 'data'=> 'success']);
        }else{
            return response()->json(['status'=> 400, 'data'=> 'failed']);
        }

    }

    public function admissionStatus()
    {
        if (session()->get('user')) return Inertia::location('/applicant/');
        return Inertia::render('admission/AdmissionLogin');
    }

    /**
     * Display the specified resource.
     */
    public function admissionLogin(Request $req)
    {
        $applicant = Applicant::where('applicant_no', $req->id)->where('applicant_password', $req->password)->first();
        if($applicant){
            session()->put('user', "applicant");
            session()->put('info', $applicant);
            return Inertia::location('/applicant/');
        }else{
           return session()->flash('message', 400);
        }
    }

    public function applicant()
    {
        return view('pages.applicant.applicant', ['user'=> session()->get('info')]);
    }

 
    public function applicantLogout()
    {
        session()->forget('user');
        session()->forget('info');
        return Inertia::location('/admission-login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
