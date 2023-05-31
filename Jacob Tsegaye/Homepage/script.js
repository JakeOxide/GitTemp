document.onchange = function () {
    const cardSection = document.getElementById("section_cards");
    const newSection = document.createElement("p");
    if (!cardSection.hasChildNodes()) {
        console.log("NO CONTENT");
        cardSection.className = "section_cards_empty";
    newSection.style.fontSize = "2rem";
    newSection.innerHTML = "Nothing to Display";
    newSection.style.color = "grey";
    cardSection.appendChild(newSection);
  } /* else {
    cardSection.classList.replace("section_cards_empty", "section_cards");
    cardSection.removeChild(newSection);
} */
};

const btns = document.getElementsByClassName("btn_confirm");
const ncSection = document.createElement("p");
for (var i = 0; i < btns.length; i++) {
  btns[i].onclick = function () {
    const cSection = document.getElementById("section_cards");
    if (!cSection.hasChildNodes()) {
      console.log("NO CONTENT");
      cSection.className = "section_cards_empty";
      ncSection.style.fontSize = "2rem";
      ncSection.innerHTML = "Nothing to Display";
      ncSection.style.color = "grey";
      cSection.appendChild(ncSection);
    } /* else if (cSection.hasChildNodes()) {
        cSection.classList.replace("section_cards_empty", "section_cards");
        cSection.removeChild(ncSection);
    } */
};
}

function emptyContentCheck() {
    const cardSection = document.getElementById("section_cards");
    const newSection = document.createElement("p");
    if (!cardSection.hasChildNodes()) {
      console.log("NO CONTENT");
      cardSection.className = "section_cards_empty";
      newSection.style.fontSize = "2rem";
      newSection.innerHTML = "Nothing to Display";
      newSection.style.color = "grey";
      cardSection.appendChild(newSection);
    } /* else if (cardSection.hasChildNodes()) {
      cardSection.classList.replace("section_cards_empty", "section_cards");
      cardSection.removeChild(newSection);
    } */
}





/* const resets = document.getElementsByClassName("btn_cancel");
    for(var i = 0; i < resets.length; i++) {
        resets[i].onclick = function () {
            const selectables = document.getElementsByClassName("selectable");
            for(var j = 0; j < selectables.length; j++) {
                    selectables[j].checked = false;
            }
        }
    } */

/* 
const ico_seat = "../Card/Assets/Icons/ico_car_seat_50.png";
const ico_luggage = "../Card/Assets/Icons/ico_luggage_50.png";
const ico_gearStick = "../Card/Assets/Icons/ico_gear_stick_50.png";
const ico_odometer = "../Card/Assets/Icons/ico_odometer_50.png";
 *//* 
function createCard(imageSource, seat, bag, gear, mileage) {
    const card = document.createElement('div');
        card.className = "card"; */

/* --------------------------------------------------- */
/* 
    const image = document.createElement('img');
        image.setAttribute('src', imageSource);
        image.setAttribute('alt', 'Car Image');
        image.className = "card_image";

    const descSection = document.createElement('section');
        descSection.className = "card_desc_boxes"; */
/* --------------------------------------------------- */
/* 
    const seatBox = document.createElement('div');
        seatBox.className = "infoBox";

    const seatIcon = document.createElement('img');
        seatIcon.setAttribute('src', ico_seat);
        seatIcon.setAttribute('alt', 'Seat Icon');
        seatIcon.className = "ico";

    const seatInfo = document.createElement('p');
        seatInfo.innerHTML = (seat + ' Seats'); */

/* --------------------------------------------------- */

  /*   const bagBox = document.createElement('div');
        bagBox.className = "infoBox";

    const bagIcon = document.createElement('img');
        bagIcon.setAttribute('src', ico_luggage);
        bagIcon.setAttribute('alt', 'Bag Icon');
        bagIcon.className = "ico";

    const bagInfo = document.createElement('p');
        bagInfo.innerHTML = (bag + ' Bags');
 */
/* --------------------------------------------------- */

   /*  const gearBox = document.createElement('div');
        gearBox.className = "infoBox";

    const gearIcon = document.createElement('img');
        gearIcon.setAttribute('src', ico_gearStick);
        gearIcon.setAttribute('alt', 'Gear Icon');
        gearIcon.className = "ico";

    const gearInfo = document.createElement('p');
        gearInfo.innerHTML = (gear); */

/* --------------------------------------------------- */

   /*  const mileBox = document.createElement('div');
        mileBox.className = "infoBox";

    const mileIcon = document.createElement('img');
        mileIcon.setAttribute('src', ico_odometer);
        mileIcon.setAttribute('alt', 'Odometer Icon');
        mileIcon.className = "ico";

    const mileInfo = document.createElement('p');
        mileInfo.innerHTML = (mileage); */

/* --------------------------------------------------- */

   /*  const readMore = document.createElement('button');
        readMore.className = "btn";
        readMore.innerHTML = "Read More";
 */
/* --------------------------------------------------- */
  /*   card.appendChild(image);
    card.appendChild(descSection);
    descSection.appendChild(seatBox);
    descSection.appendChild(bagBox);
    descSection.appendChild(gearBox);
    descSection.appendChild(mileBox);
    descSection.appendChild(readMore);
    seatBox.appendChild(seatIcon);
    seatBox.appendChild(seatInfo);
    bagBox.appendChild(bagIcon);
    bagBox.appendChild(bagInfo);
    gearBox.appendChild(gearIcon);
    gearBox.appendChild(gearInfo);
    mileBox.appendChild(mileIcon);
    mileBox.appendChild(mileInfo);

        return card;
} */

/* 

    const cardSectionDyn = document.getElementById('section_cards');
    cardSectionDyn.appendChild(createCard('../Card/Assets/Images/CarOne.jpg', 4, 5, 'Automatic', 'Unlimited'));
    cardSectionDyn.appendChild(createCard('../Card/Assets/Images/CarTwo.jpg', 4, 2, 'Automatic', 'Unlimited'));
    cardSectionDyn.appendChild(createCard('../Card/Assets/Images/CarThree.jpg', 4, 2, 'Automatic', 'Unlimited'));
    cardSectionDyn.appendChild(createCard('../Card/Assets/Images/CarFour.jpg', 4, 3, 'Automatic', 'Unlimited'));
    cardSectionDyn.appendChild(createCard('../Card/Assets/Images/CarFive.jpg', 7, 4, 'Automatic', 'Unlimited'));

 */
















/* Backup */

/* const btns = document.getElementsByClassName("btn_confirm");
for (var i = 0; i < btns.length; i++) {
  btns[i].onclick = function () {
    const cardSection = document.getElementById("section_cards");
  if (!cardSection.hasChildNodes()) {
    console.log("NO CONTENT");
    const newSection = document.createElement("p"); *//* 
    cardSection.style.alignItems = "center";
    cardSection.style.justifyContent = "center";
    cardSection.style.border = "0.1rem solid lightGrey";
    cardSection.style.boxShadow = "inset 0rem 0rem 0.5rem grey"; */
/*     cardSection.className = "section_cards_empty";
    newSection.style.fontSize = "2rem";
    newSection.innerHTML = "Nothing to Display";
    newSection.style.color = "grey";
    cardSection.appendChild(newSection);
  } else if (cardSection.hasChildNodes()) {
    cardSection.classList.replace("section_cards_empty", "section_cards");
    cardSection.removeChild(newSection);
  }
  };
} */