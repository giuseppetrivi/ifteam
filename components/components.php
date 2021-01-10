<?php

  class Component {

    public static function head($page) {
      echo '<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="css/style.main.css">
        <link rel="stylesheet" href="css/style.'.$page.'.css">
        <title>IF Team - '.ucfirst($page).'</title>';
    }

  }