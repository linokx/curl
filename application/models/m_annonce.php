<?php
	class M_Annonce extends CI_Model
	{
		public function lister($id)
		{
			$this->db->select('*');
			$this->db->from('annonces');
			$this->db->where('id_membre',$id);
			$this->db->where('statut',1);
			$this->db->order_by("date", "desc");
			
			$query = $this->db->get();
			return $query->result();
		}
		public function corbeille($id)
		{
			$this->db->select('*');
			$this->db->from('annonces');
			$this->db->where('id_membre',$id);
			$this->db->where('statut',0);
			$this->db->order_by("date", "desc");
			
			$query = $this->db->get();
			return $query->result();
		}
		public function ajouter($data)
		{
			$info = array(
				'id_membre' => $data['id'],
				'date' => $data['date'],
				'maj' => $data['date'],
				'url' => $data['url'],
				'titre' => $data['titre'],
				'resume' => $data['resume'],
				'photo' => $data['image'],
				'DBimage' => $data['DBimage'],
				'statut' => '1'
				);
			$this->db->insert('annonces', $info); 
		}
		public function deplacer($id){
			$this->db->where('id',$id);
			$this->db->update('annonces',array('statut' => 0));
			if($this->input->is_ajax_request()){
				echo 'L\'annonce en train d\'être placé dans la corbeille...';
			}
			else
			{
				echo 'L\'annonce en train d\'être placé dans la corbeille...';
			}

		}
		public function supprimer($id){
			$this->db->delete('annonces',array('id'=>$id));
			if($this->input->is_ajax_request()){
				echo 'Suppression en cours...';
			}
			else
			{
				echo 'Suppression en cours...';
			}

		}
		public function retablir($id){
			$this->db->where('id',$id);
			$this->db->update('annonces',array('statut' => 1));
			if($this->input->is_ajax_request()){
				echo 'Rétablissement de l\'annonce...';
			}
			else
			{
				echo 'Rétablissement de l\'annonce...';
			}

		}
		public function voir($id){
			$this->db->select('*');
			$this->db->from('annonces');
			$this->db->where('id',$id);

			$query = $this->db->get();
			return $query->row();
		}
		public function modifier($infos){
			$data = array(
            	'titre' => $infos['titre'],
           		'resume' => $infos['resume'],
           		'maj' => $infos['date'],
           		'photo' => $infos['photo']
            );

			$this->db->where('id',$infos['id']);
			$this->db->where('id_membre',$infos['id_membre']);
			$this->db->update('annonces', $data);
		}
	}
?>