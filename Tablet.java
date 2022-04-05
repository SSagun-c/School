public class Tablet {
    int akkustand;
    double displaydiagonale;
    boolean angeschaltet;

    public Tablet (int pGroesse) {
        akkustand = 100;
        displaydiagonale = pGroesse;

        //Drei Arten der initialisierung
            // 1 Direkt in bei der deklarierung
            // 2 nach der deklarierung 
            // 3 in einer Methode
    }

    public void akkuAufladen(int pZiel) {
        pZiel = 100;

        while(pZiel <= 100) {
            System.out.println(pZiel);
            pZiel++;
        }
    }
}
