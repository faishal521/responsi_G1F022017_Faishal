<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$faishal = new Person("faishal", "argamakmur");

// tambahkan value nama di object
$faishal->nama = "faishal";

// panggil function sayHelloNull dengan parameter
$faishal->sayHelloNull("Kic");

// buat object dari kelas person
$faishal = new Person("faishal", "bengkulu");

// tambahkan value nama di object
$faishal->nama = "faishal";

// panggil function sayHelloNull dengan parameter null
$faishal->sayHelloNull(null);
