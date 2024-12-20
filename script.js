
/* Function 1 : Full Event Registration-Including Adults */
let fereg = document.querySelector("#fereg");

function updateTotal() {
    let quantity = parseInt (fereg.value) || 0; 
    let total = 30 * quantity;  
    let feregtotal = document.querySelector("#feregtotal");
    
    feregtotal.value = `$ ${total}`; 
    updatefr12();
    validatereg();
}

fereg.addEventListener("input", updateTotal); 




/* FUNCTION 2 :  Show and Shine Entrant */
let sandse = document.querySelector("#sandsentrant");

function showandshine() {
    let quantity1 = parseInt(sandse.value) || 0;
    let total1 = 25 * quantity1;
    let sandsentranttotal = document.querySelector("#sandsentranttotal");
    sandsentranttotal.value = `$ ${total1}`;
    updatefr12();
    validatereg();
}

sandse.addEventListener("input", showandshine);

/* Function for filling out either of the registration options  */

function validatereg() { 
    let fereg = document.getElementById('fereg');
    let sandsentrant = document.getElementById('sandsentrant');

    // Check if either Full Event Registration or Show and Shine Entrant is filled
    if((fereg.value+sandsentrant.value).length > 0){
        fereg.removeAttribute("required", "required");
        sandsentrant.removeAttribute("required", "required");

        // Show an alert if neither field is filled
        alert("Please fill out at least one of the fields: 'Full Event Registration' or 'Show and Shine Entrant'.");
    }
   /*  if (fereg.value !== '' || sandsentrant.value !== '') {
        // Set the "required" attribute if either field is empty
        fereg.removeAttribute("required", "required");
        sandsentrant.removeAttribute("required", "required");

        // Show an alert if neither field is filled
        alert("Please fill out at least one of the fields: 'Full Event Registration' or 'Show and Shine Entrant'.");
    } */
}


/* Function 3 */
let slunch = document.querySelector("#slun");
let slunchtotal = document.querySelector("#slunchtotal");

function satlunch() {
    let quantity2 = parseInt(slunch.value) || 0;
    let total2 = 10 * quantity2;
    slunchtotal.value = "$" + total2; 
    preomealsnotinreg();
}

slunch.addEventListener("input", satlunch);



/* Function 4 */
let snma = document.querySelector("#snma");
let snmatotal= document.querySelector("#snmatotal");

function snmeal(){
    let quantity3 = parseInt(snma.value) || 0;
    let total3 = 26 * quantity3;
    snmatotal.value = "$" + total3;
    preomealsnotinreg();
}
snma.addEventListener("input", snmeal);


/* Function 5 */
let snmc = document.querySelector("#snmc");
let snmctotal = document.querySelector("#snmctotal");

function snmealc() {
    let quantity4 = parseInt(snmc.value) || 0;
    let total4 = 15 * quantity4;
    snmctotal.value = "$" + total4;
    preomealsnotinreg();
}

snmc.addEventListener("input", snmealc);

/* Function 6 POLO SHIRTS*/
let polos = document.querySelector("#polos");
let polostotal = document.querySelector("#polostotal");
function poloshirts(){
    let quantity5 = parseInt(polos.value) ||0;
    let total5 = 28 * quantity5;
   polostotal.value = "$" + total5;
   addm();
}
polos.addEventListener("input", poloshirts);



/* Function 6 */
let nac2 = document.querySelector("#nac2");
let ac2 = document.querySelector("#ac2");
function ac(){
    let quantity6 = parseInt(nac2.value) || 0;
    let total6 = 25 * quantity6;
    ac2.value = "$" + total6;
    onsitegrandtotal();
}
nac2.addEventListener("input",ac);



/* FUNCTION 7 */
let apnon = document.querySelector("#apnon");
let addc = document.querySelector("#addc");
let actotal = document.querySelector("#actotal");
function actot(){
    let nights = parseInt(apnon.value) || 0;  
    let additionalCampers = parseInt(addc.value) || 0; 
    let total7 = 5 * (nights*additionalCampers);
    actotal.value = "$" + total7;

    if(apnon.value === "" || addc.value === ""){

 message1 = alert( "Please Select both the fields ie (Number of Nights and Additional Campers for Additional people camping at the site for the sub total.");
 
}
onsitegrandtotal();}
apnon.addEventListener("input", actot);  
addc.addEventListener("input", actot); 


/* FUNCTIONS FOR THE PAYMENT DETAILS  */

/*  Function for registration fee */
function updatefr12() {
    let fr1 = document.querySelector("#feregtotal");
    let fr2 = document.querySelector("#sandsentranttotal");

  
    let feregtotalValue = parseInt(fr1.value.replace('$', '').trim()) || 0;
    let sandsentranttotalValue = parseInt(fr2.value.replace('$', '').trim()) || 0;

  
    let grandTotal = feregtotalValue + sandsentranttotalValue;
    
    let reg2 = document.querySelector("#reg2");
    reg2.value = `$ ${grandTotal}`;  
    totalpaymentdue()
}


/* Function for grandtotal of additional merchandise */

function addm(){
    let polostotal = document.querySelector("#polostotal");
    let additionalm2 = document.querySelector("#ad2");
    let totalValue = polostotal.value;  // Get the total value with "$"
    let grandTotal1 = totalValue.replace('$', '');  // Remove the "$" to get the numeric part
    additionalm2.value = "$" + grandTotal1; 
    totalpaymentdue()
    
}



/* Function for pre-ordered meals not included in registration fee */

function preomealsnotinreg() {
    let sl = document.querySelector("#slunchtotal");
    let satnightca = document.querySelector("#snmatotal");
    let satnightcc = document.querySelector("#snmctotal");
    let preorderedmeals = document.querySelector("#preomeal");
  
    let slValue = parseInt(sl.value.replace('$', '').trim()) || 0;
    let satnightcaValue = parseInt(satnightca.value.replace('$', '').trim()) || 0;
    let satnightccValue = parseInt(satnightcc.value.replace('$', '').trim()) || 0;
  
   
    let totalcm = slValue + satnightcaValue + satnightccValue;
  
   
    preorderedmeals.value = "$" + totalcm.toFixed(2);
    totalpaymentdue()
  }

  /* Function for the grand total of On site camping fees */

  function onsitegrandtotal() {
    let twoAdultsandTwochild = document.querySelector("#ac2");
    let additionalpeoplecampingatthesite = document.querySelector("#actotal");
    let onsitegrandtotalfee = document.querySelector("#onsitecf");

    // Extract numerical values, removing the '$' symbol
    let twoAdultsAndTwoChildValue = parseInt(twoAdultsandTwochild.value.replace('$', '').trim()) || 0;
    let additionalPeopleCampingValue = parseInt(additionalpeoplecampingatthesite.value.replace('$', '').trim()) || 0;

    // Calculate the grand total by adding both the values
    let grand2 = twoAdultsAndTwoChildValue + additionalPeopleCampingValue;

    // Format the grand total with a dollar sign and two decimal places
    onsitegrandtotalfee.value = "$" + grand2; 
    totalpaymentdue()
}



/* Function for the total payment due */

function totalpaymentdue(){
 let reg2 = document.querySelector("#reg2");
 let additionalm2 = document.querySelector("#ad2");
 let preorderedmeals = document.querySelector("#preomeal");
 let onsitegrandtotalfee = document.querySelector("#onsitecf");
 let totalpaymdue = document.querySelector("#totalsum");


 let reg2Value = parseInt(reg2.value.replace('$', '').trim()) || 0;
 let additionalm2Value = parseInt(additionalm2.value.replace('$', '').trim()) || 0;
 let preorderedmealsValue = parseInt(preorderedmeals.value.replace('$', '').trim()) || 0;
 let onsitegrandtotalfeeValue = parseInt(onsitegrandtotalfee.value.replace('$', '').trim()) || 0;
    
 quantity10 = reg2Value + additionalm2Value + preorderedmealsValue + onsitegrandtotalfeeValue;

 totalpaymdue.value = "$" + quantity10;
}







/* JS FOR THE SIGNATURE */

document.addEventListener('DOMContentLoaded', function () {
    if (typeof SignaturePad === "undefined") {
        console.error("SignaturePad library is not loaded.");
        return;
    }

    // Initializing the Signature Pad
    const canvas = document.querySelector('#signature-pad');
    const signaturePad = new SignaturePad(canvas);

    document.querySelector('#clear-signature').addEventListener('click', function () {
        signaturePad.clear();
    });

    // When the form is submitted, we set the signature data into the hidden input
    document.querySelector('form').addEventListener('submit', function (event) {
        const signatureData = signaturePad.toDataURL();
        if (signatureData) {
            // Set the signature data to the hidden input
            document.querySelector('#signature-input').value = signatureData;
        } else {
            alert("Please provide a signature before submitting the form.");
            event.preventDefault();  // Prevent the form from being submitted if no signature
        }
    });
});



