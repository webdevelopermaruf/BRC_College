@extends('layouts.app')
@section('title', 'ফলাফল - ')

@section('content')
    <div class="overview-section-six py-5">
        <div class="container">
            <form class="p-3">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="second_col">
                            <label class="label">পরীক্ষার ধরণ</label><br>
                            <select class="select_input" required>
                                <option value="">ক্লাস টেস্ট</option>
                                <option value="">মূল্যায়ণ পরীক্ষা</option>
                                <option value="">অর্ধ-বার্ষিক পরীক্ষা</option>
                                <option value="">বার্ষিক পরীক্ষা</option>
                                <option value="">বোর্ড ফলাফল</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="second_col">
                            <label class="label">শ্রেণিঃ</label><br>
                            <select class="select_input" required>
                                <option value="">একাদশ</option>
                                <option value="">দ্বাদশ</option>
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
                            <label class="label">আইডি নংঃ</label><br>
                            <input type="number" class="select_input" placeholder="শিক্ষার্থীর আইডি নং" required>
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
    </div>
@endsection
