<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reciveddigital extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function reciveGas()
    {
      $gas=$_GET['gas'];
      $state->gas=$gas;
      $mygas= json_encode($state);
      {
          $file = fopen("gasrecive.json", "w") or die("can't open file");
            fwrite($file, $mygas);
            fclose($file);
      }
    }
    public function reciveTemp()
    {
        $temp=$_GET['temp'];
        $state->temp=$temp;
        $mytemp= json_encode($state);
        {
            $file = fopen("temprecive.json", "w") or die("can't open file");
              fwrite($file, $mytemp);
              fclose($file);
        }
    }
}
