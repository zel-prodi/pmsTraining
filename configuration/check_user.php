<?php
	try{
		$pdo = new PDO( DSN, USER, PWD );
		$pdo->setAttribute( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );
		$stmt = $pdo->prepare(
			"
			SELECT * FROM employees
			WHERE EmployeeCode = :Username
			AND Password = :Password
			"
		);
		$stmt->bindValue(':Username',$_REQUEST["Username"],PDO::PARAM_STR);
		$stmt->bindValue(':Password',md5($_REQUEST["Password"]),PDO::PARAM_STR);
		$stmt->execute();
		$cnt = $stmt->rowCount();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$session = $row;
		}
	}catch(PDOException $e){
		echo $e->getMessage();
	}