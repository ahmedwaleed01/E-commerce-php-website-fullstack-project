var imgss=document.querySelector('.main img');
var btn=document.querySelectorAll('.main button');
console.log(btn)
console.log(imgss)

for(let i of btn){
    i.addEventListener('click',toggleslide);
}
arrayimg=["images/image.png","images/156357.jpg","images/disha-patani-wallpaper-preview.jpg"];
index=0;

function toggleslide(){
    if(this.id=='right'){
        if(index==length.arrayimg-1){
            index=0;
        }else{
            index++;
        }
    }else{
        if(index==0){
            index=length.arrayimg-1;
        }else{
            index--;
        }
    }
    imgss.src=arrayimg[index];
}