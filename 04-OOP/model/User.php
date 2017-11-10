<?php

include 'config/Conexao.php';
include_once '';

/**
 * Description of User
 *
 * @copyright (c) year, Luciano Oliveira Lmideias.com
 */
class User {
   
    private $con;
    private $userid;
    private $nome;
    private $idade;
    
    function __construct() {
        $this->con = new Conexao();       
    }
    
    //METODOS MAGICO
	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}
	public function __get($atributo){
		return $this->$atributo;
	}
    
/*========================================================================*/   

    public function Adicionar($dados) {
        	try{
                    
                        //--- Dados a serem cadastrados---
                    
			$this->nome = $dados['nome'];                        
			$this->idade = $dados['idade'];
                       
                        
                        //----- Preparar a inclusao do usuario -----
                        
			$cst = $this->con->conectar()->prepare("INSERT INTO `user` (`nome`, `idade`)  VALUES (:nome, :idade)");
			$cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
			$cst->bindParam(":idade", $this->idade, PDO::PARAM_STR);
			                      
                        
                        //--- validar dados ----------
                        
			$validar = $this->con->conectar()->prepare("SELECT * FROM `user` WHERE `nome` = :nome");
			$validar->bindParam(':nome', $this->nome, PDO::PARAM_STR);			
			$validar->execute();
			
                        //-- Verificar validação --------------
                        
                        if($validar->rowCount() == 0){
			    
                            $cst->execute();//--- executa o cadastro -----
                            return 'ok';                         
                         }else{                        
                            return 'Error';                        
                            
                        }
                        
                        
		}catch(PDOException $e){
			return 'Error: '.$e->getMessage();
		}
    }
/*========================================================================*/
     public function Editar($dados) {
        try{
			$this->userid = $dados['userid'];
			$this->nome = $dados['nome'];
			$this->idade = $dados['idade'];
                        
			$cst = $this->con->conectar()->prepare("UPDATE `user` SET `nome` = :nome, `idade` = :idade WHERE `userid` = :userid;");
			$cst->bindParam(":userid", $this->userid, PDO::PARAM_INT);
			$cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
			$cst->bindParam(":idade", $this->idade, PDO::PARAM_STR);
			if($cst->execute()){
				return 'ok';
			}else{
				return 'Error ao alterar';
			}
		}catch(PDOException $e){
			return 'Error: '.$e->getMessage();
		}
         
         
         
    }
/*========================================================================*/
     public function Deletar($dados) {
         try{
			$this->userid = $dados['userid'];
			$cst = $this->con->conectar()->prepare("DELETE FROM `user` WHERE `userid` = :userid;");
			$cst->bindParam(":userid", $this->userid, PDO::PARAM_INT);
			if($cst->execute()){
				return 'ok';
			}else{
				return 'Erro ao deletar';
			}
		}catch(PDOException $e){
			return 'Error: '.$e->getMessage();
		}
    }

    
/*========================================================================*/    
    
     public function Buscar($dados) {
         try{
            $this->idade = $dados;
            $cst = $this->con->conectar()->prepare("SELECT `userid`, `nome`, `idade` FROM `user` WHERE `userid` = :userid");
            $cst->bindParam(":userid", $this->userid, PDO::PARAM_INT);
            
            if($cst->execute()){
                    return $cst->fetch();
            }
            }catch(PDOException $e){
                    return 'Error: '.$e->getMessage();
            }
    }

/*========================================================================*/
    
     public function Listar() {
        try{
            $cst = $this->con->conectar()->prepare("SELECT * FROM `user`");
            $cst->execute();            
            return $cst->fetchAll();
            }catch(PDOException $e){
            return 'Error: '.$e->getMessage();
        }
    }

}
