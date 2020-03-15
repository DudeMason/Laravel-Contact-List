<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <script src="{{ asset('js/app.js') }}" defer></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>
    </head>

    <style>
      .topRight {
        position: fixed;
        top: 12px;
        right: 6%;
      }
      .rightDrop {
        position: fixed;
        top: 65px;
        right: 6%;
      }
      .topLeft {
        position: fixed;
        top: 15px;
        left: 6%;
      }

      .addContact {
        position: fixed;
        right: 6%;
        bottom: 40px;
        border-radius: 50px;
        color: white;
        background-color: #1662FC;
        font-size: 27pt;
        width: 49px;
        box-shadow: .5px 2px 4px 0 grey;
        border: 1px grey;
        font-family: sans-serif;
        padding-top: 2px;
        padding-bottom: 6px;
      }

      .editContact {
        position: fixed;
        right: 5%;
        bottom: 40px;
        border-radius: 20px;
        color: white;
        background-color: #1662FC;
        font-size: 17pt;
        padding: 5px;
        padding-left: 11px;
        padding-right: 11px;
        box-shadow: .5px 2px 4px 0 grey;
        border: 1px grey;
        font-family: sans-serif;
      }
      .contactButton {
        border-radius: 50px;
        color: white !important;
        background-color: #1662FC;
        font-size: 17pt;
        padding-top: 7px;
        padding-bottom: 5px;
        padding-left: 7px;
        padding-right: 7px;
        box-shadow: .5px 2px 4px 0 grey;
        border: 1px grey;
        font-family: sans-serif;
        text-align: center;
        margin: 5px;
      }
      .menuButton {
        border-radius: 200px;
        color: white !important;
        background-color: #1662FC;
        font-size: 19pt;
        padding: 4px;
        margin: 5px;
        width: 45px;
        box-shadow: .5px 2px 4px 0 grey;
        border: 1px grey;
        font-family: sans-serif;
        text-align: center;
      }
      .fixedButton {
        position: relative;
        top: 88px;
        left: 8px;
        margin-top: 21px;
      }

      .dib {
          display: inline-block;
      }

      .flex {
          display: flex;
      }

      .items-center {
          align-items: center;
      }

      .justify-between {
          justify-content: space-between;
      }

      .h1 {
          height: 1rem;
      }

      .link {
          text-decoration: none;
          transition: color .15s ease-in;
          outline: none;
      }

      .link:link, .link:visited {
          transition: color .15s ease-in;
      }

      .link:hover {
          transition: color .15s ease-in;
      }

      .link:active {
          transition: color .15s ease-in;
      }

      .link:focus {
          transition: color .15s ease-in;
          outline: 1px dotted currentColor;
      }

      .w1 {
          width: 1rem;
      }

      .white-70 {
          color: #000;
      }

      .hover-white:hover {
          color: #000;
          background-color: darkgrey;
          border-radius: 29px;
      }

      .hover-white:focus {
          color: #000;
          background-color: grey;
          border-radius: 29px;
          outline: none;
      }

      .hover-bg-white:hover {
          background-color: darkgrey;
          color: #000;
      }

      .hover-bg-white:focus {
          background-color: grey;
          color: #000;
      }

      .pa3 {
          padding: 1rem;
      }

      .mr3 {
          margin-right: 1rem;
      }

      .dim {
          opacity: 1;
          transition: opacity .15s ease-in;
      }

      .dim:hover, .dim:focus {
          opacity: .5;
          transition: opacity .15s ease-in;
      }

      .dim:active {
          opacity: .8;
          transition: opacity .15s ease-out;
      }

      .bg-animate, .bg-animate:hover, .bg-animate:focus {
          transition: background-color .15s ease-in-out;
      }

      @media screen and (min-width: 30em) {
          .mr4-ns {
              margin-right: 2rem;
          }
      }
    </style>

    <body>
      @yield('content')
    </body>

</html>
