<?php

class Event{
	public function __construct(){
		$this->db = new Database();
		$this->tbl = 'events';
	}
	public function addNewEvent($title, $description, $eventDate, $photo_name, $photo_path, $orig_photo_path){
		$statement = $this->db->query("INSERT INTO events(title, description, eventDate, photo_name, photo_path, orig_photo_path) VALUES(?,?,?,?,?,?)", $params = [$title, $description, $eventDate, $photo_name, $photo_path, $orig_photo_path]);
		if($statement){
			return true;
		}
	}

	public function getAllEvents(){
		$statement = $this->db->query("SELECT * FROM events", $params = [], $fetchMode = 'fetchAll');
		return $statement;
	}

	public function deleteEvent($eventId){
		$statement = $this->db->query("DELETE FROM events WHERE id=?", $params = [$eventId]);
		if($statement){
			return true;
		}else{
			return false;
		}
	}

	public function deleteAllEvents(){
		$statement = $this->db->query("DELETE FROM events ", $params=[]);
		if($statement){
			return true;
		}else{
			return false;
		}
	}

	public function getEvent($id){
		$statement = $this->db->query("SELECT * FROM $this->tbl WHERE id=?", $params=[$id], $fetchMode='fetch');
		if($statement){return $statement;}
		else{return false;}
	}

	public function updateEvent($title, $description, $eventDate, $id){
		$statement = $this->db->query("UPDATE $this->tbl SET title=?, description=?, eventDate=? WHERE id=?", $params=[$title, $description, $eventDate, $id]);
		if($statement){return true;}else{return false;}
	}
}

?>