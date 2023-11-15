

const fixAmount = ()=>{
    const category = document.getElementById("cat").value;
    const price = document.getElementById("price");
    const amount = document.getElementById("amount");

    if(category==5){
        document.getElementById("alumni").style.display="none";
        price.innerHTML="339.00 tk";
        amount.value="339";
    }else if(category==2){
        price.innerHTML="0.00 tk";
        amount.value="0";
        document.getElementById("alumni").style.display="block";
    }
    else{
        document.getElementById("alumni").style.display="none";
        price.innerHTML="369.00 tk";
        amount.value="369";
    }
}


const fixAlumnuiAmount = (idz)=>{

    const amount = document.getElementById("amount");
    const price = document.getElementById("price");

    if(idz==1){
        const total = 369 + 70;
        amount.value=total;
        price.innerHTML=total;
    }

    else if(idz==2){
        const total = 369 + 120;
        amount.value=total;
        price.innerHTML=total;
    }

    else if(idz==3){
        const total = 369;
        amount.value=total;

        price.innerHTML=total;
    }

    

}