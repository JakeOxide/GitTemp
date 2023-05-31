<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <link rel="stylesheet" href="page.css" />
    <link rel="stylesheet" href="homepage.css" />
    <link rel="stylesheet" href="navBar.css" />
    <link rel="stylesheet" href="inputField.css" />
  </head>
  <body>
    <div class="contentWrapper">
      <header class="main_header">
        <div class="hmenu" id="hmenu">
          <div class="barOne bar"></div>
          <div class="barTwo bar"></div>
          <div class="barThree bar"></div>
        </div>
        <p class="autoOasis">
          <a href="#" class="autoLink">Auto Oasis</a>
        </p>
        <nav class="navBar_links" id="navLinks">
          <a href="#">link1</a>
          <a href="#">link2</a>
          <a href="#">link3</a>
          <a href="#">link4</a>
          <a href="#">link5</a>
        </nav>
      </header>
      <main class="main mainWrapper">
        <section class="section_main section_main_searchBar">
        <form action="search.php">
            <input
              type="text"
              name="search"
              id="search"
              class="input_box"
              placeholder="Search for a car"
            />
            <button class="btn_mobile btnSearch">Search</button>
          </form>
        </section>
        <section class="section_main section_main_editBoxes">
          <section class="section_editBoxes section_details">
        <form action="upload.php" method="post" enctype="multipart/form-data">
              <table class="details_table">
                <tr>
                  <td>
                    <label for="model">Model</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input
                      type="text"
                      name="model"
                      id="model"
                      class="input_box"
                    />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="engine">Engine</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input
                      type="text"
                      name="engine"
                      id="engine"
                      class="input_box"
                    />
                  </td>
                </tr>
                <tr>
                  <td><label for="transmission_p">Transmission</label></td>
                </tr>
                <tr>
                  <td>
                    <input
                      type="radio"
                      name="gsm"
                      id="transmission_manual"
                      value="Manual"
                      class="generic_input_margin"
                    /><!-- Values -->
                    <label for="transmission_manual">Manual</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input
                      type="radio"
                      name="gsm"
                      id="transmission_auto"
                      value="Automatic"
                      class="generic_input_margin"
                    />
                    <label for="transmission_auto">Automatic</label>
                  </td>
                </tr>
                <tr>
                  <td><label for="mileage_p">Mileage</label></td>
                </tr>
                <tr>
                  <td>
                    <input
                      type="radio"
                      name="mileage"
                      id="mileage_limited"
                      value="limited"
                      class="generic_input_margin"
                    />
                    <label for="mileage_limited">Limited</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input
                      type="radio"
                      name="mileage"
                      id="mileage_unlimited"
                      value="unlimited"
                      class="generic_input_margin"
                    />
                    <label for="mileage_unlimited">Unlimited</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="seats">Seats</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <select name="seats" id="seats" class="input_box_margin">
                      <option value="selected" selected>Select</option>
                      <option value="2">2 Seater (Sports)</option>
                      <option value="5">5 Seater (Sedans)</option>
                      <option value="7">7 Seater (SUVs/Suburbans)</option>
                      <option value="12">12 Seater (Vans)</option>
                    </select>
                  </td>
                </tr>
                <!-- <tr>
                  <td>
                    <label for="bags">Bags</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <select name="model" id="bags" class="input_box_margin">
                      <option value="selected" selected>Select</option>
                      <option value="Sedan">2 Bags (Sports)</option>
                      <option value="5">5 Bags (Sedans)</option>
                    </select>
                  </td>
                </tr> -->
              </table>
            </section>
            <section class="section_editBoxes section_images">
              <!-- 
              <img src="./Images/CarOne.jpg" alt="Car One">
              <img src="./Images/CarTwo.jpg" alt="Car Two">
              <img src="./Images/CarThree.jpg" alt="Car Three">
              <img src="./Images/CarFour.jpg" alt="Car Four"> -->
              <section class="imageHolder ImageOne Image_right_bottom">
                <span class="Image">
                  <img class="imageResize" id="imageSlotOne"/>
                </span>
                <input
                  type="file"
                  name="imageOne"
                  id="imageInputOne"
                  class="btnOne generic_input_special"
                />
                <button class="btn btn_cancel custom_width btnTwo">Reset</button>
              </section>
              <section class="imageHolder ImageTwo Image_left_bottom">
                <span class="Image">
                  <img class="imageResize" id="imageSlotTwo"/>
                </span>
                <input
                  type="file"
                  name="imageTwo"
                  id="imageInputTwo"
                  class="btnOne generic_input_special"
                />
                <button class="btn btn_cancel custom_width btnTwo">Reset</button>
              </section>
              <section class="imageHolder ImageThree Image_right_top">
                <span class="Image">
                  <img class="imageResize" id="imageSlotThree"/>
                </span>
                <input
                  type="file"
                  name="imageThree"
                  id="imageInputThree"
                  class="btnOne generic_input_special"
                />
                <button class="btn btn_cancel custom_width btnTwo">Reset</button>
              </section>
              <section class="imageHolder ImageFour Image_left_top">
                <span class="Image">
                  <img class="imageResize" id="imageSlotFour"/>
                </span>
                <input
                  type="file"
                  name="imageFour"
                  id="imageInputFour"
                  class="btnOne generic_input_special"
                />
                <button class="btn btn_cancel custom_width btnTwo">Reset</button>
              </section>
            </section>
          </section>
          <section class="section_main section_main_btns">
            <input type="submit" name="send" id="send" value="Save" class="btn btn_confirm_mobile btn_options" >
            <!-- <button class="btn btn_confirm_mobile btn_options">Save</button>
            <button class="btn btn_cancel_mobile btn_options">Reset</button>
            <button class="btn btn_cancel_mobile btn_options">Cancel</button> -->
          </section>
        </form>
      </main>
    </div>
  </body>
  <script>
    const navBtn = document.getElementById("hmenu");
    const navList = document.getElementById("navLinks");
    navBtn.addEventListener("click", () => {
      navList.classList.toggle("list_activate");
      navBtn.classList.toggle("btn_Change");
    });
  </script>
  <script src="homepage.js"></script>
</html>
