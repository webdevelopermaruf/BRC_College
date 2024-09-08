import { form } from '../../Store/AdmissionForm'

export function setPresentData(value) {
    let name_en, name_bn, nid_number, profession, relation, mobile;
    if (value == 'f') {
        name_en = form.personal.father_name_en;
        name_bn = form.personal.father_name_bn;
        nid_number = form.personal.father_nid_number;
        profession = form.personal.father_profession;
        relation = "Father";
        mobile = form.personal.father_mobile;
    } else if (value == 'm') {
        name_en = form.personal.mother_name_en;
        name_bn = form.personal.mother_name_bn;
        nid_number = form.personal.mother_nid_number;
        profession = form.personal.mother_profession;
        relation = "Mother";
        mobile = form.personal.mother_mobile;
    } else {
        name_en = '';
        name_bn = '';
        nid_number = '';
        profession = '';
        relation = '';
        mobile = '';
    }
   

    form.setGuardianPresent({
        name_en,
        name_bn,
        nid_number,
        profession,
        relation,
        mobile,
    });
}
export function checkAndSetPresentData(){
    let type = form.personal.guardian_type;
    setPresentData(type)
}

