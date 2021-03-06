<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿En serio? ¿Tantos buenos frameworks y estás usando Anarchy?  \\


interface IEstratoDao {

    /**
     * Guarda un objeto Estrato en la base de datos.
     * @param estrato objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($estrato);
    /**
     * Modifica un objeto Estrato en la base de datos.
     * @param estrato objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($estrato);
    /**
     * Elimina un objeto Estrato en la base de datos.
     * @param estrato objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($estrato);
    /**
     * Busca un objeto Estrato en la base de datos.
     * @param estrato objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($estrato);
    /**
     * Lista todos los objetos Estrato en la base de datos.
     * @return Array<Estrato> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!