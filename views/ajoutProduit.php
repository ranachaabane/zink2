<?PHP
include "../Entities/produit.php";
include "../Cores/ProduitC.php";

$msg="";
if (isset($_POST['submit']) and isset($_POST['price']) and isset($_POST['type']))

{
	if (!empty($_POST['price']) and !empty($_POST['type']) and !empty($_POST['description']))

{$target= "web/" .basename($_FILES['image']['name']);
$image = $_FILES['image']['name'];

$nom=  $_POST['nom'];
	$prod=new Produit($_POST['nom'],$_POST['description'],$_POST['type'],$_POST['price'],$image);

$prodC=new ProduitC();

$prodC->ajouterProduit($prod);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target ))
{
	$msg= "IMAGE LOADED SUCCESSFULLY" ; 
}
else
{
	$msg = "Problem with uploading";
}

  header("location:fillprod.php?mavar=".$nom);
}
else
{
	echo "<script> alert(\"verifier les champs\");</script>";
	header('Location: restaurant-upload-menu.html');	

	
	


}
}
else{
	echo "vérifier les champs";
	echo "<script>alert(\"verifier les champs1111111\")</script>";
}



?>