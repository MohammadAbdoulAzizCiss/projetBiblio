function setActive(id){
    const activeBackgroundColor="";
    const activeColor="";
    let buttons=document.getElementsByClassName("tabBtn");
    let index=1;
    for (const button of buttons) {
        if(index==id){
           button.style.backgroundImage= "linear-gradient(to right, #67438c, #7a3f98, #9037a0, #a729a6, #c000a9)";
           button.style.color="#fff"
        }else{
            button.style.backgroundImage=null;
            button.style.color="#707070"
        }
        index++;
    }

}