@extends('layouts.app')
@section('title', 'শিক্ষার্থীদের তথ্য - ')

@section('content')
    <div class="overview-section-six py-5">
        <div class="container">
            <form class="p-3">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="second_col">
                            <label class="label">শ্রেণিঃ</label><br>
                            <select class="select_input" required>
                                <option value="11">একাদশ</option>
                                <option value="12">দ্বাদশ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="second_col">
                            <label class="label">শিফটঃ</label><br>
                            <select class="select_input" required>
                                <option value="1">সকাল শিফট</option>
                                <option value="2">বিকাল শিফট</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="second_col">
                            <label class="label">গ্রুপঃ</label><br>
                            <select class="select_input" required>
                                <option value="1">বিজ্ঞান</option>
                                <option value="2">মানবিক</option>
                                <option value="3">ব্যবসায় শিক্ষা</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="second_col">
                            <label class="label">একাডেমিক সেশনঃ</label><br>
                            <select class="select_input" required>
                                <option value="">২০২৩-২০২৪</option>
                                <option value="">২০২২-২০২৩</option>
                                <option value="">২০২১-২০২২</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="second_col">
                            <label class="label">সেকশন</label><br>
                            <select class="select_input" required>
                                <option value="">A</option>
                                <option value="">B</option>
                                <option value="">C</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="second_col">
                            <label class="label">রোল নংঃ</label><br>
                            <input type="number" class="select_input" placeholder="Enter Your Roll" required>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="second_col1">
                            <button type="submit" class="submit_btn">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="container mt-3 mb-2">
            <div class="student_head">
                <h2 class="heading" style="font-weight: 700;">শিক্ষার্থীদের তথ্য</h2>
                <hr />
                <h4 class="all_students">প্রাপ্ত শিক্ষার্থীর সংখ্যা :  </h4>
            </div>
            <div class="mb-5">
                <table style="table-layout: fixed;font-size: 17px;" class="table table-bordered">
                    <thead class="bg-primaryColor text-white">
                        <tr>
                            <th scope="col">ক্রম</th>
                            <th scope="col">নাম</th>
                            <th scope="col">আইডি</th>
                            <th scope="col">শ্রেণি</th>
                            <th scope="col">শাখা</th>
                            <th scope="col">রোল</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>

            <!-- ===============student-info end====================== -->

        </div>
    </div>
@endsection
