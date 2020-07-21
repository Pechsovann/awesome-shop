     <style>
      * {
        margin-left: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: "open Sans", sans-serif;
        text-decoration: none;
        list-style: none;
    }
     /* table */
     ul {
         margin-left: 30px;

     }
    .hh {
         margin-top:20px;
     }

.container-1 {
    top: 50%;
    margin-left: 57px;
    margin-top: 57px;
    color: #080808;
    border-radius: 10px;
}

.pricing-table {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    /* width: min(100%, 100%); */
    margin: auto;
}

.pricing-card1 {
    flex: 1;
    border-radius: 8px;
    min-width: 360px;
    background-color: rgb(141, 114, 184);
    margin: 10px 100px;
    cursor: pointer;
    overflow: hidden;
    color: rgb(0, 0, 0);
    transition: 1s linear;
}

.pricing-card2 {
    flex: 1;
    border-radius: 8px;
    min-width: 360px;
    background-color: rgb(97, 38, 68);
    margin: 10px 100px;
    cursor: pointer;
    overflow: hidden;
    color: rgb(8, 8, 8);
    transition: 1s linear;
}

.pricing-card3 {
    flex: 1;
    border-radius: 8px;
    min-width: 360px;
    background-color: rgb(61, 75, 45);
    margin: 10px 100px;
    cursor: pointer;
    overflow: hidden;
    color: rgb(7, 7, 7);
    transition: 1s linear;
}
.order-btn:hover {
    background-color: rgb(59, 59, 59);
    color: ghostwhite;
}
.img1 {
        margin-left: 20%;
        /* margin: 0; */
    }
    .order-btn {
        display: inline-block;
        margin-bottom: 20px;
        margin-top: 20px;
        border: 2px solid #000000;
        color: rgb(26, 25, 25);
        padding: 5px 20px;
        border-radius: 8px;
        text-transform: uppercase;
        font-weight: 200;
        transition: .1s linear;
    }
    
    .order-btn:hover {
        background-color: rgb(59, 59, 59);
        color: ghostwhite;
    }
    /* .pricing-card:hover,
    .pricing-card:hover.price {
        color: rgb(34, 32, 31);
    }
    .pricing-card li {
        font-size: 16px;
        padding: 10px 0;
        text-transform: uppercase;
    } */
     </style>
         <!-- table promotion-->
         <div class="pricing-table">
            <div class="pricing-card1">
                <ul>
                <li><strong><h3 class="hh">Coupon savings</h3></strong></li>
                    <li>Up to 60% off everyday <img class="img1" src="./assets/icons/save.png" alt=""></li>
                    <button class="order-btn"><a href="#" > Shop Coupone</a></button>
                    
                </ul>
                
            </div>

            <div class="pricing-card2">
                <ul>
                <li><strong><h3 class="hh">Free Delivery</h3></strong></li>
                <li>With & elected items <img class="img1" src="./assets/icons/delivery.png" alt=""></li> 
                <button class="order-btn" ><a href="#"> Deliver Now </a></button>
                
                </ul>
            </div>

            <div class="pricing-card3">
                <ul>
                <li><strong><h3 class="hh">GIFT Voucher</h3></strong></li>
                <li> With personal care items <img class="img1" src="./assets/icons/gift1.png" alt=""></li>
                <button class="order-btn"><a href="#"> Gift Now</a></button>
                
                </ul>
            </div>
            </div>
                <br>
