


const goBackBtn = document.getElementById("go-back-btn");

goBackBtn.addEventListener("click", function() {
  window.location.href = "TransactionHome.php";
});



function Deposit(){

const depositAmountInput = document.getElementById("deposit-amount");
const depositScreen = document.querySelector(".deposit-screen");
const depositButton = document.getElementById("enter-btn");
const currencySelectorElement = document.getElementById("currency-selector");
currencySelectorElement.addEventListener("change", updateCurrencySymbol);

/* document.querySelector('a.deposit').addEventListener('click', (e) => {
e.preventDefault(); */
const depositCard = document.querySelector('.deposit-card');

depositCard.style.display = depositCard.style.display === "none" ? "block" : "none";

/* }); */

// Listen for changes on the input field
depositAmountInput.addEventListener("input", () => {
// Update the text content of the deposit screen element
depositScreen.textContent = document.querySelector(".input-group-addon").textContent + depositAmountInput.value;

// Update the deposit button text content
depositButton.textContent = `Deposited ${document.querySelector(".input-group-addon").textContent}${depositAmountInput.value}`;
});

depositButton.addEventListener("click", () => {
var card = document.querySelector(".deposit-card");
 card.style.transform = "rotateY(180deg)";
});
}
function updateCurrencySymbol() {
var currencySymbolElement = document.querySelector(".input-group-addon");
 currencySelectorElement = document.getElementById("currency-selector");
var selectedCurrency = currencySelectorElement.value;

switch (selectedCurrency) {
  case "USD":
    currencySymbolElement.textContent = "$";
    break;
  case "EUR":
    currencySymbolElement.textContent = "€";
    break;
  case "GBP":
    currencySymbolElement.textContent = "£";
    break;
  case "Birr":
    currencySymbolElement.textContent = "Br";
  default:
    currencySymbolElement.textContent = "$";
    break;
}
  // Update deposit screen and deposit button text content
  depositScreen.textContent = currencySymbolElement.textContent + depositAmountInput.value;
  depositButton.textContent = `Deposited ${currencySymbolElement.textContent}${depositAmountInput.value}`;

}


function Withdrawal(){
/* document.querySelector('a.withdrawal').addEventListener('click', (e) => {
  e.preventDefault(); */
  const WithdrawalCard = document.querySelector('.withdrawal-card');

  WithdrawalCard .style.display = WithdrawalCard .style.display === "none" ? "flex" : "none";

/* }); */
const withdrawalCard = document.querySelector('.withdrawal-card');
const continueButton = document.getElementById('continue-btn');


/* continueButton.addEventListener('click', function () {
  // Check if the entered verification code is correct (assuming it should match a pre-generated code)
  const generatedCode = generateCode(); // Generate a 6-digit code (your implementation here)
  const enteredCode = verificationCodeInput.value;
  
  if (enteredCode === generatedCode) {
    withdrawalCard.classList.add('flipped');
    withdrawalCard.addEventListener('transitionend', function () {
      // Change the content to "Success" after the flip animation is completed
      withdrawalCard.innerHTML = '<p>Success</p>';
      withdrawalCard.classList.remove('flipped');
    }, { once: true });
  } else {
    alert('Incorrect verification code. Please try again.');
  }
}); */



 


}

  
  $(document).ready(function() {
  $(".dropDown-withdrawal").click(function() {
    $("#bank-transfer-additional-info").toggle();
  });
  });
function showOptions(optionsId) {
  // Hide all options containers
  $(".options-container").hide();

  // Show the clicked bank's options container
  var options = document.getElementById(optionsId);
  options.style.display = "block";

  // Hide options of other banks
  $(".options-container").not("#" + optionsId).hide();
}



