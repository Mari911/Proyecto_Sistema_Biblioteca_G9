<?php
class Model_personas extends CI_Model {

      
	
        public function consultar()
        {
                $query = $this->db->get('usuario', 10);
                return $query->result();
        }

       public function guardar($data){
            $this->db->insert('usuario',$data);
	   }
        
         public function eliminar($usua_id){
            $this->db->where('usua_id',$usua_id);
            $this->db->delete('lista');

	   }
	    public function editar($usua_id){
            $this->db->where('usua_id',$usua_id);
            $this->db->edit('lista');

	   }

}

?>
