<?php 
	error_reporting(0);
	function biodata(){
		$name = "M Syifa udzihni alhamdi";
		$address = "Desa pacar gang bulung indah No 30 kecamatan tirto kabupaten Pekalongan";
		$hobbies = ['Browsing','bereksperimen','opreker'];
		$is_married = false;
		$school->highschool = "SMK SYAFII AKROM PEKALONGAN";
		$school->university = "-";
		$skill = [["name"=>"photoshop","score"=>"80"],["name"=>"office","score"=>"50"],["name"=>"coding","score"=>"70"]];
		$biodata = ["name"=>$name,"address"=>$address,"hobbies"=>$hobbies,"is_married"=>$is_married,"school"=>$school,"skill"=>$skill];
		print(json_encode($biodata));
	}
	biodata();
?>