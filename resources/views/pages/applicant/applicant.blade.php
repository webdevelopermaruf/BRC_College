@extends('layouts.app')
@section('title', 'Applicant - ')

@section('content')
    <div class="overview-section-six py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-3 col-sm-12 nav flex-column nav-pills" aria-orientation="vertical">
                    <button class="btn navigation-btn active w-100" data-bs-toggle="pill" data-bs-target="#Profile"
                        role="tab">প্রোফাইল</button>
                    <button class="btn navigation-btn w-100" data-bs-toggle="pill" data-bs-target="#application"
                        role="tab">অ্যাপ্লিকেশন স্ট্যাটাস</button>
                    <a href="/applicant/logout">
                        <button class="btn navigation-btn w-100">লগ আউট</button>
                    </a>
                </div>
                <div class="col-md-9 col-sm-12 tab-content">
                    <div class="tab-pane fade show active" id="Profile" role="tabpanel">
                        <div class="m-auto w-100 text-center">
                            <img style="width: 150px; padding-bottom: 25px;"
                                src="{{ asset('storage/' . json_decode($user->student_files)->student_photo) }}">
                        </div>
                        <table class="table table-striped">
                            <tr>
                                <th>শিক্ষার্থীর নাম (ইংরেজি)</th>
                                <td>
                                    {{ json_decode($user->student_personal)->student_name_en }}</td>
                                <th>শিক্ষার্থীর নাম (বাংলা)</th>
                                <td>{{ json_decode($user->student_personal)->student_name_bn }}</td>
                            </tr>
                            <tr>
                                <th>জন্ম তারিখ</th>
                                <td>{{ json_decode($user->student_personal)->birthdate }}</td>
                                <th>লিঙ্গ</th>
                                <td>
                                    @if (json_decode($user->student_personal)->gender == 0)
                                        মেয়ে
                                    @else
                                        ছেলে
                                    @endif
                                </td>

                            </tr>
                            <tr>
                                <th>মোবাইল নাম্বার</th>
                                <td>{{ json_decode($user->student_personal)->student_mobile }}</td>
                                <th>ইমেইল</th>
                                <td>{{ json_decode($user->student_personal)->student_email }}</td>

                            </tr>
                            <tr>
                                <th>শিক্ষার্থীর পিতার নাম</th>
                                <td>{{ json_decode($user->student_personal)->father_name_en }}</td>
                                <th>শিক্ষার্থীর মাতার নাম</th>
                                <td>{{ json_decode($user->student_personal)->mother_name_en }}</td>

                            </tr>
                            <tr>
                                <th>ভর্তিচ্ছুক শ্রেণি</th>
                                <td>{{ json_decode($user->student_academic)->admission_class }}</td>
                                <th>সেশন</th>
                                <td>{{ json_decode($user->student_academic)->admission_session }}</td>
                            </tr> 
                            <tr>
                                <th>পরীক্ষার নাম</th>
                                <td>{{ json_decode($user->student_academic)->board_exam_type }}</td>
                                <th>বোর্ড জিপিএ</th>
                                <td>{{ number_format((float) json_decode($user->student_academic)->board_gpa, 2, '.', '') }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="tab-pane fade show" id="application" role="tabpanel">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
