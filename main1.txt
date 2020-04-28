//run wow.js
new Window().init();
//global
var products=[];
var cartItems=[];
var cart_n= document.getElementById("cart_n");
//divs
var infoDIV= document.getElementById("infoDIV");
var electroDIV= document.getElementById("electroDIV");
var bureauDIV= document.getElementById("bureauDIV");
//information
var info=[
    {name: 'ordinateur',price:1},
    {name: 'ordinateur',price:1},
    {name: 'ordinateur',price:1},
    {name: 'ordinateur',price:1},
    {name: 'ordinateur',price:1},
    {name: 'ordinateur',price:1},
];
var electro=[
    {name:'gaz',price:10},
    {name:'gaz',price:11},
    {name:'gaz',price:12},
    {name:'gaz',price:13},
    {name:'gaz',price:14},
    {name:'gaz',price:15},
];
//HTML
function HTMLinfoProduct(con){
    let URL='img/info/info${con}.jpg';
    let btn= 'btnfruits${con}';
    return
    <div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <img class="card-img-top" style="height:16rem;" src="${URL}" alt="Card image cap">
            <div class="card-body">
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <p class="card-text">${info[con-1].name}</p>
                <p class="card-text">Price: $${INFO[con-1].price}.00</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" onclick="cart2('${info[con-1].name}','${info[con-1].price','${URL}','${con}','${btn}')" class="btn btn-sm btn-outline-secondary">Buy</button>
                        <button id="${btn}" type="button" onclick="cart('${info[con-1].name}','${info[con-1].price','${URL}','${con}','${btn}')" class="btn btn-sm btn-outline-secondary">ADD</button>

                    </div>
                    <small class="text-muted">free shipping</small>
                </div>
            </div>
    </div>

</div>   
   
}


//render
function render(){
    for(let index = 1; index <= 5; index++){
        infoDIV.innerHTML+='${HTMLinfoProduct(index)}';
    }
}



