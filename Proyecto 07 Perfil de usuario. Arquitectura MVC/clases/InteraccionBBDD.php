<?php
class InteraccionBBDD
{
  private $host = "localhost"
  private $username = "root";
  private $password = "";
  private $database = "juegos";

  private $nombre="";
  private $apellidos="";
  private $edad=0;
  private $curso="";
  private $puntuacion="";

  private $conector;
  function __construct()
  {
      global $config;
      $this->host=$config["host"];
      $this->username=$config["username"];
      $this->password=$config["password"];
      $this->database=$config["database"];
  }
  function conectar()
  {
    $conectorTmp = new mysqli ($this->server, $this->username, $this->password, $this->database);
    if ($conectorTmp->connect_errno) {
      $this->conector=false;
    }else{
      $this->conector=$conectorTmp;
    }
  }


    /**
     * Get the value of Host
     *
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set the value of Host
     *
     * @param mixed host
     *
     * @return self
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get the value of Username
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of Username
     *
     * @param mixed username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of Password
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of Password
     *
     * @param mixed password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of Database
     *
     * @return mixed
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Set the value of Database
     *
     * @param mixed database
     *
     * @return self
     */
    public function setDatabase($database)
    {
        $this->database = $database;

        return $this;
    }

    /**
     * Get the value of Nombre
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of Nombre
     *
     * @param mixed nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of Apellidos
     *
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of Apellidos
     *
     * @param mixed apellidos
     *
     * @return self
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of Edad
     *
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of Edad
     *
     * @param mixed edad
     *
     * @return self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of Curso
     *
     * @return mixed
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of Curso
     *
     * @param mixed curso
     *
     * @return self
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get the value of Puntuacion
     *
     * @return mixed
     */
    public function getPuntuacion()
    {
        return $this->puntuacion;
    }

    /**
     * Set the value of Puntuacion
     *
     * @param mixed puntuacion
     *
     * @return self
     */
    public function setPuntuacion($puntuacion)
    {
        $this->puntuacion = $puntuacion;

        return $this;
    }

    /**
     * Get the value of Conector
     *
     * @return mixed
     */
    public function getConector()
    {
        return $this->conector;
    }

    /**
     * Set the value of Conector
     *
     * @param mixed conector
     *
     * @return self
     */
    public function setConector($conector)
    {
        $this->conector = $conector;

        return $this;
    }

}
 ?>
