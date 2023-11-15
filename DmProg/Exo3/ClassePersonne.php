<?php
// Classe de base Personne
class Personne {
    protected $prenom;
    protected $age;

    public function __construct($prenom, $age) {
        $this->prenom = $prenom;
        $this->age = $age;
    }
}

// Classe Homme
class Homme extends Personne{
    public function sePresenter() {
        echo "Je suis un Homme de {$this->age} ans et je m'appelle {$this->prenom}\n";
    }
}

// Classe Femme
class Femme extends Personne{
    public function sePresenter() {
        echo "Je suis une Femme de {$this->age} ans et je m'appelle {$this->prenom}\n";
    }
}

// Exemple d'utilisation
$homme = new Homme("John", 30);
$femme = new Femme("Alice", 25);

$homme->sePresenter();
?>
<br>
<?php
$femme->sePresenter();
?>