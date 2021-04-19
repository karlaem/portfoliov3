<?php
Class Projects{

	public static function getALL(){
		$con = DB::connect();
		$sql = "SELECT * FROM projects ORDER BY orderId";
		$results = mysqli_query($con, $sql);
		//get all records
		$arrProjects=[];
		while($row = mysqli_fetch_assoc($results))
		{
		$arrProjects[] = new Project($row["id"], $row["name"],$row["summary"],$row["image"],$row["orderId"],$row["link"],$row["video"]);
		}
		return $arrProjects;
	}
	public static function getsix(){
		$con = DB::connect();
		$sql = "SELECT * FROM projects ORDER BY orderId LIMIT 6";
		$results = mysqli_query($con, $sql);
		//get all records
		$arrProjects=[];
		while($row = mysqli_fetch_assoc($results))
		{
		$arrProjects[] = new Project($row["id"], $row["name"],$row["summary"],$row["image"],$row["orderId"],$row["link"],$row["video"]);
		}
		return $arrProjects;
	}

	public static function getOne($id){
		$con = DB::connect();
		$sql = "SELECT * FROM projects WHERE id=".$id;
		$results = mysqli_query($con, $sql);
		//get all records
		$arrProjects=[];
		while($row = mysqli_fetch_assoc($results))
		{
		$arrProjects[] = new Project($row["id"], $row["name"],$row["summary"],$row["image"],$row["orderId"],$row["link"],$row["video"]);
		}
		return $arrProjects;
	}
	public static function getCategory($id){
		$con = DB::connect();
		$sql = "SELECT * FROM projects WHERE categoryId=".$id;
		$results = mysqli_query($con, $sql);
		//get all records
		$arrProjects=[];
		while($row = mysqli_fetch_assoc($results))
		{
		$arrProjects[] = new Project($row["id"], $row["name"],$row["summary"],$row["image"],$row["orderId"],$row["link"],$row["video"]);
		}
		return $arrProjects;
	}
}
?><!--Projectlist-->