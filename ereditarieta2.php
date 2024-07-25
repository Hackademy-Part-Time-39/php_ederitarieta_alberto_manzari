<?php

class Vertebrate {
    public function __construct() {
        $this->printVertebrate();
    }

    protected function printVertebrate() {
        echo "Sono un animale Vertebrato\n";
    }
}

class WarmBlooded extends Vertebrate {
    public function __construct() {
        parent::__construct();
        $this->printWarmBlooded();
    }

    protected function printWarmBlooded() {
        echo "Sono un animale a Sangue Caldo\n";
    }
}

class ColdBlooded extends Vertebrate {
    public function __construct() {
        parent::__construct();
        $this->printColdBlooded();
    }

    protected function printColdBlooded() {
        echo "Sono un animale a Sangue Freddo\n";
    }
}

class Mammal extends WarmBlooded {
    public function __construct() {
        parent::__construct();
        $this->printMammal();
    }

    protected function printMammal() {
        echo "Sono un Mammifero\n";
    }
}

class Bird extends WarmBlooded {
    public function __construct() {
        parent::__construct();
        $this->printBird();
    }

    protected function printBird() {
        echo "Sono un Uccello\n";
    }
}

class Fish extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printFish();
    }

    protected function printFish() {
        echo "Sono un Pesce\n";
    }
}

class Reptile extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printReptile();
    }

    protected function printReptile() {
        echo "Sono un Rettili\n";
    }
}

class Amphibian extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printAmphibian();
    }

    protected function printAmphibian() {
        echo "Sono un Anfibio\n";
    }
}

// Creazione di un nuovo oggetto Fish
$magikarp = new Fish();

?>
