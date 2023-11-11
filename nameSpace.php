<?php

// namespace.php

// Buat namespace
namespace Conflict;

// Import data dari conflict
$data = "Data dari conflict";

// Buat object dari namespace yang dibuat
class MyNamespace {
    public function getData() {
        return "Data dari MyNamespace";
    }
}

// Import data helper
use Helper;

// Tampilkan helper menggunakan echo
echo Helper\helpMe();

// Masukkan Helper\helpMe();
Helper\helpMe();
