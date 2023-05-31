const ico_seat = "../Card/Assets/Icons/ico_car_seat_50.png";
const ico_luggage = "../Card/Assets/Icons/ico_luggage_50.png";
const ico_gearStick = "../Card/Assets/Icons/ico_gear_stick_50.png";
const ico_odometer = "../Card/Assets/Icons/ico_odometer_50.png";



let dataElement;
let card;
let cardSectionDyn;
let cardCollection = new Array();
let cardDataCollection = new Array();
let counter = -1;
let index = -1;


function cardInfoFactory(gsm, type, mileage) {
    // change type with model and getType() = Model (getModel())
    return {
            'gsm' : gsm,
            'type' : type,
            'mileage' : mileage,
            getGsm() {
                return gsm;
            },
            getType() {
                return type;
            },
            getMileage() {
                return mileage;
            }
        };
}

function createCard(imageSource, seat, model, gear, mileage, id) {

    var cardInfoTemp = cardInfoFactory(gear, model, mileage);
    cardDataCollection[++index] = cardInfoTemp;

    const card = document.createElement('div');
        card.className = "card";

/* --------------------------------------------------- */

    const image = document.createElement('img');
        image.setAttribute('src', `data:image/jpg;charset=utf8;base64, ${imageSource}`);
        image.setAttribute('alt', 'Car Image');
        image.className = "card_image";

    const descSection = document.createElement('section');
        descSection.className = "card_desc_boxes";
/* --------------------------------------------------- */

    const seatBox = document.createElement('div');
        seatBox.className = "infoBox";

    const seatIcon = document.createElement('img');
        seatIcon.setAttribute('src', ico_seat);
        seatIcon.setAttribute('alt', 'Seat Icon');
        seatIcon.className = "ico";

    const seatInfo = document.createElement('p');
        seatInfo.innerHTML = (seat + ' Seats');

/* --------------------------------------------------- */

    const modelBox = document.createElement('div');
        modelBox.className = "infoBox";

    const modelIcon = document.createElement('img');
        modelIcon.setAttribute('src', ico_luggage);
        modelIcon.setAttribute('alt', 'Model Icon');
        modelIcon.className = "ico";

    const modelInfo = document.createElement('p');
        modelInfo.innerHTML = (model + ' Model');

/* --------------------------------------------------- */

    const gearBox = document.createElement('div');
        gearBox.className = "infoBox";

    const gearIcon = document.createElement('img');
        gearIcon.setAttribute('src', ico_gearStick);
        gearIcon.setAttribute('alt', 'Gear Icon');
        gearIcon.className = "ico";

    const gearInfo = document.createElement('p');
        gearInfo.innerHTML = (gear);

/* --------------------------------------------------- */

    const mileBox = document.createElement('div');
        mileBox.className = "infoBox";

    const mileIcon = document.createElement('img');
        mileIcon.setAttribute('src', ico_odometer);
        mileIcon.setAttribute('alt', 'Odometer Icon');
        mileIcon.className = "ico";

    const mileInfo = document.createElement('p');
        mileInfo.innerHTML = (mileage);

/* --------------------------------------------------- */

    const readMore = document.createElement('button');
        readMore.className = "btn";
        readMore.innerHTML = "View Deal";
        readMore.setAttribute('id', id);

/* --------------------------------------------------- */
    card.appendChild(image);
    card.appendChild(descSection);
    descSection.appendChild(seatBox);
    descSection.appendChild(modelBox);
    descSection.appendChild(gearBox);
    descSection.appendChild(mileBox);
    descSection.appendChild(readMore);
    seatBox.appendChild(seatIcon);
    seatBox.appendChild(seatInfo);
    modelBox.appendChild(modelIcon);
    modelBox.appendChild(modelInfo);
    gearBox.appendChild(gearIcon);
    gearBox.appendChild(gearInfo);
    mileBox.appendChild(mileIcon);
    mileBox.appendChild(mileInfo);

    return card;
}