

document.getElementById('Add_form').addEventListener('submit',(e)=>{

let section_name = document.getElementById('section_name').value.trim();
let Note = document.getElementById("Note").value.trim();

let error_section_name = document.getElementById("error_section_name");
let error_note = document.getElementById("error_note");

  error_section_name.innerHTML = '';
    error_note.innerHTML = '';
let valid = true;
  
if(section_name === ""){
    error_section_name.innerHTML = "من قضلك قم بادخال اسم القسم";
     valid = false;
}

if(Note === "" ){
error_note.innerHTML = "من فضلك قم بادخال الملاحظ ";
 valid = false;
}
if(!valid){
e.preventDefault();
}


});

