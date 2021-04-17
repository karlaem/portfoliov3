<?php

Class Project {
	// object scoped variable declarations
	var $id = "";
	var $name = "";
	var $summary = "";
	var $image = "";
	var $orderId = "";
	var $link = "";
	var $video = "";

	public function __construct($id, $name, $summary, $image,$orderId,$link,$video) {

		$this->id = $id;
		$this->name = $name;
		$this->summary = $summary;
		$this->image = $image;
		$this->orderId = $orderId;
		$this->link = $link;
		$this->video = $video;
	}

	public static function get($id)
	{
		$con = DB::connect();
		$sql = "SELECT * FROM projects WHERE id=".$id;
		$results = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($results);// get one record
		return new Project($row["id"], $row["name"],$row["summary"],$row["image"],$row["orderId"],$row["link"],$row["video"]);
	}
	
}

?><!--Projects-->