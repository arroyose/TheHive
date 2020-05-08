<?php

    class Comunidad
    {
        public $idComunidad;
        public $nombreComunidad;
        public $direccion;
        public $piso;
        public $numero;
        public $portal;
        public $poblacion;
        public $ciudad;
        public $provincia;
        public $cpComunidad;
        public $telefono1;
        public $telefono2;
        public $email;
        public $cifComunidad;
        public $saldoInicialComunidad;
        public $annoComunidad;

        function __construct() {
            $this->idComunidad=null;
            $this->nombreComunidad=null;
            $this->direccion=null;
            $this->piso=null;
            $this->numero=null;
            $this->portal=null;
            $this->poblacion=null;
            $this->ciudad=null;
            $this->provincia=null;
            $this->cpComunidad=null;
            $this->telefono1=null;
            $this->telefono2=null;
            $this->email=null;
            $this->cifComunidad=null;
            $this->saldoInicialComunidad=null;
            $this->annoComunidad=null;
        }

        /**
         * Get the value of idComunidad
         */ 
        public function getIdComunidad()
        {
            return $this->idComunidad;
        }

        /**
         * Set the value of idComunidad
         *
         */ 
        public function setIdComunidad($idComunidad)
        {
            $this->idComunidad = $idComunidad;
        }
        

        /**
         * Get the value of nombreComunidad
         */ 
        public function getNombreComunidad()
        {
            return $this->nombreComunidad;
        }

        /**
         * Set the value of nombreComunidad
         *
         */ 
        public function setNombreComunidad($nombreComunidad)
        {
            $this->nombreComunidad = $nombreComunidad;
        }

        /**
         * Get the value of direccion
         */ 
        public function getDireccion()
        {
            return $this->direccion;
        }

        /**
         * Set the value of direccion
         *
         */ 
        public function setDireccion($direccion)
        {
            $this->direccion = $direccion;
        }
        

        /**
         * Get the value of piso
         */ 
        public function getPiso()
        {
            return $this->piso;
        }

        /**
         * Set the value of piso
         *
         */ 
        public function setPiso($piso)
        {
            $this->piso = $piso;
        }
        

        /**
         * Get the value of numero
         */ 
        public function getNumero()
        {
            return $this->numero;
        }

        /**
         * Set the value of numero
         *
         */ 
        public function setNumero($numero)
        {
            $this->numero = $numero;
        }
        

        /**
         * Get the value of portal
         */ 
        public function getPortal()
        {
            return $this->portal;
        }

        /**
         * Set the value of portal
         *
         */ 
        public function setPortal($portal)
        {
            $this->portal = $portal;
        }

        /**
         * Get the value of poblacion
         */ 
        public function getPoblacion()
        {
            return $this->poblacion;
        }

        /**
         * Set the value of poblacion
         *
         */ 
        public function setPoblacion($poblacion)
        {
            $this->poblacion = $poblacion;
        }

        /**
         * Get the value of ciudad
         */ 
        public function getCiudad()
        {
            return $this->ciudad;
        }

        /**
         * Set the value of ciudad
         *
         */ 
        public function setCiudad($ciudad)
        {
            $this->ciudad = $ciudad;
        }
        

        /**
         * Get the value of provincia
         */ 
        public function getProvincia()
        {
            return $this->provincia;
        }

        /**
         * Set the value of provincia
         *
         */ 
        public function setProvincia($provincia)
        {
            $this->provincia = $provincia;
        }
        

        /**
         * Get the value of cpComunidad
         */ 
        public function getCpComunidad()
        {
            return $this->cpComunidad;
        }

        /**
         * Set the value of cpComunidad
         *
         */ 
        public function setCpComunidad($cpComunidad)
        {
            $this->cpComunidad = $cpComunidad;
        }
        

        /**
         * Get the value of telefono1
         */ 
        public function getTelefono1()
        {
            return $this->telefono1;
        }

        /**
         * Set the value of telefono1
         *
         */ 
        public function setTelefono1($telefono1)
        {
            $this->telefono1 = $telefono1;
        }
        /**
         * Get the value of telefono2
         */ 
        public function getTelefono2()
        {
            return $this->telefono2;
        }

        /**
         * Set the value of telefono2
         *
         */ 
        public function setTelefono2($telefono2)
        {
            $this->telefono2 = $telefono2;
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
        


        /**
         * Get the value of cifComunidad
         */ 
        public function getCifComunidad()
        {
            return $this->cifComunidad;
        }

        /**
         * Set the value of cifComunidad
         *
         */ 
        public function setCifComunidad($cifComunidad)
        {
            $this->cifComunidad = $cifComunidad;
        }



        /**
         * Get the value of saldoInicialComunidad
         */ 
        public function getSaldoInicialComunidad()
        {
            return $this->saldoInicialComunidad;
        }

        /**
         * Set the value of saldoInicialComunidad
         *
         */ 
        public function setSaldoInicialComunidad($saldoInicialComunidad)
        {
            $this->saldoInicialComunidad = $saldoInicialComunidad;
        }

        /**
         * Get the value of annoComunidad
         */ 
        public function getAnnoComunidad()
        {
            return $this->annoComunidad;
        }

        /**
         * Set the value of annoComunidad
         *
         */ 
        public function setAnnoComunidad($annoComunidad)
        {
            $this->annoComunidad = $annoComunidad;
        }
    }
?>