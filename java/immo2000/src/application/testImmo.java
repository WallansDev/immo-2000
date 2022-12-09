package application;

import java.util.Scanner; 

public class testImmo {

	public static void main(String[] args) {

		try (Scanner entreeUtilisateur = new Scanner(System.in)) {
			System.out.println("Enter HAI: ");  
			double haiUtilisateur = entreeUtilisateur.nextDouble();  
			Calcul c1 = new Calcul(haiUtilisateur);
			System.out.println(c1);
			//javax.swing.JOptionPane.showMessageDialog(null, c1);
		}
	}

}