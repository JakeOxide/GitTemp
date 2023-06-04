<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Details</title>
    <link rel="stylesheet" href="page_details.css" />
    <link rel="stylesheet" href="navBar_details.css" />
    <link rel="stylesheet" href="inputField_details.css" />
    <link rel="stylesheet" href="homepage_custom.css" />
    <link rel="stylesheet" href="fdb.css">
    <script src="details.js"></script>
  </head>
  <?php
    require_once("../dbconfig.php");

    $currentUserBalance = 0;
    $currentUserName = '';
              if(session_status() != PHP_SESSION_NONE) {
                  header('location: ../login.php');
              }
              session_start();
              if(session_status() == PHP_SESSION_ACTIVE) {
                  if(!isset($_SESSION['userFname'])) {
                      header('location: ../login.php');
                  }
                  $currentUserBalance = $_SESSION['userBalance'];
                  $currentUserName = $_SESSION['userFname'];
              }
              session_abort();
          
    ?>
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
          <a href="#" id="h_disable"><?php echo $currentUserName ?></a>
          <a href="#" id="h_disable"><?php echo $currentUserBalance ?></a>
        </nav>
      </header>

      <main class="main_home">

        <section class="section_fdb" id="fdb_container">

            <section class="section_imageBox">
                    <section class="imageHolder image1" id="">
                      <img src="" alt="" class="imageResize Image" id="d_image_one"/>
                    </section>
                    <section class="imageHolder image2">
                      <img src="" alt="" class="imageResize Image" id="d_image_two" />
                    </section>
                    <section class="imageHolder image3">
                      <img src="" alt="" class="imageResize Image" id="d_image_three" />
                    </section>
                    <section class="imageHolder image4">
                      <img src="" alt="" class="imageResize Image" id="d_image_four" />
                    </section>
            </section>

            <section class="section_details">
              <form class="details_form" action="payandrent.php">
                  <table>
                    <tr>
                      <td>
                        <label for="model" class="label_details">Model</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="text"
                          name="model"
                          id="d_model"
                          class="input_box_noBorder"
                          disabled
                        />
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label for="engine" class="label_details">Engine</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="text"
                          name="engine"
                          id="d_engine"
                          class="input_box_noBorder"
                          disabled
                        />
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label for="transmission" class="label_details"
                          >Transmission</label
                        >
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="text"
                          name="transmission"
                          id="d_gsm"
                          class="input_box_noBorder"
                          disabled
                        />
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label for="mileage" class="label_details">Mileage</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="text"
                          name="mileage"
                          id="d_mileage"
                          class="input_box_noBorder"
                          disabled
                        />
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label for="seats" class="label_details">Seats</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="text"
                          name="seats"
                          id="d_seats"
                          class="input_box_noBorder"
                          disabled
                        />
                      </td>
                    </tr>
                  </table>
                  <section class="section_btns">
                        <input
                          type="submit"
                          name="payandrent"
                          id="pay"
                          class="btn btn_confirm"
                          value="Pay and Rent"
                        />
                        <!-- Inject code to update db table or redirect to tranasction homepage -->
                        <input
                          type="reset"
                          name="reset"
                          id="resetpayment"
                          class="btn btn_cancel"
                          value="Close"
                          onclick="localStorage.clear(); window.close();"
                        />
                  </section>
              </form>
            </section>
        </section>
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
  <script type="text/javascript" src="details.js"></script>

</html>
