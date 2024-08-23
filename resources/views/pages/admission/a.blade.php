<pre>
    <!-- {{ form.personal }} -->
</pre>
<div class="overview-section-six py-5">
    <div class="container">
        <div class="row justify-content-between mainForm hide">
            <div class="col-xl-12">
                <div class="mb-5 admission_btn">
                    <button id="personal_tab" class="btn py-3 px-4 navigation-btn active"
                        data-show=".personal">ব্যক্তিগত
                        তথ্য</button>
                    <button id="academic_tab" class="btn py-3 px-4 navigation-btn" data-show=".academic">একাডেমিক
                        তথ্য</button>
                    <button id="upload_tab" class="btn py-3 px-4 navigation-btn" data-show=".upload">আপলোড</button>
                    <button id="payment_tab" class="btn py-3 px-4 navigation-btn"
                        data-show=".payment">পেমেন্ট</button>
                </div>
                <div class="overview-contents">
                    <div class="item personal flex-column">
                        <div class="row w-100">
                            <div class="student_personal_info col-12">১. শিক্ষার্থীর ব্যক্তিগত তথ্য</div>
                            <div class="col-lg-6 col-12 input_group">
                                <label>শিক্ষার্থীর নাম (ইংরেজি)</label><br>
                                <input v-model="form.personal.student_name_en" type="text" placeholder="Full Name"
                                    required>
                            </div>
                            <div class="col-lg-6 col-12 input_group">
                                <label>শিক্ষার্থীর নাম (বাংলা)</label><br>
                                <input v-model="form.personal.student_name_bn" type="text"
                                    placeholder="শিক্ষার্থীর পূর্ণ নাম" required>
                            </div>
                            <div class="col-lg-3 col-12 input_group">
                                <label>জন্ম তারিখ</label><br>
                                <input v-model="form.personal.birthdate" type="date" required>
                            </div>
                            <div class="col-lg-3 col-12 input_group">
                                <label>জন্ম নিবন্ধন নম্বর </label><br>
                                <input v-model="form.personal.birthCertificateNumber" type="text" maxlength="17"
                                    placeholder="১৭ ডিজিটের জন্ম নিবন্ধন নম্বর" required>
                            </div>
                            <div class="col-lg-3 col-12 input_group">
                                <label>লিঙ্গ</label><br>
                                <select v-model="form.personal.gender" name="" id="" required>
                                    <option value="1">ছেলে</option>
                                    <option value="0">মেয়ে</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-12 input_group">
                                <label>জাতীয়তা</label required><br>
                                <select v-model="form.personal.nationality" name="" id="">
                                    <option value="bangladeshi">বাংলাদেশী</option>
                                    <option value="foreign">অন্যান্য</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-12 input_group">
                                <label>ধর্ম</label><br>
                                <select v-model="form.personal.religion" name="" id="" required>
                                    <option value="islam">ইসলাম</option>
                                    <option value="hindu">হিন্দু</option>
                                    <option value="christian">খ্রিষ্টান</option>
                                    <option value="buddhist">বৌদ্ধ</option>
                                    <option value="other">অন্যান্য</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-12 input_group">
                                <label>রক্তের গ্রুপ</label required><br>
                                <select v-model="form.personal.bloodGroup" name="" id="">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-12 input_group">
                                <label>শিক্ষার্থীর মোবাইল নম্বর</label><br>
                                <input v-model="form.personal.student_mobile" type="text" maxlength="11"
                                    placeholder="শিক্ষার্থীর মোবাইল নম্বর" required>
                            </div>
                            <div class="col-lg-3 col-12 input_group">
                                <label>শিক্ষার্থীর ই-মেইল </label><br>
                                <input v-model="form.personal.student_email" type="email"
                                    placeholder="শিক্ষার্থীর ই-মেইল" required>
                            </div>
                            <div class="student_personal_info col-12">২. পিতা মাতার তথ্য</div>

                            <!-- পিতার তথ্য -->
                            <div class="col-lg-4 col-12 input_group">
                                <label>শিক্ষার্থীর পিতার নাম (ইংরেজি)</label><br>
                                <input v-model="form.personal.father_name_en" type="text"
                                    placeholder="Father's Name" required>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label>শিক্ষার্থীর পিতার নাম (বাংলা)</label><br>
                                <input v-model="form.personal.father_name_bn" type="text"
                                    placeholder="শিক্ষার্থীর পিতার নাম" required>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> পিতার জাতীয় পরিচয়পত্র নম্বর</label><br>
                                <input v-model="form.personal.father_nid_number" type="number"
                                    placeholder="পিতার এনআইডি নম্বর" required>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> পিতার পেশা</label><br>
                                <input v-model="form.personal.father_profession" type="text"
                                    placeholder="পিতার পেশা" required>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> পিতার বার্ষিক আয় </label><br>
                                <input v-model="form.personal.father_income_yearly" type="number"
                                    placeholder=" বার্ষিক আয় (সংখ্যায়)" required>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> পিতার মোবাইল নম্বর </label><br>
                                <input v-model="form.personal.father_mobile" type="number"
                                    placeholder=" পিতার মোবাইল নম্বর" required>
                            </div>

                            <!-- মাতার তথ্য -->

                            <div class="col-lg-4 col-12 input_group">
                                <label>শিক্ষার্থীর মাতার নাম (ইংরেজি)</label><br>
                                <input v-model="form.personal.mother_name_en" type="text"
                                    placeholder="Mother's Name" required>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label>শিক্ষার্থীর মাতার নাম (বাংলা)</label><br>
                                <input v-model="form.personal.mother_name_bn" type="text"
                                    placeholder="শিক্ষার্থীর মাতার নাম" required>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> মাতার জাতীয় পরিচয়পত্র নম্বর</label><br>
                                <input v-model="form.personal.mother_nid_number" type="number"
                                    placeholder="মাতার এনআইডি নম্বর" required>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> মাতার পেশা</label><br>
                                <input v-model="form.personal.mother_profession" type="text"
                                    placeholder="মাতার পেশা" required>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> মাতার বার্ষিক আয় </label><br>
                                <input v-model="form.personal.mother_income_yearly" type="number"
                                    placeholder=" বার্ষিক আয় (সংখ্যায়)" required>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> মাতার মোবাইল নম্বর </label><br>
                                <input v-model="form.personal.mother_mobile" type="number"
                                    placeholder=" মাতার মোবাইল নম্বর" required>
                            </div>
                            <div class="student_personal_info col-12">৩. অভিভাবকের তথ্য</div>

                            <!--  অভিভাবকের তথ্য -->
                            <div class="input_group col-12">
                                <label class="primary-color">বর্তমান অভিভাবক</label>

                                <input class="guardian" type="radio" value="f" v-model="form.personal.guardian_type"
                                    name="guardian" id="g_father" @input="setPresentData($event.target.value)">
                                <label for="g_father"> পিতা</label>

                                <input class="guardian" type="radio" value="m" v-model="form.personal.guardian_type"
                                    name="guardian" id="g_mother" @input="setPresentData($event.target.value)">
                                <label for="g_mother"> মাতা</label>

                                <input class="guardian" type="radio" value="o" v-model="form.personal.guardian_type"
                                    name="guardian" id="g_other" @input="setPresentData($event.target.value)">
                                <label for="g_other">অন্যান্য</label>

                                <button @click="checkAndSetPresentData()" class="mx-3 btn btn-success">ডাটা
                                    রিফ্রেশ</button>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label>অভিভাবকের নাম (ইংরেজি)</label><br>
                                <input v-model="form.personal.guardian_name_en" type="text"
                                    placeholder="Guardian's Name" required>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label>অভিভাবকের নাম (বাংলা)</label><br>
                                <input v-model="form.personal.guardian_name_bn" type="text"
                                    placeholder="শিক্ষার্থীর অভিভাবকের নাম" required>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> অভিভাবকের জাতীয় পরিচয়পত্র নম্বর</label><br>
                                <input v-model="form.personal.guardian_nid_number" type="number"
                                    placeholder="অভিভাবকের এনআইডি নম্বর" required>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> অভিভাবকের পেশা</label><br>
                                <input v-model="form.personal.guardian_profession" type="text"
                                    placeholder="অভিভাবকের পেশা" required>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> অভিভাবকের সাথে সম্পর্ক</label><br>
                                <input v-model="form.personal.guardian_relation" type="text"
                                    placeholder="অভিভাবকের সাথে সম্পর্ক" required>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> অভিভাবকের মোবাইল নম্বর </label><br>
                                <input v-model="form.personal.guardian_mobile" type="number"
                                    placeholder=" অভিভাবকের মোবাইল নম্বর" required>
                            </div>
                        </div>
                        <div class="text-right my-3 col-12">
                            <button data-show=".academic"
                                class="btn w-btn-2 reverse_hover primary-color box-shadow-none navigation-btn"
                                onclick="chngActiveTab('personal_tab','academic_tab')">Next</button>
                        </div>
                    </div>
                    <!-- personal section end -->
                    <div class="item academic hide flex-column">
                        <div class="row w-100">
                            <div class="student_personal_info col-12">৪. ঠিকানা তথ্য</div>
                            <div class="col-lg-6 col-12 input_group">
                                <label> বর্তমান ঠিকানা </label><br>
                                <input v-model="form.personal.address_present" type="text"
                                    placeholder="বর্তমান ঠিকানা" required>
                            </div>
                            <div class="col-lg-6 col-12 input_group">
                                <label> স্থায়ী ঠিকানা </label><br>
                                <input v-model="form.personal.address_permanent" type="text"
                                    placeholder="স্থায়ী ঠিকানা" required>
                            </div>


                            <div class="student_personal_info">৫. ভর্তির জন্য প্রয়োজনীয় তথ্য</div>
                            <div class="col-lg-4 col-12 input_group">
                                <label>ভর্তিচ্ছুক শ্রেণি</label><br>
                                <select v-model="form.academic.admission_class" name="" id="" required>
                                    <option value="11">একাদশ</option>
                                    <option value="12">দ্বাদশ</option>
                                </select>
                            </div>

                            <div class="col-lg-4 col-12 input_group">
                                <label>বিভাগ</label><br>
                                <select v-model="form.academic.admission_group" name="" id="" required>
                                    <option value="science">বিজ্ঞান</option>
                                    <option value="business">ব্যবসায় শিক্ষা</option>
                                    <option value="humanities">মানবিক</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label>সেশন</label><br>
                                <input type="text" readonly :value="form.academic.admission_session" required>
                            </div>

                            <div class="student_personal_info">৬. পূর্ববর্তী একাডেমিক তথ্য</div>

                            <div class="col-lg-6 col-12 input_group">
                                <label>পূর্ববর্তী প্রতিষ্ঠানের নাম</label><br>
                                <input v-model="form.academic.previous_institution" type="text"
                                    placeholder="পূর্ববর্তী প্রতিষ্ঠানের নাম" required>
                            </div>
                            <div class="col-lg-2 col-12 input_group">
                                <label>অধ্যয়নের শ্রেণি</label><br>
                                <select v-model="form.academic.previous_class" name="" id="" required>
                                    <option value="6">ষষ্ঠ</option>
                                    <option value="7">সপ্তম</option>
                                    <option value="8">অষ্টম</option>
                                    <option value="9">নবম</option>
                                    <option value="10">দশম</option>
                                    <option value="11">একাদশ</option>
                                    <option value="12">দ্বাদশ</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-12 input_group">
                                <label>সেশন</label><br>
                                <input v-model="form.academic.previous_session" type="text" placeholder="সেশন"
                                    required>

                            </div>
                            <div class="col-lg-2 col-12 input_group">
                                <label>জিপিএ</label><br>
                                <input v-model="form.academic.previous_gpa" type="number"
                                    placeholder="প্রাপ্ত জিপিএ" required>

                            </div>

                            <div class="student_personal_info">৭. বোর্ড পরিক্ষার তথ্য</div>


                            <div class="col-lg-3 col-12 input_group">
                                <label>রেজিস্ট্রেশন নাম্বার (S.S.C)</label><br>
                                <input v-model="form.academic.board_reg_no" type="number"
                                    placeholder="এস এস সি রেজিস্ট্রেশন নাম্বার">
                            </div>
                            <div class="col-lg-3 col-12 input_group">
                                <label>রোল নাম্বার (S.S.C)</label><br>
                                <input v-model="form.academic.board_roll_no" type="text"
                                    placeholder="এস এস সি রোল নাম্বার" required>

                            </div>
                            <div class="col-lg-2 col-12 input_group">
                                <label>জিপিএ (S.S.C)</label><br>
                                <input v-model="form.academic.board_gpa" type="number"
                                    placeholder="প্রাপ্ত জিপিএ (এস এস সি)" required>

                            </div>
                            <div class="col-lg-2 col-12 input_group">
                                <label>বোর্ড (S.S.C)</label><br>
                                <select v-model="form.academic.board_name" id="board" name="board" required="">
                                    <option value="dhaka">ঢাকা</option>
                                    <option value="barisal">বরিশাল</option>
                                    <option value="chittagong">চট্টগ্রাম</option>
                                    <option value="comilla">কুমিল্লা</option>
                                    <option value="dinajpur">দিনাজপুর</option>
                                    <option value="jessore">যশোর</option>
                                    <option value="madrasah">মাদ্রাসা</option>
                                    <option value="rajshahi">রাজশাহী</option>
                                    <option value="sylhet">সিলেট</option>
                                    <option value="mymensingh">ময়মনসিংহ</option>
                                    <option value="tec">কারিগরী</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-12 input_group">
                                <label>পরীক্ষার সাল (S.S.C)</label><br>
                                <input v-model="form.academic.board_exam_year" type="text"
                                    placeholder="পরীক্ষার সাল" required>
                            </div>
                            <div class="text-right my-3">
                                <button data-show=".upload"
                                    class="btn w-btn-2 reverse_hover primary-color box-shadow-none navigation-btn"
                                    onclick="chngActiveTab('academic_tab','upload_tab')">Next
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- academic section end -->
                    <div class="item upload hide flex-column">
                        <div class="row w-100">
                            <div class="student_personal_info">৮. প্রয়োজনীয় কাগজপত্র আপলোড</div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> পাসপোর্ট সাইজের ছবি <b id="file_0" style="cursor: pointer;"
                                        data-bs-toggle="modal" @click="previewFromState(0)"
                                        data-bs-target="#exampleModal">👁‍🗨</b>
                                </label><br>
                                <input type="file" @input="($event)=>{ 
                                    form.upload.student = $event.target.files[0]; 
                                    uploadImage($event)}"
                                />

                                <!-- <input type="file" name="" onchange="setImage(event, 0)" accept="image/*"> -->
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> পিতার আইডি কার্ডের ছবি <b id="file_1" style="cursor: pointer;"
                                        data-bs-toggle="modal" onclick="preview(this)"
                                        data-bs-target="#exampleModal">👁</b></label><br>
                                <input type="file" name="" id="" onchange="setImage(event, 1)" accept="image/*">
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> মাতার আইডি কার্ডের ছবি <b id="file_2" style="cursor: pointer;"
                                        data-bs-toggle="modal" onclick="preview(this)"
                                        data-bs-target="#exampleModal">👁</b></label><br>
                                <input type="file" name="" id="" accept="image/*" onchange="setImage(event, 2)">
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> একাডেমিক ট্রান্সক্রিপ্ট <b id="file_3" style="cursor: pointer;"
                                        data-bs-toggle="modal" onclick="preview(this)"
                                        data-bs-target="#exampleModal">👁</b></label><br>
                                <input type="file" name="" id="" accept="image/*" onchange="setImage(event, 3)">
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> প্রশংসাপত্র <b id="file_4" style="cursor: pointer;" data-bs-toggle="modal"
                                        onclick="preview(this)" data-bs-target="#exampleModal">👁</b></label><br>
                                <input type="file" name="" id="" accept="image/*" onchange="setImage(event, 4)">
                            </div>
                            <div class="col-lg-4 col-12 input_group">
                                <label> এস. এস. সি. এডমিট কার্ড <b id="file_5" style="cursor: pointer;"
                                        data-bs-toggle="modal" onclick="preview(this)"
                                        data-bs-target="#exampleModal">👁</b></label><br>
                                <input type="file" name="" id="" accept="image/*" onchange="setImage(event, 5)">
                            </div>

                            <div class="text-right my-3">
                                <button data-show=".payment"
                                    class="btn w-btn-2 reverse_hover primary-color box-shadow-none navigation-btn"
                                    onclick="chngActiveTab('upload_tab','payment_tab')">Next</button>
                            </div>
                        </div>
                    </div>
                    <!-- upload section end -->
                    <div class="item payment flex-column"></div>
                </div>
            </div>
        </div>

        <div class="beforerules w-50 m-auto">
            <div class="card p-3">
                <div class="mt-3 text-center">
                    <h3>প্রয়োজনীয় ডকুমেন্ট ও তথ্যাবলিঃ</h3>
                </div>
                <div class="card-body pt-0 mt-0">
                    <p style="font-weight:500;">
                    <ol style="text-align:left;font-size:24px;">
                        <li>পিতা মাতার ভোটার আইডি কার্ড</li>
                        <li>জন্মনিবন্ধন</li>
                        <li>পাসপোর্ট সাইজের ছবি</li>
                        <li>একাডেমিক ট্রান্সক্রিপ্ট (না থাকলে মার্কশিট)</li>
                        <li>প্রশংসাপত্র</li>
                        <li>এস. এস. সি. এডমিট কার্ড</li>
                    </ol>
                    </p>

                    <div class="text-center">
                        <button
                            class="btn w-btn-2 w-sm-100 reverse_hover primary-color box-shadow-none navigation-btn"
                            onclick="hideElement()">আমার কাছে আছে</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" style="z-index: 10000;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img style="max-width: 100%;" src="" id="preview_box" alt="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn w-btn-2" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>