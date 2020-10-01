// JavaScript source code
let carts = document.querySelectorAll('.add-cart');//gets all the elements from the div class add-cart and selects them
let product = [//an array to determine the type of products that were selected
    {
        name: "PS4",
        tag: "ps4",
        price: 210.00,
        inCart: 0
    },
   {
        name: "Xbox One",
        tag: "xboxone",
        price: 220.00,
        inCart: 0
    },
    {
        name: "Nintendo Switch",
        tag: "nintendoswitch",
        price: 270.00,
        inCart: 0
    },
    {
        name: "PS4 Controller",
        tag: "ps4controller",
        price: 45,
        inCart: 0
    },
    {
        name: "Xbox One Controller",
        tag: "xboxonecontroller",
        price: 45,
        inCart: 0
    },
    {
        name: "Nintendo Switch Controller",
        tag: "nintendoswitchcontroller",
        price: 45,
        inCart: 0
    },
    {
        name: "Sony NX",
        tag: "sonynx",
        price: 499,
        inCart: 0
    },
    {
        name: "Sony X950G",
        tag: "sonyx950g",
        price: 699.99,
        inCart: 0
    },
    {
        name: "Samsung Q60",
        tag: "samsungq60",
        price: 1099.99,
        inCart: 0
    },
    {
    name: "Samsung NU6900",
    tag: "samsungnu6900",
    price: 550.99,
    inCart: 0
    },
    {
        name: "LG OLED",
        tag: "lgoled",
        price: 1213.99,
        inCart: 0
    },
    {
        name: "LG UltraHD",
        tag: "lgultrahd",
        price: 735.99,
        inCart: 0
    },
    {
        name: "Power Beats",
        tag: "powerbeats",
        price: 75.99,
        inCart: 0
    },
    {
        name: " Beats",
        tag: "beats",
        price: 185.99,
        inCart: 0
    },
    {
        name: " Sony WIXB400",
        tag: "sonywixb400",
        price: 85.99,
        inCart: 0
    },
    {
        name: " Bose SoundSport",
        tag: "bosesoundsport",
        price: 75.99,
        inCart: 0
    },
    {
        name: " Apple AirPods Pro",
        tag: "appleairpodspro",
        price: 185.99,
        inCart: 0
    },
    {
        name: " Apple AirPods ",
        tag: "appleairpods",
        price: 89.99,
        inCart: 0
    },
    {
        name: " Canon EOS",
        tag: "canoneos",
        price: 89.99,
        inCart: 0
    },
    {
        name: " Canon T7i",
        tag: "canont7i",
        price: 89.99,
        inCart: 0
    },
    {
        name: " Nikon D5600 ",
        tag: "nikond5600",
        price: 89.99,
        inCart: 0
    },
    {
        name: " Nikon D7500 ",
        tag: "nikond7500",
        price: 89.99,
        inCart: 0
    },
    {
        name: " Canon Rebel ",
        tag: "canonrebel",
        price: 89.99,
        inCart: 0
    },
    {
        name: " Nikon D3500 ",
        tag: "nikond3500",
        price: 89.99,
        inCart: 0
    },
    {
        name: " Dell Gaming ",
        tag: "dellgaming",
        price: 89.99,
        inCart: 0
    },
    {
        name: " Dell Inspiron ",
        tag: "dellinspiron",
        price: 89.99,
        inCart: 0
    },
    {
        name: " HP Envy ",
        tag: "hpenvy",
        price: 89.99,
        inCart: 0
    },
    {
        name: " HP Gaming ",
        tag: "hpgaming",
        price: 89.99,
        inCart: 0
    },
    {
        name: " ASUS Gaming ",
        tag:"asusgaming",
        price: 89.99,
        inCart: 0
    },
    {
        name: " Lenovo S145 ",
        tag: "lenovos145",
        price: 89.99,
        inCart: 0
    },
    {
        name: " Google Pixel 4XL ",
        tag:  "googlepixel4xl",
        price: 89.99,
        inCart: 0
    },
    {
        name: " Google Pixel 3A ",
        tag: "googlepixel3a",
        price: 89.99,
        inCart: 0
    },
    {
        name: " Iphone XS ",
        tag: "iphonexs",
        price: 89.99,
        inCart: 0
    },
    {
        name: " Iphone 11 Pro ",
        tag: "iphone11pro",
        price: 89.99,
        inCart: 0
    },
    {
        name: " Samsung Galaxy 10 ",
        tag: "samsunggalaxy10",
        price: 89.99,
        inCart: 0
    },
    {
        name: " Samsung Galaxy S20 ",
        tag: "samsunggalaxys20",
        price: 89.99,
        inCart: 0
    }
];
for (let i = 0; i < carts.length; i++)//forloop to run through the items
{
    carts[i].addEventListener('click', () => {
        cartNumbers(product[i]);
        totalCost(product[i]);
    })//everytime user clicks add to cart event listeners adds the item
   
}
function onLoadCartNumbers() {//when site is refreshed numbers stay
    let productNumbers = localStorage.getItem('cartNumbers');//checks if products exist
    if (productNumbers) {
        document.querySelector('.cart span').textContent = productNumbers;//if there's an item in cart than it gives the text the number of items
    }
}
function cartNumbers(product,action) {

    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);//used because it takes productNumbers as a string instead of number
    if (action)
    {
        localStorage.setItem("cartNumbers", productNumbers - 1);
        document.querySelector('.cart span').textContent = productNumbers - 1;
        console.log("action running");
    }
   else  if (productNumbers)
    {//if there exist a product number than increment by 1
        localStorage.setItem('cartNumbers', productNumbers + 1);//webstorage so user can access data from browser
        document.querySelector('.cart span').textContent = productNumbers+1;//updates number
    }
    else {
        localStorage.setItem('cartNumbers', 1);//webstorage so user can access data from browser
        document.querySelector('.cart span').textContent = 1;//grabs the cart basket number and increments
    }
    setItems(product);
 
  
}
function setItems(product) {

    let cartItems = localStorage.getItem('productsInCart');//checks if it exists
    cartItems = JSON.parse(cartItems);//puts items back to javascript object


    if (cartItems != null) {
        let currentProduct = product.tag;

        if (cartItems[currentProduct] == undefined) {
            cartItems = {
                ...cartItems,
                [currentProduct]: product
            }
        }
        cartItems[currentProduct].inCart += 1;

    } else {
        product.inCart = 1;//sets the variable of the cart to 1 like a bool statement
        cartItems = {
            [product.tag]: product//sets the product name to the product that it's getting added to variable
        };
    }

    localStorage.setItem('productsInCart', JSON.stringify(cartItems));
}
function totalCost(product, action) {
    let cart = localStorage.getItem("totalCost");//gets initialized cost

    if (action) {
        cart = parseInt(cart);//cartCost originally taken to string so convert to int

        localStorage.setItem("totalCost", cart - product.price);//gets the price that is store minus the new one
    } else if (cart != null) {

        cart = parseInt(cart);
        localStorage.setItem("totalCost", cart + product.price); //gets the price that is store plus the new one

    } else {
        localStorage.setItem("totalCost", product.price); //gets regular price
    }
}

function displayCart() {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    let cart = localStorage.getItem("totalCost");
    cart = parseInt(cart);

    let productContainer = document.querySelector('.products');

    if (cartItems && productContainer) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map((item, index) => {
            productContainer.innerHTML +=
                `<div class="product"><ion-icon name="close-circle"></ion-icon>
                <img src="./assets/${item.tag}.png" />
                <span class="sm-hide">${item.name}</span>
            </div>
            <div class="price sm-hide">$${item.price}</div>
            <div class="quantity">
                <ion-icon class="decrease " 
                    name="arrow-dropleft-circle"></ion-icon>
                    <span>${item.inCart}</span>
                <ion-icon class="increase" name="arrow-dropright-circle"></ion-icon>   
            </div>
            <div class="total">$${item.inCart * item.price}.00</div>`;
        });

        productContainer.innerHTML += `
            <div class="basketTotalContainer">
                <h4 class="basketTotalTitle">Basket Total</h4>
                <h4 class="basketTotal">$${cart}.00</h4>
            </div>`
            ;
  
    }
    deleteButtons();
    manageQuantity();
}
function displayCart2() {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    let cart = localStorage.getItem("totalCost");
    cart = parseInt(cart);

    let productContainer = document.querySelector('.products-checkout');

    if (cartItems && productContainer) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map((item, index) => {
            productContainer.innerHTML +=
            `
            <div class="container-items"
            <p><span class"items">${item.name} x  ${item.inCart} </span> <span class="price-checkout"> $${item.inCart * item.price}.00 </span></p>
            </div>`;
        });

        productContainer.innerHTML += `
            <div class="container-total-checkout">
                <hr>
                <p>Total <span style="color:black"> <b>$${cart}.00</b></span></p>
            </div>`
            ;
  
    }
    deleteButtons();
    manageQuantity();
}
function manageQuantity() {
    let decreaseButtons = document.querySelectorAll('.decrease');
    let increaseButtons = document.querySelectorAll('.increase');
    let currentQuantity = 0;
    let currentProduct = '';
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    for (let i = 0; i < increaseButtons.length; i++) {
        decreaseButtons[i].addEventListener('click', () => {
            console.log(cartItems);
            currentQuantity = decreaseButtons[i].parentElement.querySelector('span').textContent;
            console.log(currentQuantity);
            currentProduct = decreaseButtons[i].parentElement.previousElementSibling.previousElementSibling.querySelector('span').textContent.toLocaleLowerCase().replace(/ /g, '').trim();
            console.log(currentProduct);

            if (cartItems[currentProduct].inCart > 1) {
                cartItems[currentProduct].inCart -= 1;
                cartNumbers(cartItems[currentProduct], "decrease");
                totalCost(cartItems[currentProduct], "decrease");
                localStorage.setItem('productsInCart', JSON.stringify(cartItems));
                displayCart();
            }
        });

        increaseButtons[i].addEventListener('click', () => {
            console.log(cartItems);
            currentQuantity = increaseButtons[i].parentElement.querySelector('span').textContent;
            console.log(currentQuantity);
            currentProduct = increaseButtons[i].parentElement.previousElementSibling.previousElementSibling.querySelector('span').textContent.toLocaleLowerCase().replace(/ /g, '').trim();
            console.log(currentProduct);

            cartItems[currentProduct].inCart += 1;
            cartNumbers(cartItems[currentProduct]);
            totalCost(cartItems[currentProduct]);
            localStorage.setItem('productsInCart', JSON.stringify(cartItems));
            displayCart();
        });
    }
}

function deleteButtons() {
    let deleteButtons = document.querySelectorAll('.product ion-icon');
    let productNumbers = localStorage.getItem('cartNumbers');
    let cartCost = localStorage.getItem("totalCost");
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    let productName;
    console.log(cartItems);

    for (let i = 0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener('click', () => {
            productName = deleteButtons[i].parentElement.textContent.toLocaleLowerCase().replace(/ /g, '').trim();//checks once button gets click to see if the name matches the tag name

            localStorage.setItem('cartNumbers', productNumbers - cartItems[productName].inCart);//updates the cart
     
            localStorage.setItem('totalCost', cartCost - (cartItems[productName].price * cartItems[productName].inCart));//updates the total
            delete cartItems[productName];
          
            localStorage.setItem('productsInCart', JSON.stringify(cartItems));

            displayCart();
            onLoadCartNumbers();
        })
    }
}

onLoadCartNumbers();
displayCart();
displayCart2();

/*function setItems(product) {

    let cartItems = localStorage.getItem('productsInCart');//checks if it exists
    cartItems = JSON.parse(cartItems);//puts items back to javascript object

    if (cartItems != null) {
       
        if (cartItems[product.name] == undefined) {
            cartItems = {
                ...cartItems,
                [product.name]: product
            }
        }
        cartItems[product.name].inCart += 1;
    }
    else {


        product.inCart = 1;//sets the variable of the cart to 1 like a bool statement
        
        cartItems =
            {
                [product.name]: product//sets the product name to the product that it's getting added to variable
            };
    }
    localStorage.setItem('productsInCart ', JSON.stringify
        (cartItems));//JSON.stringify is used to show everything in the product object

}*/
