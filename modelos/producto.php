<?php

class producto{

    private $pdo;
    private $pdo_id;
    private $pdo_nom;
    private $pdo_mar;
    private $pdo_cos;
    private $pdo_pre;
    private $pdo_can;
    private $pdo_img;
    
    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getPro_id() : ?int{
        return $this->pdo_id;
    }
    public function setPro_id(int $id){
         $this->pdo_id=$id;
    }
    
    public function getPro_nom() : ?string{
        return $this->pdo_nom;
    }
    public function setPro_nom(string $nom){
         $this->pdo_nom=$nom;
    }

    public function getPro_mar() : ?string{
        return $this->pdo_mar;
    }
    public function setPro_mar(string $mar){
         $this->pdo_mar=$mar;
    }

    public function getPro_cos() : ?float{
        return $this->pdo_cos;
    }
    public function setPro_cos(float $cos){
         $this->pdo_cos=$cos;
    }
    
    public function getPro_pre() : ?float{
        return $this->pdo_pre;
    }
    public function setPro_pre(float $pre){
         $this->pdo_pre=$pre;
    }

    public function getPro_can() : ?int{
        return $this->pdo_can;
    }

    public function setPro_can(int $can){
         $this->pdo_can=$can;
    }
    public function getPro_img() : ?string{
        return $this->pdo_img;
    }


    public function setPro_img(string $img){
         $this->pdo_img=$img;
    }

    public function Cantidad(){

        try {           
        $consulta=$this->pdo->prepare ("SELECT SUM(pro_can) as Cantidad FROM productos;");
        $consulta->execute();
        return $consulta->fetch(PDO::FETCH_OBJ);
            //code...
        } catch (Exception $e) {
          die($e->getMessage());
           
        }
    }

    public function Listar(){
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM productos;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
            //code...
        } catch (Exception $e) {
          die($e->getMessage());
            //throw $th;
        }
    }

    public function Insertar(Producto $p){
       try {           
           $consulta="INSERT INTO productos(pro_nom,pro_mar,pro_cos,pro_pre,pro_can) VALUES (?,?,?,?,?);";
           $this->pdo->prepare($consulta)->execute(array(
                     $p->getPro_nom(),
                     $p->getPro_mar(),
                     $p->getPro_Cos(),
                     $p->getPro_pre(),
                     $p->getPro_can()
                 ));
           //code...
       }  catch (Exception $e) {
        die($e->getMessage());
       }

    }

    public function Obtener($id){
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM productos WHERE id=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new Producto();
            $p->setPro_id($r->id);
            $p->setPro_nom($r->pro_nom);
            $p->setPro_mar($r->pro_mar);
            $p->setPro_cos($r->pro_cos);
            $p->setPro_pre($r->pro_pre);
            $p->setPro_can($r->pro_can);

            return $p;
            

            //code...
        } catch (Exception $e) {
          die($e->getMessage());
            //throw $th;
        }
    }

    public function Actualizar(Producto $p){
        try {           
            $consulta="UPDATE productos SET 
            pro_nom=?,
             pro_mar=?, 
             pro_cos=?, 
             pro_pre=?, 
             pro_can=? 
             WHERE id=?;";
            $this->pdo->prepare($consulta)->execute(array(
                      $p->getPro_nom(),
                      $p->getPro_mar(),
                      $p->getPro_Cos(),
                      $p->getPro_pre(),
                      $p->getPro_can(),
                      $p->getPro_id()
                  ));
            //code...
        }  catch (Exception $e) {
         die($e->getMessage());
       }

    }  
    
    public function Delete($id){
        try {           
            $consulta="DELETE FROM productos WHERE id=?;";
            $this->pdo->prepare($consulta)->execute(array($id));
            //code...
        }  catch (Exception $e) {
         die($e->getMessage());
        }
    }


}