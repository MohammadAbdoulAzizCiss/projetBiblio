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

    switch(id){
        case 1:
            window.location="/index.html";
            break;
        case 2:
            window.location="/collection.html"
            break;
        case 3:
            window.location="wishlist.html"
            break;
        case 4:
            window.location="wishlist.html"
            break;
        case 5:
            window.location="prets.html"
            break;
        default:
            window.location="archives.html"
    }

}
function redirect(currentnode){
    let children=(currentnode.childNodes)
    // getting string in src
    let img=children[1].childNodes[1].getAttribute('src')
    // getting book title
    let title=(children[3].innerText)
    // getting author name
    let author=children[5].innerText
    localStorage.setItem("src",img)
    localStorage.setItem("title",title)
    localStorage.setItem("author",author)
    window.location="singleBook.html"
}
function displayBook(){
    document.getElementById("img").setAttribute("src",localStorage.getItem("src"))
    document.getElementById("title").innerHTML=(localStorage.getItem("title"))
    document.getElementById("author").innerHTML=(localStorage.getItem("author"))
    document.getElementById("save").innerHTML=new Date(2020,10,16,10,36,0)
}