<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class Rocket {
  public $name;
  public $height;
  public $costPerLauch;

  public function __consruct($name, $height, $costPerLauch){

    $this -> name = $name;
    $this -> height = $height;
    $this -> costPerLauch = $costPerLauch;

  }
}

$falcon = new Rocket('Falcon 9', 70, 57000000);




class RocketController extends AbstractController { 

  public function homepage(){

    $falcon9 = array(
      'name' =>'Falcon 9',
      'height' => 63.3,
      'mass' => 549054,
      'diameter' => 3.7,
      'costPerLaunch' => 57000000,
    );

    $falconHeavy = array(
      'name' =>'Falcon Heavy',
      'height' => 70,
      'diameter' => 12.2,
      'mass' => 1420788,
      'costPerLaunch' => 90000000
    );

    $dragon= array(
      'name' =>'Dragon',
      'height' => 8.1,
      'diameter' => 12.2,
      'costPerLaunch' => 57000000,
      'mass' => 4200
    );

    $rockets = [];

    array_push($rockets, $falcon9, $falconHeavy, $dragon);


    return $this -> render('rocket/homepage.html.twig', [
      'rockets' => $rockets
      ]);
    
  }

  
}


      

?>