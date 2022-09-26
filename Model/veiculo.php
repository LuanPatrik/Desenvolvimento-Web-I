<?php
class Veiculo
{
   private $id; 
   private $fabricante;
   private $modelo; 
   private $ano;
   private $placa;

   public function __construct($f=null, $m=null, $a=null, $p=null)
   {
      $this->fabricante = $f;
      $this->modelo = $m;
      $this->ano = $a;
      $this->placa = $p;
   }
   
   public function getId()
   {
      return $this->id;
   }

   public function setId($id)
   {
      $this->id = $id;

      return $this;
   }

   public function getModelo()
   {
      return $this->modelo;
   }

   public function setModelo($modelo)
   {
      $this->modelo = $modelo;

      return $this;
   }

   public function getAno()
   {
      return $this->ano;
   }

   public function setAno($ano)
   {
      $this->ano = $ano;

      return $this;
   }

   public function getPlaca()
   {
      return $this->placa;
   }

   public function setPlaca($placa)
   {
      $this->placa = $placa;

      return $this;
   }

   public function getFabricante()
   {
      return $this->fabricante;
   }

   public function setFabricante($fabricante)
   {
      $this->fabricante = $fabricante;

      return $this;
   }
}
?>