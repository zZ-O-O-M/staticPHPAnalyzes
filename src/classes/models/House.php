<?php


namespace App\models;


class House {

   private $address;
   private $size;
   private $price;

   /**
    * House constructor.
    * @param $address
    * @param $size
    * @param $price
    */
   public function __construct($address, $size, $price) {
      $this->address = $address;
      $this->size    = $size;
      $this->price   = $price;
   }


   /**
    * @return mixed
    */
   public function getAddress() {
      return $this->address;
   }

   /**
    * @param mixed $address
    */
   public function setAddress($address): void {
      $this->address = $address;
   }

   /**
    * @return mixed
    */
   public function getSize() {
      return $this->size;
   }

   /**
    * @param mixed $size
    */
   public function setSize($size): void {
      $this->size = $size;
   }

   /**
    * @return mixed
    */
   public function getPrice() {
      return $this->price;
   }

   /**
    * @param mixed $price
    */
   public function setPrice($price): void {
      $this->price = $price;
   }

}