<?php

require_once('model/Manager.php');

class PostManager extends Manager {

	function __construct() {

		$this->db = $this->dbConnect();

	}

	function getHomePosts(){

		$req = $this->db->query('SELECT * FROM posts ORDER BY creation_date DESC LIMIT 0, 3');

		return $req;
		
	}

	function getAllPosts(){

		$req = $this->db->query('SELECT * FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

		return $req;
		
	}

	function getPost($postId){

	    $req = $this->db->prepare('SELECT * FROM posts WHERE id = ?');
	    $req->execute(array($postId));
	    $post = $req->fetch();

	    return $post;

	}

}