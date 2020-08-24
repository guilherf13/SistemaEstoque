<?php
     class Product
     {
         private string $name;
         private string $code;
         private string $model;
         private string $color;
         private string $amount;

         public function __construct(string $name, string $code, string $model, string $color, string $amount)
         {
              $this->setName($name);
              $this->setCode($code);
              $this->setModel($model);
              $this->setColor($color);
              $this->setAmount($amount);
         }

         //Gethers

         public function getName()
         {
              return $this->name;
         }

         public function getCode()
         {
              return $this->code;
         }

         public function getModel()
         {
              return $this->model;
         }

         public function getColor()
         {
              return $this->color;
         }

         public function geAmount()
         {
              return $this->amount;
         }

         //Sethers
         public function setName($name)
         {
              $this->name = $name;
         }

         public function setCode($code)
         {
              $this->code = $code;
         }

         public function setModel($model)
         {
              $this->model = $model;
         }

         public function setColor($color)
         {
              $this->color = $color;
         }

         public function setAmount($amount)
         {
              $this->amount = $amount;
         }
     }