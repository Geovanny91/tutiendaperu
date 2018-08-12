  <?php
  class Usuario{
    public $Id;
    public $EmpresaId;
    public $EmpresaNombre;
    public $Usuario;
    public $Password;
    public $Estado;
    
    public function __toString(){
		return $this->usuario;
	}
  }
?>