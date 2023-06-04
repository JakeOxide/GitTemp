<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <link rel="stylesheet" href="page.css" />
    <link rel="stylesheet" href="navBar.css" />
    <link rel="stylesheet" href="card.css" />
    <link rel="stylesheet" href="inputField.css" />
    <link rel="stylesheet" href="homepage.css" />
    <script type="text/javascript" src="card.js"></script>
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
          <a href="#">link3</a>
          <a href="#">link4</a>
          <a href="#" onclick="submit()">Log out</a>
        </nav>
        <form action="../login.php" method="post" id="logoutForm" class="hidden">
            <input type="submit" name="g_logout" id="logout" value="Logout">
        </form>
        <script>
          function submit() { document.getElementById('logoutForm').submit(); }
        </script>
      </header>

      <main class="main_home">

        <aside class="custom_aside aside_filters">
          <!-- gsm, seats(), mileage(limited/!limited) -->
          <section class="filterOptions filterOptions_s">
            <span>
              <input
                type="radio"
                name="gsm_gear"
                id="c_auto"
                class="generic_input_margin selectable selectable_s"
                onchange="updateFlag('c_auto')"
              />
              <label for="c_auto" class="choice choice_a">Automatic Gear</label>
            </span>
            <span>
              <input
                type="radio"
                name="gsm_gear"
                id="c_man"
                class="generic_input_margin selectable selectable_s"
                onchange="updateFlag('c_man')"
              />
              <label for="c_man" class="choice choice_m">Manual Gear</label>
            </span>
            <span>
              <input
                type="radio"
                name="mile_limit"
                id="c_limited"
                class="generic_input_margin selectable selectable_s"
                onchange="updateFlag('c_limited')"
              />
              <label for="c_limited" class="choice choice_l"
                >Limited Mileage</label
              >
            </span>
            <span>
              <input
                type="radio"
                name="mile_limit"
                id="c_unlimited"
                class="generic_input_margin selectable selectable_s"
                onchange="updateFlag('c_unlimited')"
              />
              <label for="c_unlimited" class="choice choice_u"
                >Unlimited Mileage</label
              >
            </span>
          </section>
          <aside class="aside_options">
            <button class="btn btn_confirm" id="btn_apply_s">Apply</button>
            <button class="btn btn_cancel" id="btn_cancel_s">Reset</button>
          </aside>
        </aside>

        <section class="custom_section section_typeFilters">
          <!-- Sedan, SUV, Suburban, Van, Truck -->
          <section class="filterOptions">
            <span>
              <input
                type="radio"
                id="c_sedan"
                name="modelSelection"
                class="generic_input_margin selectable selectable_a"
                onchange="updateFlag('c_sedan')"
              />
              <label for="c_sedan" class="choice">Sedan</label>
            </span>
            <span>
              <input
                type="radio"
                id="c_suv"
                name="modelSelection"
                class="generic_input_margin selectable selectable_a"
                onchange="updateFlag('c_suv')"
              />
              <label for="c_suv" class="choice">SUV</label>
            </span>
            <span>
              <input
                type="radio"
                id="c_suburban"
                name="modelSelection"
                class="generic_input_margin selectable selectable_a"
                onchange="updateFlag('c_suburban')"
              />
              <label for="c_suburban" class="choice">Suburban</label>
            </span>
            <span>
              <input
                type="radio"
                id="c_van"
                name="modelSelection"
                class="generic_input_margin selectable selectable_a"
                onchange="updateFlag('c_van')"
              />
              <label for="c_van" class="choice">Van</label>
            </span>
          </section>
          <aside class="aside_options">
            <button class="btn btn_confirm" id="btn_apply_a">Apply</button>
            <button class="btn btn_cancel" id="btn_cancel_a">Reset</button>
          </aside>
        </section>

        <section
          class="custom_section section_cards"
          id="section_cards"
        ></section>

        <!-- "data:image/jpg;charset=utf8;base64,<?php //echo base64_encode($row['img1']); ?>" -->
        <?php
            connectDB();
            /* "SELECT img1, seat, bag, gsm, mileage, FROM usermaster WHERE User_name='$Username'" */

                  /* "SELECT `id`, `img1`, `seat`, `bag`, `gsm`, `mileage` FROM `data`;"; */
            $counter = -1;
            $sql = "SELECT `id`, `img1`, `img2`, `img3`, `img4`, `model`, `engine`, `gsm`, `seat`, `mileage` FROM `cars`;";
            $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
            while ($row = $result->fetch_assoc()){
              $counter++;
          ?>
                  <input type="hidden" name="dataCollection" id="dataCollection" class="dataCollection"
                  
                      data-img1="<?php echo base64_encode($row ['img1']); ?>" 
                      data-img2="<?php echo base64_encode($row ['img2']); ?>" 
                      data-img3="<?php echo base64_encode($row ['img3']); ?>" 
                      data-img4="<?php echo base64_encode($row ['img4']); ?>" 
                      data-seat="<?php echo $row ['seat']; ?>" 
                      data-model="<?php echo $row ['model']; ?>" 
                      data-gsm="<?php echo $row ['gsm']; ?>"
                      data-engine="<?php echo $row ['engine']; ?>" 
                      data-mileage="<?php echo $row ['mileage']; ?>" 
                      data-id="<?php echo $row ['id']; ?>"
                      >      
                  <script>
                      dataElement = document.getElementsByClassName('dataCollection')[<?php echo $counter ?>];
                      card = processCard(
                        dataElement.dataset.img1,
                        dataElement.dataset.img2, 
                        dataElement.dataset.img3, 
                        dataElement.dataset.img4, 
                        dataElement.dataset.model, 
                        dataElement.dataset.engine, 
                        dataElement.dataset.gsm, 
                        dataElement.dataset.seat,
                        dataElement.dataset.mileage, 
                        dataElement.dataset.id);
                      cardCollection[++counter] = card;
                  </script>
        <?php
        }
        ?>

        <script>
          <?php
          
           ?>
            cardSectionDyn = document.getElementById('section_cards');
            for(var i = 0; i < cardCollection.length; i++) {
                cardSectionDyn.appendChild(cardCollection[i]);
            }

        </script>

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
  
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="filters.js"></script>

</html>
