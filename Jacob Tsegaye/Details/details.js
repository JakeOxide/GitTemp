window.onload = () => {
    populateDetails();
}

function populateDetails() {
    //image.setAttribute('src', `data:image/jpg;charset=utf8;base64, ${imageSource}`);

    const image_box_one = document.getElementById('d_image_one');
    image_box_one.setAttribute('src', `data:image/jpg;charset=utf8;base64, ${localStorage.getItem('imageOne')}`);

    const image_box_two = document.getElementById('d_image_two');
    image_box_two.setAttribute('src', `data:image/jpg;charset=utf8;base64, ${localStorage.getItem('imageTwo')}`);

    const image_box_three = document.getElementById('d_image_three');
    image_box_three.setAttribute('src', `data:image/jpg;charset=utf8;base64, ${localStorage.getItem('imageThree')}`);

    const image_box_four = document.getElementById('d_image_four');
    image_box_four.setAttribute('src', `data:image/jpg;charset=utf8;base64, ${localStorage.getItem('imageFour')}`);

    const text_box_model = document.getElementById('d_model');
    text_box_model.setAttribute('value', localStorage.getItem('model'));

    const text_box_engine = document.getElementById('d_engine');
    text_box_engine.setAttribute('value', localStorage.getItem('engine'));

    const text_box_gsm = document.getElementById('d_gsm');
    text_box_gsm.setAttribute('value', localStorage.getItem('gsm'));

    const text_box_mileage = document.getElementById('d_mileage');
    text_box_mileage.setAttribute('value', localStorage.getItem('mileage'));

    const text_box_seat = document.getElementById('d_seats');
    text_box_seat.setAttribute('value', localStorage.getItem('seat'));

    
}