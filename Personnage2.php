<?php
class Personnage2
{
  private $_force;
  private $_localisation;
  private $_experience;
  private $_degats;

  private static $_texteADire = 'Je vais tous vous tuer !';

  const FORCE_PETITE = 20;
  const FORCE_MOYENNE = 50;
  const FORCE_GRANDE = 80;
  
  public function __construct($force, $degats) // Constructeur demandant 2 paramètres
  {
    echo 'Un personnage est créé ! <br>'; // Message s'affichant une fois que tout objet est créé.
    $this->setForce($force); // Initialisation de la force.
    $this->setDegats($degats); // Initialisation des dégâts.
    $this->_experience = 10; // Initialisation de l'expérience à 10.
  }
  // Ceci est la méthode degats() : elle se charge de renvoyer le contenu de l'attribut $_degats.
  public function degats()
  {
    return $this->_degats;
  }
  
  // Ceci est la méthode force() : elle se charge de renvoyer le contenu de l'attribut $_force.
  public function force()
  {
    return $this->_force;
  }
  
  // Ceci est la méthode experience() : elle se charge de renvoyer le contenu de l'attribut $_experience.
  public function experience()
  {
    return $this->_experience;
  }
  // public function parler()
  // {
  //   echo 'Je suis un personnage ! <br>';
  // }
  // public static function parler()
  // {
  // echo 'Je vais tous vous tuer !';
  // }
  public static function parler()
  {
    echo self::$_texteADire; // On donne le texte à dire.
  }
  public function frapper(Personnage2 $persoAFrapper)
  {
    $persoAFrapper->_degats += $this->_force;
  }
  
  public function gagnerExperience()
  {
    $this->_experience += 10;
  }
  public function setDegats($degats)
  {
    $this->_degats = $degats;
  }
  
  // Mutateur chargé de modifier l'attribut $_force.
  public function setForce($force)
  {
    // On vérifie qu'on nous donne bien soit une « FORCE_PETITE », soit une « FORCE_MOYENNE », soit une « FORCE_GRANDE ».
    if (in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE]))
    {
      $this->_force = $force;
    }
  }

  // public function setForce($force)
  // {
  //   if (!is_int($force)) // S'il ne s'agit pas d'un nombre entier.
  //   {
  //     trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
  //     return;
  //   }
    
  //   if ($force > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
  //   {
  //     trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
  //     return;
  //   }
    
  //   $this->_force = $force;
  // }
  
  // Mutateur chargé de modifier l'attribut $_experience.
  public function setExperience($experience)
  {
    if (!is_int($experience)) // S'il ne s'agit pas d'un nombre entier.
    {
      trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
      return;
    }
    
    if ($experience > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
    {
      trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
      return;
    }
    
    $this->_experience = $experience;
  }
}      