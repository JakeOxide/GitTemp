/* Filter Actions */

// Flags

// A Flags
let selectedSedan = false;
let selectedSUV = false;
let selectedSuburban = false;
let selectedVan = false;

// S Flags
let selectedAutoGSM = false;
let selectedManualGSM = false;
let selectedLimitedMileage = false;
let selectedUnlimitedMileage = false;

let dataindex = null;

// Event Listener on Filter Options to change Flag Values

function updateFlag(flag) {
    //This updateFlag method needs to be updated so that it can use one identifier for one radio button group

    switch(flag) {
        case 'c_auto' : {
            if(document.getElementById('c_auto').checked){
                selectedAutoGSM = true;
            }
            else {
                selectedAutoGSM = false;
            }
            if(document.getElementById('c_man').checked){
                selectedManualGSM = true;
            }
            else{
                selectedManualGSM = false;
            }
            break;
        }
        case 'c_man' : {
            if(document.getElementById('c_auto').checked){
                selectedAutoGSM = true;
            }
            else {
                selectedAutoGSM = false;
            }
            if(document.getElementById('c_man').checked){
                selectedManualGSM = true;
            }
            else{
                selectedManualGSM = false;
            }
            break;
        }
        case 'c_limited' : {
            if(document.getElementById('c_limited').checked){
                selectedLimitedMileage = true;
            }
            else {
                selectedLimitedMileage = false;
            }
            if(document.getElementById('c_unlimited').checked){
                selectedUnlimitedMileage = true;
            }
            else {
                selectedUnlimitedMileage = false;
            }
            break;
        }
        case 'c_unlimited' : {
            if(document.getElementById('c_limited').checked){
                selectedLimitedMileage = true;
            }
            else {
                selectedLimitedMileage = false;
            }
            if(document.getElementById('c_unlimited').checked){
                selectedUnlimitedMileage = true;
            }
            else {
                selectedUnlimitedMileage = false;
            }
            break;
        }
        case 'c_sedan' : {
            if(document.getElementById('c_sedan').checked){
                selectedSedan = true;
            }
            else {
                selectedSedan = false;
            }
            if(document.getElementById('c_suv').checked){
                selectedSUV = true;
            }
            else {
                selectedSUV = false;
            }
            if(document.getElementById('c_suburban').checked){
                selectedSuburban = true;
            }
            else {
                selectedSuburban = false;
            }
            if(document.getElementById('c_van').checked){
                selectedVan = true;
            }
            else {
                selectedVan = false;
            }
            break;
        }
        case 'c_suv' : {
            if(document.getElementById('c_sedan').checked){
                selectedSedan = true;
            }
            else {
                selectedSedan = false;
            }
            if(document.getElementById('c_suv').checked){
                selectedSUV = true;
            }
            else {
                selectedSUV = false;
            }
            if(document.getElementById('c_suburban').checked){
                selectedSuburban = true;
            }
            else {
                selectedSuburban = false;
            }
            if(document.getElementById('c_van').checked){
                selectedVan = true;
            }
            else {
                selectedVan = false;
            }
            break;
        }
        case 'c_suburban' : {
            if(document.getElementById('c_sedan').checked){
                selectedSedan = true;
            }
            else {
                selectedSedan = false;
            }
            if(document.getElementById('c_suv').checked){
                selectedSUV = true;
            }
            else {
                selectedSUV = false;
            }
            if(document.getElementById('c_suburban').checked){
                selectedSuburban = true;
            }
            else {
                selectedSuburban = false;
            }
            if(document.getElementById('c_van').checked){
                selectedVan = true;
            }
            else {
                selectedVan = false;
            }
            break;
        }
        case 'c_van' : {
            if(document.getElementById('c_sedan').checked){
                selectedSedan = true;
            }
            else {
                selectedSedan = false;
            }
            if(document.getElementById('c_suv').checked){
                selectedSUV = true;
            }
            else {
                selectedSUV = false;
            }
            if(document.getElementById('c_suburban').checked){
                selectedSuburban = true;
            }
            else {
                selectedSuburban = false;
            }
            if(document.getElementById('c_van').checked){
                selectedVan = true;
            }
            else {
                selectedVan = false;
            }
            break;
        }

        default : {
            alert("Wrong Flag Ident in updateFlag()");
        }
    }
    
/*     console.log(`DEBUG:  inside Update Flag ...`);
    console.log(`DEBUG:  inside Update Flag ...selectedSedan -  ${selectedSedan}`);
    console.log(`DEBUG:  inside Update Flag ...selectedSUV -  ${selectedSUV}`);
    console.log(`DEBUG:  inside Update Flag ...selectedSuburban -  ${selectedSuburban}`);
    console.log(`DEBUG:  inside Update Flag ...selectedVan -  ${selectedVan}`);
    console.log(`DEBUG:  inside Update Flag ...selectedAutoGSM -  ${selectedAutoGSM}`);
    console.log(`DEBUG:  inside Update Flag ...selectedManualGSM -  ${selectedManualGSM}`);
    console.log(`DEBUG:  inside Update Flag ...selectedLimitedMileage -  ${selectedLimitedMileage}`);
    console.log(`DEBUG:  inside Update Flag ...selectedUnlimitedMileage -  ${selectedUnlimitedMileage}`); */
}

function resetFlags(ident) {
    switch(ident) {
        case 'a' : {
            console.log(`DEBUG:  A Flag  Reset True ...`);
            selectedSedan = false;
            selectedSUV = false;
            selectedSuburban = false;
            selectedVan = false;
            break;
        }
        
        case 's' : {
            console.log(`DEBUG:  S Flag  Reset True ...`);
            selectedAutoGSM = false;
            selectedManualGSM = false;
            selectedLimitedMileage = false;
            selectedUnlimitedMileage = false;
            break;
        }

        default : {
            console.log("Wrong Flag Group Ident in resetFlags()");
            alert("Wrong Flag Group Ident in resetFlags()");
        }
    }
}

const apply_a = document.getElementById("btn_apply_a");
apply_a.addEventListener("click", () => {

    console.log(`DEBUG: apply_a `);
    //getType() = Model ( gretModel())

        if(selectedSedan) {
            var index = -1;
            if(dataindex != null) {
                genCardReset();
            }
            dataindex = new Array();
            console.log("DEBUG:  sedan check");
            for(var j = 0; j < cardDataCollection.length; j++) {
                console.log("DEBUG:  in first loop");
                if(cardDataCollection[j].getType() === '2') {
                    console.log(`DEBUG: card data ${j} contains 2 bags`);
                    dataindex[++index] = j;
                    console.log(`DEBUG:  dataindex set to ${j} at index ${index}`);
                }
            }
            render(dataindex);
        }
        if(selectedSUV) {
            var index = -1;
            if(dataindex != null) {
                genCardReset();
            }
            dataindex = new Array();
            console.log("DEBUG:  sedan check");
            for(var j = 0; j < cardDataCollection.length; j++) {
                console.log("DEBUG:  in first loop");
                if(cardDataCollection[j].getType() === '3') {
                    console.log(`DEBUG: card data ${j} contains 3 bags`);
                    dataindex[++index] = j;
                    console.log(`DEBUG:  dataindex set to ${j} at index ${index}`);
                }
            }
            render(dataindex);
        }
        if(selectedSuburban) {
            var index = -1;
            if(dataindex != null) {
                genCardReset();
            }
            dataindex = new Array();
            console.log("DEBUG:  sedan check");
            for(var j = 0; j < cardDataCollection.length; j++) {
                console.log("DEBUG:  in first loop");
                if(cardDataCollection[j].getType() === '4') {
                    console.log(`DEBUG: card data ${j} contains 4 bags`);
                    dataindex[++index] = j;
                    console.log(`DEBUG:  dataindex set to ${j} at index ${index}`);
                }
            }
            render(dataindex);
        }
        if(selectedVan) {
            var index = -1;
            if(dataindex != null) {
                genCardReset();
            }
            dataindex = new Array();
            console.log("DEBUG:  sedan check");
            for(var j = 0; j < cardDataCollection.length; j++) {
                console.log("DEBUG:  in first loop");
                if(cardDataCollection[j].getType() === '5') {
                    console.log(`DEBUG: card data ${j} contains 5 bags`);
                    dataindex[++index] = j;
                    console.log(`DEBUG:  dataindex set to ${j} at index ${index}`);
                }
            }
            render(dataindex);
        }
 
});

const apply_s = document.getElementById("btn_apply_s");
apply_s.addEventListener("click", () => {

    console.log(`DEBUG: apply_s `);

        if(selectedAutoGSM) {
            var index = -1;
            if(dataindex != null) {
                genCardReset();
            }
            dataindex = new Array();
            console.log("DEBUG:  auto check");
            for(var j = 0; j < cardDataCollection.length; j++) {
                console.log("DEBUG:  in first loop");
                if(cardDataCollection[j].getGsm() === 'Automatic') {
                    console.log(`DEBUG: card data ${j} contains "auto"`);
                    dataindex[++index] = j;
                    console.log(`DEBUG:  dataindex set to ${j} at index ${index}`);
                }
            }
            render(dataindex);
        }
        if(selectedManualGSM) {
            var index = -1;
            if(dataindex != null) {
                genCardReset();
            }
            dataindex = new Array();
            console.log("DEBUG:  manual check");
            for(var j = 0; j < cardDataCollection.length; j++) {
                console.log("DEBUG:  in first loop");
                if(cardDataCollection[j].getGsm() === 'Manual') {
                    console.log(`DEBUG: card data ${j} contains "manual"`);
                    dataindex[++index] = j;
                    console.log(`DEBUG:  dataindex set to ${j} at index ${index}`);
                }
            }
            render(dataindex);
        }
        if(selectedLimitedMileage) {
            var index = -1;
            if(dataindex != null) {
                genCardReset();
            }
            dataindex = new Array();
            console.log("DEBUG:  Limited check");
            for(var j = 0; j < cardDataCollection.length; j++) {
                console.log("DEBUG:  in first loop");
                if(cardDataCollection[j].getMileage() === 'Limited') {
                    console.log(`DEBUG: card data ${j} contains "Limited"`);
                    dataindex[++index] = j;
                    console.log(`DEBUG:  dataindex set to ${j} at index ${index}`);
                }
            }
            render(dataindex);
        }
        if(selectedUnlimitedMileage) {
            var index = -1;
            if(dataindex != null) {
                genCardReset();
            }
            dataindex = new Array();
            console.log("DEBUG:  Unlimited check");
            for(var j = 0; j < cardDataCollection.length; j++) {
                console.log("DEBUG:  in first loop");
                if(cardDataCollection[j].getMileage() === 'Unlimited') {
                    console.log(`DEBUG: card data ${j} contains "Unlimited"`);
                    dataindex[++index] = j;
                    console.log(`DEBUG:  dataindex set to ${j} at index ${index}`);
                }
            }
            render(dataindex);
        }
 
});


function render(dcindex) {
    console.log(`DEBUG:  inside render ...`);
    var newCards = new Array();

    for(var i = 0; i < dcindex.length; i++) {
        newCards[i] = cardCollection[dcindex[i]];
        // 1st   0                      2
        // 2nd   1                      5
        console.log(`DEBUG:  newcard set ${i}`);
    }

    cardSectionDyn = document.getElementById('section_cards');
    while(cardSectionDyn.firstChild) {
        console.log(`DEBUG: Called Remove `);
        cardSectionDyn.removeChild(cardSectionDyn.lastChild);
    }
    for(var i = 0; i < newCards.length; i++) {
        console.log(`DEBUG: trying to uppend `);
        cardSectionDyn.appendChild(newCards[i]);
    }
}

var reset_sec = document.getElementById('btn_cancel_s');
reset_sec.onclick = function () {
    const selectables_s = document.getElementsByClassName("selectable_s");
    for(var j = 0; j < selectables_s.length; j++) {
            selectables_s[j].checked = false;
    }
    resetFlags('s');
    var cardSectionDynReset = document.getElementById('section_cards');
    while(cardSectionDyn.firstChild) {
        console.log(`DEBUG: Called Remove in Reset cancel_s `);
        cardSectionDyn.removeChild(cardSectionDyn.lastChild);
    }
    for(var i = 0; i < cardCollection.length; i++) {
        cardSectionDynReset.appendChild(cardCollection[i]);
    }
}

var reset_asd = document.getElementById('btn_cancel_a');
reset_asd.onclick = function () {
    const selectables_a = document.getElementsByClassName("selectable_a");
    for(var j = 0; j < selectables_a.length; j++) {
            selectables_a[j].checked = false;
    }
    resetFlags('a');
    var cardSectionDynReset = document.getElementById('section_cards');
    while(cardSectionDyn.firstChild) {
        console.log(`DEBUG: Called Remove in Reset cancel_a `);
        cardSectionDyn.removeChild(cardSectionDyn.lastChild);
    }
    for(var i = 0; i < cardCollection.length; i++) {
        cardSectionDynReset.appendChild(cardCollection[i]);
    }
}


function genCardReset () {
    var cardSectionDynReset = document.getElementById('section_cards');
    while(cardSectionDyn.firstChild) {
        console.log(`DEBUG: Called Remove in GenReset `);
        cardSectionDyn.removeChild(cardSectionDyn.lastChild);
    }
    for(var i = 0; i < cardCollection.length; i++) {
        cardSectionDynReset.appendChild(cardCollection[i]);
    }
}





/*             if(document.getElementById('c_man').checked){
                selectedManualGSM = true;
                break; 
            }
            selectedManualGSM = false;
            if(document.getElementById('c_auto').checked){
                selectedAutoGSM = true;
                break; 
            }
            selectedAutoGSM = false;
            break; 
        }
        case 'c_limited' : {
            if(document.getElementById('c_limited').checked){
                selectedLimitedMileage = true;
            }
            selectedLimitedMileage = false;
            break;
        }
        case 'c_unlimited' : {
            if(document.getElementById('c_unlimited').checked){
                selectedUnlimitedMileage = true;
            }
            selectedUnlimitedMileage = false;
            break;
        }
        case 'c_sedan' : {
            if(document.getElementById('c_sedan').checked){
                selectedSedan = true;
            }
            selectedSedan = false;
            break;
        }
        case 'c_suv' : {
            if(document.getElementById('c_suv').checked){
                selectedSUV = true;
            }
            selectedSUV = false;
            break;
        }
        case 'c_suburban' : {
            if(document.getElementById('c_suburban').checked){
                selectedSuburban = true;
            }
            selectedSuburban = false;
            break;
        }
        case 'c_van' : {
            if(document.getElementById('c_van').checked){
                selectedVan = true;
            }
            selectedVan = false;
            break;
        }

        default : {
            alert("Wrong Flag Ident in updateFlag()");
        }*/