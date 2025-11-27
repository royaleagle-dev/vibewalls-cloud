<?php

class Sermon{
	public function __construct(){
		$this->db = new Database();
	}

	public function insertSermon($title, $sermonDate, $description, $audio_path, $orig_audio_path){
		$statement = $this->db->query("INSERT INTO sermons (title, description, sermonDate, audio_path, orig_audio_path) VALUES($title, $description, $sermonDate, $audio_path, $orig_audio_path)", $params = []);
		if($statement){
			return true;
		}
	}

	public function getAllSermon(){
		$statement = $this->db->query("SELECT * FROM sermons", $params=[], $fetchmode = 'fetchAll');
		return $statement;
	}
}

?>