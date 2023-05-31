const imageInputOne = document.getElementById('imageInputOne');
imageInputOne.addEventListener('change', (event) => {
    const inputFile = event.target.files[0];
    var fileReader = new FileReader();
    var imageBox = document.getElementById('imageSlotOne');
                fileReader.readAsDataURL(inputFile);
                fileReader.onload = function() {
                    imageBox.setAttribute('src', fileReader.result);
                }
})

const imageInputTwo = document.getElementById('imageInputTwo');
imageInputTwo.addEventListener('change', (event) => {
    const inputFile = event.target.files[0];
    var fileReader = new FileReader();
    var imageBox = document.getElementById('imageSlotTwo');
                fileReader.readAsDataURL(inputFile);
                fileReader.onload = function() {
                    imageBox.setAttribute('src', fileReader.result);
                }
})

const imageInputThree = document.getElementById('imageInputThree');
imageInputThree.addEventListener('change', (event) => {
    const inputFile = event.target.files[0];
    var fileReader = new FileReader();
    var imageBox = document.getElementById('imageSlotThree');
                fileReader.readAsDataURL(inputFile);
                fileReader.onload = function() {
                    imageBox.setAttribute('src', fileReader.result);
                }
})

const imageInputFour = document.getElementById('imageInputFour');
imageInputFour.addEventListener('change', (event) => {
    const inputFile = event.target.files[0];
    var fileReader = new FileReader();
    var imageBox = document.getElementById('imageSlotFour');
                fileReader.readAsDataURL(inputFile);
                fileReader.onload = function() {
                    imageBox.setAttribute('src', fileReader.result);
                }
})