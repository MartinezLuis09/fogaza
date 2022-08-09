<?php
	Class Conection {

		public function __construct(){
			$host   = "localhost";
			$user   = "root";
			$pass   = "";
			$opc = array(
					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
				);

      		$BD1	= "rfwsmqex_gvsl";
			$BD2	= "rfwsmqex_gvsl_operacion";
			$BD3	= "rfwsmqex_gvsl_supervision";
			$BD4	= "rfwsmqex_gvsl_produccion";
			$BD5	= "rfwsmqex_gvsl_finanzas";
			$BD6	= "rfwsmqex_gvsl_rrhh";
			$BD7	= "rfwsmqex_gvsl_tec";
			$BD8	= "rfwsmqex_gvsl_costsys";
			$EC1	= "rfwsmqex_ecommerce";
			$EC2	= "rfwsmqex_ecommerce_fz";

			try {
				$this->mysql1 = new PDO('mysql:host='.$host.';dbname='.$BD1,$user,$pass,$opc);
				$this->mysql1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$this->mysql2 = new PDO('mysql:host='.$host.';dbname='.$BD2,$user,$pass,$opc);
				$this->mysql2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$this->mysql3 = new PDO('mysql:host='.$host.';dbname='.$BD3,$user,$pass,$opc);
				$this->mysql3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$this->mysql4 = new PDO('mysql:host='.$host.';dbname='.$BD4,$user,$pass,$opc);
				$this->mysql4->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$this->mysql5 = new PDO('mysql:host='.$host.';dbname='.$BD5,$user,$pass,$opc);
				$this->mysql5->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$this->mysql6 = new PDO('mysql:host='.$host.';dbname='.$BD6,$user,$pass,$opc);
				$this->mysql6->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$this->mysql7 = new PDO('mysql:host='.$host.';dbname='.$BD7,$user,$pass,$opc);
				$this->mysql7->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$this->mysql8 = new PDO('mysql:host='.$host.';dbname='.$BD8,$user,$pass,$opc);
				$this->mysql8->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$this->mysqle1 = new PDO('mysql:host='.$host.';dbname='.$EC1,$user,$pass,$opc);
				$this->mysqle1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$this->mysqle2 = new PDO('mysql:host='.$host.';dbname='.$EC2,$user,$pass,$opc);
				$this->mysqle2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			} catch (PDOException $e) {
				echo "ERROR! ". $e->getMessage();
			}
		}
	}
?>
