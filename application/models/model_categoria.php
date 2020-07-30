<?php
class Model_categoria extends CI_Model {

       
        public function consultar()
        {
                $query = $this->db->get('categoria', 10);
                return $query->result();
        }

       public function guardar($data){
            $this->db->insert('categoria',$data);
	   }
        
         public function eliminar($usua_id){
            $this->db->where('cate_id',$cate_id);
            $this->db->delete('lista');

	   }
	    public function editar($usua_id){
            $this->db->where('cate_id',$cate_id);
            $this->db->edit('lista');

	   }

}

?>
