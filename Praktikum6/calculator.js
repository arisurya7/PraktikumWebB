//insert anggka ke text view
function insert(num){
    document.form.textarea.value=document.form.textarea.value + num;
}

//fungsi hitung
function equal(){
    var hasil = document.form.textarea.value;
    //pangakat2
    if(hasil.substring(hasil.length-2,hasil.length)=='^2'){
        document.form.textarea.value=Math.pow(hasil.substring(hasil.length-3,hasil.length-2), hasil.substring(hasil.length-1,hasil.length)); 
    }
    //operasi selain pangkat
    else{
        document.form.textarea.value=eval(hasil);
    }  
}

//fungsi untuk membersihkan inputan
function clean(){
    document.form.textarea.value="";
}

//fungsi untuk menghapus
function back(){
   var hasil = document.form.textarea.value;   
   document.form.textarea.value = hasil.substring(0,hasil.length-1);
   
}


