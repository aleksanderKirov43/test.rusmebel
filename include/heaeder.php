<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test.rosmebel(Brandmaker)</title>
  <link rel="icon" href="image/favicon.png" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/media.main.css">
</head>

<body>

<section class="container">
    <div class="menu row mobile__menu">
      <ul class="list col-lg-6">
        <li>Just ride</li>
        <li>About</li>
        <li>Features</li>
        <li>Specifications</li>
        <li>Faq</li>
      </ul>
      <div class="logo col-lg-3"><img src="image/logo.png" alt="logo company VANMOOF"></div>
      <div class="burger__menu time__blok">
        <img src="/image/basket.svg" alt="cart menu">

        <img id="burger" src="/image/burgerMenu.svg" alt="burger menu">
        <div id="mySidebar" class="sidebar">
          <img class="logo" src="image/logo.png" alt="logo">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="burger__list">
            <a href="#">Just ride</a>
            <a href="#">About</a>
            <a href="#">Features</a>
            <a href="#">Specifications</a>
            <a href="#">Faq</a>
          </div>
          <button id="openModalBtn" type="button" onclick="modalOpen();">Order now</button>
        </div>

      </div>
      <div class="time__blok col-lg-3">
        <p>New York, NY</p>
        <p>3:48 AM</p>
        <img src="image/basket.png" alt="backet company VANMOOF">
      </div>
    </div>
  </section>