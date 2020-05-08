<?php

    class Usuarios
    {
        public $idUsuario;
        public $alias;
        public $password;
        public $permisos;
        public $PropietariosResidente;
        public $email;

        function __construct() {
            $this->idUsuario=null;
            $this->alias=null;
            $this->password=null;
            $this->permisos=null;
            $this->PropietariosResidente=null;
            $this->email=null;
        }
        /**
         * Get the value of idUsuario
         */ 
        public function getIdUsuario()
        {
            return $this->idUsuario;
        }

        /**
         * Set the value of idUsuario
         *
         */ 
        public function setIdUsuario($idUsuario)
        {
            $this->idUsuario = $idUsuario;
        }

        /**
         * Get the value of alias
         */ 
        public function getAlias()
        {
            return $this->alias;
        }

        /**
         * Set the value of alias
         *
         */ 
        public function setAlias($alias)
        {
            $this->alias = $alias;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
            return $this->password;
        }

        /**
         * Set the value of password
         *
         */ 
        public function setPassword($password)
        {
            $this->password = $password;
        }

        /**
         * Get the value of permisos
         */ 
        public function getPermisos()
        {
            return $this->permisos;
        }

        /**
         * Set the value of permisos
         *
         */ 
        public function setPermisos($permisos)
        {
            $this->permisos = $permisos;
        }

        /**
         * Get the value of PropietariosResidente
         */ 
        public function getPropietariosResidente()
        {
            return $this->PropietariosResidente;
        }

        /**
         * Set the value of PropietariosResidente
         */ 
        public function setPropietariosResidente($PropietariosResidente)
        {
                $this->PropietariosResidente = $PropietariosResidente;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * Set the value of email
         *
         */ 
        public function setEmail($email)
        {
            $this->email = $email;
        }
    }
    

?>