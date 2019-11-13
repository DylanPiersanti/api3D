<?php

function dbConnect() {
    // connexion MySQL
    return new PDO('mysql:host=localhost;dbname=api3D', 'admin', 'admin');
  }
  