<?php

//BUSCANDO AS CLASSES
include_once "Php/Config/Conexao.class.php";

/**
 * Description of Usuario.class
 *
 * @copyright (c) year, Luciano Oliveira Lmideias.com
 */
class Usuario {
//ATRIBUTOS
	private $con;
	private $objConfig;
        
	private $usuarioid;
	private $celular;
	private $senha;
	private $ativo;
	private $dataCad;
        private $tipo;
        
        
	//CONSTRUTOR
	public function __construct(){
		$this->con = new Conexao();
                $this->objConfig = new Configuracoes();
	}
        
        
	//METODOS MAGICO
	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}
	public function __get($atributo){
		return $this->$atributo;
	}
        
        
	//METODOS
	/*
	public function querySeleciona($dado){
		try{
			$this->idFuncionario = $this->objfc->base64($dado, 2);
			$cst = $this->con->conectar()->prepare("SELECT `idFuncionario`, `nome`, `email`, `data_cadastro` FROM `funcionario` WHERE `idFuncionario` = :idFunc;");
			$cst->bindParam(":idFunc", $this->idFuncionario, PDO::PARAM_INT);
			if($cst->execute()){
				return $cst->fetch();
			}
		}catch(PDOException $e){
			return 'Error: '.$e->getMessage();
		}
	}
	*/
     
        
//========= BUSCAR TUDO DO USUARIO =========================================
        
	public function BuscarTudo(){
		try{
			$cst = $this->con->conectar()->prepare("SELECT * FROM `usuario`");
			$cst->execute();
			return $cst->fetchAll();
		}catch(PDOException $e){
			return 'Error: '.$e->getMessage();
		}
	}
	
        
//========= CADASTRAR USUARIO =========================================
        
	public function CadastrarUsuario($dados){
		try{
                    
                        //--- Dados a serem cadastrados---
                    
			$this->celular = $dados['celular'];                        
			$this->senha = $dados['senha'];
                        
                        $this->ativo = "1";
			$this->dataCad = date("Y/m/d");
                        $this->tipo = "1";
                        
                        //----- Preparar a inclusao do usuario -----
                        
			$cst = $this->con->conectar()->prepare("INSERT INTO `usuario` (`celular`, `senha`, `ativo`, `datacad`, `tipo`)  VALUES (:celular, :senha, :ativo, :datacad, :tipo)");
			$cst->bindParam(":celular", $this->celular, PDO::PARAM_STR);
			$cst->bindParam(":senha", $this->senha, PDO::PARAM_STR);
			$cst->bindParam(":ativo", $this->ativo, PDO::PARAM_STR);
			$cst->bindParam(":datacad", $this->dataCad, PDO::PARAM_STR);
                        $cst->bindParam(":tipo", $this->tipo, PDO::PARAM_STR);
                        
                        
                        //--- validar celular----------
                        
			$validar = $this->con->conectar()->prepare("SELECT * FROM `usuario` WHERE `celular` = :celular");
			$validar->bindParam(':celular', $this->celular, PDO::PARAM_STR);			
			$validar->execute();
			
                        //-- Verificar validação --------------
                        
                        if($validar->rowCount() == 0){
			    
                            $cst->execute();//--- executa o cadastro -----
                            return 'ok';                         
                         }else{                        
                            return 'Error ao cadastrar o usuario';                        
                            
                        }
                        
                        
		}catch(PDOException $e){
			return 'Error: '.$e->getMessage();
		}
	}
	/*
	public function queryUpdade($dados){
		try{
			$this->idFuncionario = $this->objfc->base64($dados['func'], 2);
			$this->nome = $dados['nome'];
			$this->email = $dados['email'];
			$cst = $this->con->conectar()->prepare("UPDATE `funcionario` SET `nome` = :nome, `email` = :email WHERE `idFuncionario` = :idFunc;");
			$cst->bindParam(":idFunc", $this->idFuncionario, PDO::PARAM_INT);
			$cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
			$cst->bindParam(":email", $this->email, PDO::PARAM_STR);
			if($cst->execute()){
				return 'ok';
			}else{
				return 'Error ao alterar';
			}
		}catch(PDOException $e){
			return 'Error: '.$e->getMessage();
		}
	}
	
	public function queryDelete($dado){
		try{
			$this->idFuncionario = $this->objfc->base64($dado, 2);
			$cst = $this->con->conectar()->prepare("DELETE FROM `funcionario` WHERE `idFuncionario` = :idFunc;");
			$cst->bindParam(":idFunc", $this->idFuncionario, PDO::PARAM_INT);
			if($cst->execute()){
				return 'ok';
			}else{
				return 'Erro ao deletar';
			}
		}catch(PDOException $e){
			return 'Error: '.$e->getMessage();
		}
	}
	*/
        
//========= USUARIO LOGIN E VALIDAÇÃO =================================
       
	public function Logar($dados){
		$this->celular = $dados['celular'];
		$this->senha = $dados['senha'];
		try{
			$cst = $this->con->conectar()->prepare("SELECT * FROM `usuario` WHERE `celular` = :celular AND `senha` = :senha;");
			$cst->bindParam(':celular', $this->celular, PDO::PARAM_STR);
			$cst->bindParam(':senha', $this->senha, PDO::PARAM_STR);
			$cst->execute();
			if($cst->rowCount() == 0){
				header('location: error.php');
			}else{
				//session_start();
				$rst = $cst->fetch();
				//$_SESSION['logado'] = "sim";
				//$_SESSION['func'] = $rst['idFuncionario'];
				
                                
                                
                                $at = $rst['ativo'];
                                $tp = $rst['tipo'];
                                
                                
                                if($at==1){
                                    if($tp==1){
                                     header('location: myadv.php');
                                    }elseif($tp==2){
                                     header('location: apoio.php');
                                    }elseif($tp==3){
                                     header('location: admin.php');  
                                    }elseif($tp==4){
                                      header('location: root.php');
                                    }else{
                                      header('location: myadv.php');
                                    }
                                }else{
                                    header('location: error.php');
                                }
                                                                 
                                
			}
		}catch(PDOException $e){
			return 'Error: '.$e->getMassage();
		}
	}
         
	/*
	public function funcionarioLogado($dado){
		$cst = $this->con->conectar()->prepare("SELECT `idFuncionario`, `nome`, `email` FROM `funcionario` WHERE `idFuncionario` = :idFunc;");
		$cst->bindParam(':idFunc', $dado, PDO::PARAM_INT);
		$cst->execute();
		$rst = $cst->fetch();
		$_SESSION['nome'] = $rst['nome'];
	}
	
	public function sairFuncionario(){
		session_destroy();
		header ('location: login');
	}
	*/
}

