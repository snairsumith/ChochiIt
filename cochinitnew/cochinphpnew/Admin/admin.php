<?php 
class admin
{
function __construct()
{
	error_reporting(E_ERROR);
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("cochinit");
}
function logincheck($name,$pass)
{
	$sql="select * from login where uname='$name' and pass='$pass'";
	$res= mysql_query($sql);
	return $res;
}
function AddCat($cat)
{
	$sql="insert into category(catname) values ('$cat')";
	$res=mysql_query($sql);
	return $res;
}
function SelectCat()
{
	$sql="selct * from category";
	$res=mysql_query($sql);
	return $res;
}
function InsertSecAd($name,$cat,$email,$phn,$uname,$pass)
{
	$sql="insert into secadmdet(name,catid,email,phn,uname,pass) values ('$name',$cat,'$email','$phn','$uname','$pass')";
	$res=mysql_query($sql);
	return $res;
}
function insertLogin($uname,$pass,$role)
{
	$sql="insert into login(uname,pass,role) values ('$uname',$pass,'$role')";
	echo $sql;
	$res=mysql_query($sql);
	return $res;
}
function selectSecAdmDetails()
{
	$sql="selct * from secadmdet";
	$res=mysql_query($sql);
	return $res;
}
function SelectPrjctDets()
{
	$sql="select * from ProjectDetails";
	$res=mysql_query($sql);
	return $res;
}
function SelectProj($id)
{
	$sql="select * from ProjectDetails where PrjctId=$id";
	$res=mysql_query($sql);
	return $res;
}
function UpdatePro($id,$title,$module,$tech,$bck,$abs,$amt,$uname,$date)
{
	$sql="update ProjectDetails set PrjTitle='$title',PrjModules='$module',Prjtec='$tech',PrjBackend='$bck',PrjAmt=$amt,PrjAbstract='$abs',Username='$uname',Date='$date' where PrjctId=$id";
	$res=mysql_query($sql);
	return $res;
}
function DeletePrjct($id)
{
	$sql="delete from ProjectDetails where PrjctId=$id";
	$res=mysql_query($sql);
	return $res;
}
function SelectSem()
{
	$sql="select * from seminardetails";
	$res=mysql_query($sql);
	return $res;
}
function SelectSeminar($id)
{
	
	$sql="select * from seminardetails where semId=$id";
	$res=mysql_query($sql);
	return $res;
}
function UpdateSeminar($id,$title,$desc,$tech,$amt,$uname,$date)
{
	$sql="update seminardetails set semTitle='$title',semDesc='$desc',tec='$tech',amount=$amt,username='$uname',date='$date' where semId=$id";
	$res=mysql_query($sql);
	return $res;
}
function DeleteSeminar($id)
{
	$sql="delete from seminardetails where semId=$id";
	$res=mysql_query($sql);
	return $res;
}
function SelectProduct()
{
	$sql="select * from ProductDetails";
	$res=mysql_query($sql);
	return $res;
}
function InsetUDetails($name,$email,$phn,$uname,$pass)
{
	$sql="insert into UserReg(name,email,phone,uname,pass) values('$name','$email','$phn','$uname','$pass')";
	$res=mysql_query($sql);
	return $res;
}
function InsertSecLog($uname,$pass,$role)
{
	$sql="insert into login(uname,pass,role) values('$uname','$pass','$role')";
	$res=mysql_query($sql);
	return $res;
}
function SelectPrdt($id)
{
    $sql="select * from productdetails where prdtId=$id";
	$res=mysql_query($sql);
	return $res;	
}
function UpdatePrdct($id,$title,$des,$date,$amt)
{
	$sql="update productdetails set PrdtName='$title',PrdtDesc='$des',PrdtDate='$date',PrdtAmnt='$amt' where prdtId=$id";
	$res=mysql_query($sql);
	return $res;
}
function DeletePrdct($id)
{
	$sql="delete from productdetails where prdtId=$id";
	$res=mysql_query($sql);
	return $res;
}

}



?>