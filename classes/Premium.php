<?php

class Premium extends User {
    protected $userType = "premium";

    function getDiscount() {
        return 10;
    }

}

?>