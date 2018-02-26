<?php 

	class Usuario{
		private $nome;
		private $senha;
		private $config;

		function __construct($nome, $senha){
			$this->nome = $nome;
			$this->senha = $senha;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getConfig(){
			return $this->config;
		}	

		public function setConfig($config){
			$this->config = $config;
		}	
	}