

let productHeader = document.querySelectorAll('.header-items-product');




productHeader.forEach((item)=>{


    let splilce = item.innerHTML;

    let arr = splilce.split(" ");


    if(arr.length == 1){

        item.innerHTML = arr[0];

    }else{
        item.innerHTML =arr[0]+"<br>"+ arr[1];
    }

        console.log(splilce);

})

let deteails = document.querySelectorAll('.deteails');

deteails.forEach((item)=>{

    let sempleprice = item.querySelector('.price');

    let getdata = sempleprice.innerHTML;

    sempleprice.innerHTML = getdata + " " + "L.E";

})

    let menucategroy = document.querySelectorAll('.menu-categroy span');

    menucategroy[0].classList.add('active');


 function removeActive(){

    menucategroy.forEach((item)=>{

        item.classList.remove('active');
    
});

    let items = document.querySelectorAll(".padding-items");

    items.forEach((item)=>{

        item.style.display = "none";

    
    })

}

menucategroy.forEach((item)=>{

    item.addEventListener('click',function(){

        removeActive();

        item.classList.add('active');


        let selected =  item.getAttribute('data-items');

        let finselected =  document.querySelectorAll(selected);

        finselected.forEach((item)=>{

            item.style.display="flex";

        })


    })

})

menucategroy.forEach((item)=>{

    if(item.classList.contains("active")){

        let selecteda =  item.getAttribute('data-items');

        let finselecteda =  document.querySelectorAll(selecteda);

        finselecteda.forEach((item)=>{

            item.style.display="flex";

        })
    }else{
        let selecteda =  item.getAttribute('data-items');

        let finselecteda =  document.querySelectorAll(selecteda);

        finselecteda.forEach((item)=>{

            item.style.display="none";

        })
    }
});