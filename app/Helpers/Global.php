<?php
    use App\Ruangan;
    use App\User;
    // use App\Pemilik;
    // use App\Transaksi;

    function totalRuangan()
    {
        return Ruangan::count();
    }

    function totalUser()
    {
        return User::count();
    }
?>