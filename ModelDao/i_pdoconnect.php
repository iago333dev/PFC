<?php


class DatabaseUtility{

        private $dsn, $username, $password, $database, $host;
		public $name, $pdo;

        public function __construct($host = "127.0.0.1:3306", $username ="root", $password = "", $database = "pfc"){
            $this->host = $host;
            $this->dsn = "mysqli:dbname=$database;host:$host";
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
			
        }
		
        
        //Função de Conexão ao Banco De dados

        public function connect(){
            try{
                $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password,null);
              //  $this->pdo = new PDO($this->dsn,$this->username,$this->password,null);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            } catch(PDOException $err){
                die($err->getMessage());
            }

		}
		
		public function find_user (){
			
		$sql = "select * from usuario where id = 1";
		
		$query = $this->pdo->query($sql);
        echo "<center><h3> Informações Pessoais Usuario</h3></center>";
		while ($linha=$query->fetch(PDO::FETCH_ASSOC))                          
			{  	echo "<center>";
				echo "============================================= <br>";
				echo "ID de Usuario: ".$linha['id']."<br>";
				echo "Nome: ".$linha['nome']."<br>";
				echo "Data de Nascimento: ".$linha['data_nascimet']."<br>";
				echo "CPF: ".$linha['cpf']."<br>";
				echo "Email: ".$linha['email']."<br>";
				echo "Genero: ".$linha['sexo']."<br>";
				echo "</center>";
				
			}
			
	

		}
		
		public function find_enderec(){
			
			$sql = "select * from endereco";	
						
			$query = $this->pdo->query($sql);
			
			echo "<center><h3>Endereço de Usuario</h3></center>";
			
			while ($linha=$query->fetch(PDO::FETCH_ASSOC))                          
				{  	echo "<center>";
					echo "============================================= <br>";
					echo "Rua ".$linha['rua']."<br>";
					echo "Numero: ".$linha['numero']."<br>";
					echo "CEP ".$linha['cep']."<br>";
					echo "UF: ".$linha['uf']."<br>";
					echo "Bairro ".$linha['bairro']."<br>";
					echo "Pais ".$linha['pais']."<br>";
					echo "</center>";
				
				}

		}
		
        public function insert_encom ($a,$b,$c,$d,$e) {
 
            $sql = "INSERT INTO encomenda (id,id_usuario,id_produto,quant_prod,valor_total) VALUES('$a','$b','$c','$d','$e')";
            
            $this->pdo->query($sql);	
            
        }
		
			public function calc_sale ($a,$b) {
			
			$sql = "select * from produto";
			
			$query = $this->pdo->query($sql);
			
			while ($linha=$query->fetch(PDO::FETCH_ASSOC))                          
			{  
				if ($a == $linha['id']){
					$resultado = $b * $linha['preco_venda'];
					return ($resultado);
				
				}
			}	
		}
		
public function find_encomenda(){
			
			$sql = "select * from encomenda";	
						
			$query = $this->pdo->query($sql);
			
			echo "<center><h3>Apresentando Todos os Pedidos</h3></center>";
			
			while ($linha=$query->fetch(PDO::FETCH_ASSOC))                          
				{  	echo "<center>";
					echo "============================================= <br>";
					echo "ID ".$linha['ID']."<br>";
					echo "ID do Usuario ".$linha['id_usuario']."<br>";
					echo "ID do produto ".$linha['id_produto']."<br>";
					echo "Quantidade do Produto ".$linha['quant_prod']."<br>";
					echo "Valor Total ".$linha['valor_total']."<br>";
					echo "Data de Compra ".$linha['data_atual']."<br>";
					echo "</center>";
				
				}

}		
}