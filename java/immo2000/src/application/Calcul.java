package application;

import java.text.NumberFormat;
import java.util.Locale;

public class Calcul {
	private double hai;
	private double net;
	private double com;
	private double pourcentage;

	public Calcul(double h)
	{
		setHai(h);

		if (hai > 0 && hai <= 17999)
		{
			setNet(this.hai - 3000);
			setCom(this.hai - this.net);
		}
		else if (hai >= 18000 && hai <= 49000)
		{
			setNet(this.hai - 5000);
			setCom(this.hai - this.net);
		}
		else if (hai >= 50000 && hai <= 59999)
		{
			pourcentage = 0.01;
			setCom(this.hai * pourcentage);
			setNet(this.hai - this.com);
		}
		else if (hai >= 60000 && hai <= 109999)
		{
			pourcentage = 0.08;
			setCom(this.hai * pourcentage);
			setNet(this.hai - this.com);	
		}
		else if (hai >= 110000 && hai <= 149999)
		{
			pourcentage = 0.07;
			setCom(this.hai * pourcentage);
			setCom(this.hai - this.net);
		}
		else if (hai >= 150000 && hai <= 249999)
		{
			pourcentage = 0.06;
			setCom(this.hai * pourcentage);
			setCom(this.hai - this.net);
		}
		else if (hai >= 250000 && hai <= 499999)
		{
			pourcentage = 0.05;
			setCom(this.hai * pourcentage);
			setCom(this.hai - this.net);
		}
		else if (hai >= 500000)
		{
			pourcentage = 0.04;
			setCom(this.hai * pourcentage);
			setCom(this.hai - this.net);
		}
		else if (hai <= 0)
		{
			System.out.println("Votre HAI doit être supérieur à 0");
		}
		else
		{
			System.out.println("Votre HAI ne figure dans aucune tranche");
		}
	}

	public double getHai() {
		return hai;
	}

	public void setHai(double hai) {
		this.hai = hai;
	}

	public double getNet() {
		return net;
	}

	public void setNet(double net) {
		this.net = net;
	}

	public double getCom() {
		return com;
	}

	public void setCom(double com) {
		this.com = com;
	}

	@Override
	public String toString() {
		
		NumberFormat nf = NumberFormat.getInstance(new Locale("fr", "FR"));
		
		String hai2 = nf.format(hai);
		String chaine = "HONORAIRES D'AGENCES INCLUS : " + hai2 + "€\n";
		String com2 = nf.format(com);
		chaine += "COMMISSION : " + com2 + "€\n";
		String net2 = nf.format(net);
		chaine += "PRIX NET VENDEUR : " + net2 + "€\n";
		return chaine;
	}


}
