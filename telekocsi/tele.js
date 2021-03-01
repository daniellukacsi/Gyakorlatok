function mentes(){
elso=document.getElementById("jelszo1").value;
masodik=document.getElementById("jelszo2").value;

if(elso!="" && masodik!=""){
   if(elso==masodik){
        alert("A beírt jelszók megegyeznek"); 
    }
    else{
        alert("A beírt jelszók nem egyeznek meg"); 
    } 
}        
}