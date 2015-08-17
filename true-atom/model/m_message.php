<?php 
	require_once("core_model.php");
	require_once("m_stringlib.php");
	class M_message extends Core_model{
		public function __construct(){
			parent::__construct();
			$this->m_stringlib= new M_stringlib;
		}
		public function get_all_project($start,$end,$limit,$offset,$usn="all"){
			$this->where("project_start",$start,">=");
			$this->where("project_start",$end,"<=");
			if ($usn!="all") {
				$this->where("project_ae_usn",$usn);
			}
			
			$this->order_by("project_start","desc");
			$this->limit($limit,$offset);
			$res=$this->get("project");
			return $res;
		}
		public function get_project_by_id($project_id){
			$this->where("project_id",$project_id);
			$res=$this->get("project");
			return $res;
		}
		public function insert_message($data){

			$this->insert("message",$data);	
		}
		public function update_project($data,$project_id){
			$where = array('project_id' => $project_id);
			$this->update("project",$data,$where);	
		}
		public function delete_user($project_id){
			$where = array('project_id' => $project_id);
			$this->delete("project",$where);	
		}

		
	}

?>