<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    class photo {
        private $title;
        private $description;
        private $date;
        private $name;
        private $id;
        
        private function setId($id) { 
            $this->id = $id;
        }

        private function setTitle($title) {
            $this->title = $title;
        }

        private function setDescription($description) {
            $this->description = $description;
        }

        private function setDateToDb($date) {
            $this->date = $date;
        }

        private function setName($name) {
            $this->name = $name;
        }
        
        public function getId() {
            return $this->id;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getDescription() {
            return $this->description;
        }

        public function getDateFromDb() {
            return $this->date;
        }

        public function getName() {
            return $this->name;
        }
        
        public function editPhoto($id) {

            require_once 'connect.php';
            echo "<script>alert('$id');</script>";
            $query = sprintf("SELECT * FROM sliderphotos WHERE id=%s",
                    mysql_real_escape_string($id));

            //Writes the information to the database
            $retval = mysql_query($query) or die(mysql_error());
            $row = mysql_fetch_array($retval);
            $this->setId($id);
            $this->setTitle($row['title']);
            $this->setDescription($row['description']);
            $this->setDateToDb($row['date']);
            $this->setName($row['name']);
            //Tells you if its all ok
            //header("Location: ./slider.php");
        }    
    }