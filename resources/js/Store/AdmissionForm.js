import axios from 'axios'
import { reactive, computed } from 'vue'


export const form = reactive({
    personal: {
        student_name_en: null,
        student_name_bn: null,
        birthdate: null,
        birthCertificateNumber: null,
        gender: null,
        nationality: null,
        religion: null,
        bloodGroup: null,
        student_mobile: null,
        student_email: null,

        //father information
        father_name_en: null,
        father_name_bn: null,
        father_nid_number: null,
        father_profession: null,
        father_income_yearly: null,
        father_mobile: null,

        //mother information
        mother_name_en: null,
        mother_name_bn: null,
        mother_nid_number: null,
        mother_profession: null,
        mother_income_yearly: null,
        mother_mobile: null,

        //guardian information
        guardian_type: null,
        guardian_name_en: null,
        guardian_name_bn: null,
        guardian_nid_number: null,
        guardian_profession: null,
        guardian_relation: null,
        guardian_mobile: null,

        address_present: null,
        address_permanent: null,
    },
    academic: {
        admission_class: null,
        admission_group: null,
        admission_session: '2024-25',

        previous_institution: null,
        previous_class: null,
        previous_session: null,
        previous_gpa: null,

        board_exam_type: "SSC",
        board_reg_no: null,
        board_roll_no: null,
        board_gpa: null,
        board_name: 'sylhet',
        board_exam_year: null,
    },
    upload: {
        student: [],
    },
    setGuardianPresent(input) {
        this.personal.guardian_name_en = input.name_en;
        this.personal.guardian_name_bn = input.name_bn;
        this.personal.guardian_nid_number = input.nid_number;
        this.personal.guardian_profession = input.profession;
        this.personal.guardian_relation = input.relation;
        this.personal.guardian_mobile = input.mobile;
    }
})

export function apply(data) {
    document.querySelector("#loadingArea").classList.toggle("loading");

    let content = new FormData();
    content.append('student_photo', data.upload.student[0]);
    content.append('father_nid', data.upload.student[1]);
    content.append('mother_nid', data.upload.student[2]);
    content.append('testimonial', data.upload.student[3]);
    content.append('transcript', data.upload.student[4]);
    content.append('admit_card', data.upload.student[5]);

    content.append('personal', JSON.stringify(data.personal));
    content.append('academic', JSON.stringify(data.academic));

    axios.post('/admission-apply', content, {
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    }).then(res => {
        if(res.data.status == 200){
            document.querySelector("#loadingArea").classList.toggle("loading");
            alert("Your Application has been successfully");
            window.location.href = "/admission-login?check=true";
        }
    }).catch(err => {
        console.log(err)
    })

}