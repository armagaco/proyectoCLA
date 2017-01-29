<?

class Cultivolote{

	private $idCultivolote;
	private $idPeriodo;
	private $idLote;
	private $idCultivo;
	private $fecha;
	private $estado;

	function __construct($idCultivolote, $idPeriodo, $idLote, $idCultivo, $fecha, $estado){
		$this->idCultivolote = $idCultivolote ;
		$this->idPeriodo = $idPeriodo ;
		$this->idLote = $idLote ;
		$this->idCultivo = $idCultivo ;
		$this->fecha = $fecha ;
		$this->estado = $estado ;
	}

	function setIdCultivolote($idCultivolote){
		$this->idCultivolote = $idCultivolote;
	}

	function getIdCultivolote(){
		return $this->idCultivolote;
	}

	function setIdPeriodo($idPeriodo){
                $this->idPeriodo = $idPeriodo;
        }

        function getIdPeriodo(){
                return $this->idPeriodo;
        }

	function setIdLote($idLote){
                $this->idLote = $idLote;
        }

        function getIdLote(){
                return $this->idLote;
        }

	function setIdCultivo($idCultivo){
                $this->idCultivo = $idCultivo;
        }

        function getIdCultivo(){
                return $this->idCultivo;
        }

	function setFecha($fecha){
                $this->fecha = $fecha;
        }

        function getFecha(){
                return $this->fecha;
        }

	function setEstado($estado){
                $this->estado = $estado;
        }

        function getEstado(){
                return $this->estado;
        }

}

?>
