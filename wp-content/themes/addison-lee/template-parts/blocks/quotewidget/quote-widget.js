// pick up
var getContainer = document.getElementById('get-a-quote');
let getQuoteBtn = document.querySelector('.get-a-quote');
let searchbar = document.getElementById("myInput");
let searchBarDrpOff = document.getElementById("myInputDropOff");
const displayData = document.querySelector('ul#address-search__results');
let dataStore = [];
let buttonSpinner = document.getElementById("sendCodeSpinner");
let buttonSpinner2 = document.getElementById("sendSpinner");
let responsedatalayer = document.getElementById("return-response-data");

const pickupform = document.getElementById('pickup-form');
const span = pickupform.querySelector('.form-control label span');
const inputform = pickupform.querySelector('.form-control label input');
const formlabel = pickupform.querySelector('.form-control label');

const createSpan = document.createElement('span');
let item1 = document.querySelector('.item1');
let label = document.createElement('label');
let input = document.createElement('input');

function getDropOff(currentword) {
    const apiFetched = currentword;
    console.log('currentword is working', apiFetched);
    fetch(`https://shamrock-testsite.haulmont.com/al/api/address-search/autocomplete?disableSearchOutsideCountry=false&includeAddressBook=true&latitude=51.531&longitude=-0.125&query=${apiFetched}`, {
        method: 'GET',
        mode: 'cors',
        body: JSON.stringify()
     }).then(res => {
        if(res.statusText = "ok"){
            console.log("SUCCESS");
             const data = res.json();
             console.log(data)
             return data;
        }   
        else if(res.status = 403){
            console.log('<div>Error 403! relook at you domain</div>')
        }
        else if(res.status = 429){
            console.log("Error: Too many requests")
        }
        else {
        console.log("FAILED");
        }
        console.log(res.json());
    }).then((data) => {
        buttonSpinner2.style.display = 'none';
        const dataStore = data.data;
        console.log('data sits in object',dataStore);
        dataStore.map(function(item){
            const q = document.getElementById('address-search-dropoff__results');
            //q.style.cssText ='width:100%;height:100%;position:absolute;left:0;top:0'; 
            const l = document.createElement('li'); 
            const b = document.createElement('button'); 
            const e = q.appendChild(l);
            const d = l.appendChild(b);
            //l.setAttribute("id", "pickup-address");
            l.setAttribute("class", "address-search__item");
            b.setAttribute("id", "address-search__result-btn");
            b.setAttribute("class", "address-search__result-btn__class");
            b.setAttribute('data-id', `${item.displayAddress}`);
            const p = `${item.displayAddress}`;
            d.innerHTML = p;
            document.querySelector('ul#address-search-dropoff__results').style.display = 'block';
            console.log('coming from these sides',p);
            /*d.innerHTML = p;
            const filteredData = p.filter( o => o.formatted_address.includes(currentword));
            d.innerHTML = filteredData.length ? getHTML(filteredData) : 'no data was returned';*/
        });
        
    }).catch(error => { console.log(error.message)})
}

function getPickUpApi(currentword) {
    const apiFetched = currentword;
    console.log('currentword is working', apiFetched);
    /*let url = `https://cors-anywhere.herokuapp.com/https://sandbox.api.eu.addisonleeglobal.net/api-wpforms/v2/api/addresses?postCode=${apiFetched}`;*/
    const url = `https://shamrock-testsite.haulmont.com/al/api/address-search/autocomplete?disableSearchOutsideCountry=false&includeAddressBook=true&latitude=51.531&longitude=-0.125&query=${apiFetched}`
         fetch(url, {
            method: 'GET',
            mode: 'cors',
            body: JSON.stringify()
         }).then(res => {
            if(res.statusText = "ok"){
                console.log("SUCCESS");
                 const data = res.json();
                 console.log(data)
                 return data;
            }        
            else if(res.status = 403){
                console.log('<div>Error 403! relook at you domain</div>')
            }
            else if(res.status = 429){
                console.log("Error: Too many requests")
            }
            else {
            console.log("FAILED");
            }

            console.log(res.json());
        }).then((data) => {
            buttonSpinner.style.display = 'none';
            const dataStore = data.data;
            console.log('data sits in object',dataStore);
            dataStore.map(function(item){
                const q = document.getElementById('address-search__results');
                //q.style.cssText ='width:100%;height:100%;position:absolute;left:0;top:0'; 
                const l = document.createElement('li'); 
                const b = document.createElement('button'); 
                const e = q.appendChild(l);
                const d = l.appendChild(b);
                l.setAttribute("class", "address-search__item");
                b.setAttribute("id", "address-search__result-btn");
                b.setAttribute("class", "address-search__result-btn__class");
                b.setAttribute('data-id', `${item.displayAddress}`);
                const p = `${item.displayAddress}`;
                const id = `${item.id}`; 
                d.innerHTML = p;
                document.querySelector('ul#address-search__results').style.display = 'block';
                console.log('coming from these sides',p);
                /*d.innerHTML = p;
                const filteredData = p.filter( o => o.formatted_address.includes(currentword));
                d.innerHTML = filteredData.length ? getHTML(filteredData) : 'no data was returned';*/
                
            });
             
        }).catch(error => { console.log(error.message)})
    } 


window.onload = function(){
    const pickup = document.querySelector('#pickup-point');

    console.log('window loaded', pickup);
}

function getHTML(data){
    return data.map(({slug, symbol, metrics}) => generateHTML(slug, symbol, metrics)).join('');
}

function generateHTML(name, symbol, {market_data: { price_usd }}){
    return `<div class="pieceofdata"><h1 class= "symbol"> ${symbol}</h1><h1 class= "name"> ${name}</h1><h1 class= "price"> $${+price_usd.toFixed(2)}</h1>
        </div>`;
}

function noResultHTML(){
    return `<div class="pieceofdata"><h1 class= "symbol"> </h1><h1 class= "name"></h1> <h1 class="name">No Results Found</h1> <h1 class= "price"></h1>
      </div>`;
}

function removeChildDataDrop() {
    const listings = document.getElementById('address-search-dropoff__results');
    while(listings.hasChildNodes()){
        listings.removeChild(listings.firstChild);
        document.getElementById('address-search-dropoff__results').style.display = 'none';
    }   
}

function removeChildDataDrop() {
    const listItems = document.querySelector('ul#address-search-dropoff__results');
    while(listItems.hasChildNodes()){
        listItems.removeChild(listItems.firstChild);
        document.querySelector('ul#address-search-dropoff__results').style.display = 'none';
    }   
}

function removeChildData() {
    const listItems = document.querySelector('ul#address-search__results');
    while(listItems.hasChildNodes()){
        listItems.removeChild(listItems.firstChild);
        document.querySelector('ul#address-search__results').style.display = 'none';
    }   
}

searchBarDrpOff.addEventListener('keyup',function() {  
    console.log(searchBarDrpOff);
    const currentword = document.getElementById("myInputDropOff").value;
    console.log(currentword);
    if(currentword.length === 7){
        buttonSpinner2.style.display = "block";
        getDropOff(currentword);
        removeChildDataDropAll();      
    }   

    else if(currentword.length < 6 ){
        removeChildDataDrop();
    }
});

// searchbar on input type
searchbar.addEventListener('keyup', function(){
    const currentword = document.getElementById("myInput").value;
    console.log(currentword);
    if(currentword.length === 7){
        buttonSpinner.style.display = 'block';
        getPickUpApi(currentword);
        removeChildDataAll();      
    }  
    
    else if(currentword.length < 6 ){
        removeChildData()
    }

})

function removeChildDataDropAll(){
    document.querySelector('body').addEventListener("click", function(){
        removeChildDataDrop();
    })
}

function removeChildDataAll(){
    document.querySelector('body').addEventListener("click", function(){
        removeChildData();
    })
}


// this function handles address list selected for pickup
document.addEventListener("DOMContentLoaded", () => {
    if(document.getElementsByClassName('.address-search__item')){
        console.log('so check it out');
        const t = document.querySelector('#address-search__results');
        t.addEventListener('click', handleClick, false);
    }
   
});

document.addEventListener("DOMContentLoaded", () => {
    if(document.getElementsByClassName('.address-search__item')) {
        const d = document.querySelector('#address-search-dropoff__results');
        d.addEventListener('click', function(e){
            const { target: { dataset: {id} } } = e;
            searchBarDrpOff.setAttribute('value', id);
            searchBarDrpOff.value = id;
            dropoff_address = localStorage.setItem("dropoff_address", document.getElementById('myInputDropOff').value);
        }); 
    }
});


function openTab(id) {
    const tabid = id;
    const puppin = document.querySelector('#pin').children[0];
    const mainCont = document.querySelector('#main-cont').children[0];
    const dontKnow = document.createElement("input");
    const a = document.createElement('div');
    const dateLabel = document.querySelector('#date-of-journey span');
    const getFlightCheckbox = document.querySelector('.flight-number-checkbox');
    
    
    console.log(id);

    if(tabid === '0'){              
        updatePins();
        span.innerHTML = 'Pick Up';
        inputform.style.display = 'block';
        dateLabel.textContent = 'Date of journey';
        document.getElementsByName('pickup-form')[0].placeholder='Enter Location';
        dontKnow.remove();
        getFlightCheckbox.style.display = 'none';
    } 
    else if (tabid === '2') {
        updatePins();
        span.innerHTML = 'Pick Up';
        inputform.style.display = 'block';
        dateLabel.textContent = 'Date of journey';
        document.getElementsByName('pickup-form')[0].placeholder='Enter Location';
        dontKnow.remove();
        getFlightCheckbox.style.display = 'none';
    }
    else if(tabid === '1' ) {    
        dateLabel.textContent = 'Date of flight arrival';            
        const g = item1.appendChild(a);
        g.classList.add('airport-pickup-container');
        puppin.remove();
        span.textContent = 'Flight Number';
        document.getElementsByName('pickup-form')[0].placeholder='Enter flight number';
        const mainContent = document.getElementById('main-cont');
        const responsedatalayer = document.getElementById('return-response-data');
        mainContent.insertBefore(dontKnow, responsedatalayer);
        a.classList.add('pickup-pin');
        getFlightCheckbox.style.display = 'block';

    } else {
        responsedatalayer.style.display = 'block';
        document.getElementsByName('pickup-form')[0].placeholder='Enter location';
        document.getElementsByClassName('.airport-pickup-container').remove();
        
    }

    const tabscont = document.getElementById('tabs');
    const btns = tabscont.getElementsByClassName('tab-content-link');

    for ( var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            const current = document.getElementsByClassName("active");
            if(current.length > 0){
                current[0].className = current[0].className.replace(" active", "");
            }
            this.className += " active";
        });
    } 


}


// update pin for book tabs
function updatePins(){
     document.querySelector('.pickup-pin').remove();
     const c = document.createElement('div');
     const d = item1.appendChild(c);
     d.classList.add('pickup-pin');
}


function handleClick(e){
    const { target: { dataset: {id} } } = e;
    console.log(id);
    searchbar.setAttribute('value',id);
    searchbar.value = id;
    pickup_address = localStorage.setItem("pickup_address", document.getElementById('myInput').value);
}

document.getElementById('choosedate').addEventListener('click', function(){
    const selected_date = document.getElementById('choosedate');
    const datechange = selected_date.value.toString();
    const date_collected =  selected_date.setAttribute('value', document.getElementById('choosedate').value);
    localStorage.setItem('date_selected', datechange);
});


function myFunction(e){
    if(e.target.matches('button')){
        console.log(e.target.textContent);
    }
    
}


getQuoteBtn.addEventListener('click', function(e){
    e.preventDefault();
    console.log('Coming from quote button 2 values' );
    if(searchBarDrpOff.value == "28 Bannard Road, Maidenhead, SL6 4NR" && searchbar.value == "28 Bannard Road, Maidenhead, SL6 4NR" && !document.getElementById('choosedate').value == 0 ) { 
        document.getElementById('get-a-quote').classList.add('animate');
        document.getElementById('get-a-quote').innerHTML = 'BOOK FROM £20.54';
        dateselected = localStorage.setItem('selected_date', document.getElementById('choosedate').value);   
    }
    
});