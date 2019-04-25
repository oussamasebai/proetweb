function test() 
{
	var nom=f.Nom.value;
	var prix=f.Prix.value;
	if (nom.length==0 && prix.length==0) 
	{
        alert("remplir le nom et le prix du produit")
	}
	else if (nom.length==0)
	{
		alert("remplir le nom du produit")
	}
	else if(prix.length==0)
	{
		alert("remplir le prix du produit")
	}
	else
	{
		alert("produit ajouter avec succeé")
	}
}