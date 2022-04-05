public class VariableMethods {
    int kinderzahl; //int weil es eine ganzzahl ist
    String geschlecht; //String weil es ein text ist
    double temperatur; //double weil es eine kommazahl ist
    int baumalter; //int weil es eine ganzzahl ist
    String augenfarbe; //String weil es ein text ist
    String personalausweisnummer; //String weil es eine Zeichenfolge ist
    boolean krankgemeldet; //boolean weil es ein ja oder nein wert ist
    String nummernschild; //String weil es eine zeichenfolge ist (nummern und text)
    boolean fuehrerscheinerlaubnis; //boolean weil es eine ja oder nein frage ist (Fuehrerscheinerlaubnis? -Ja / True)

    kinderzahl = 12;
    geschlecht = "Male";
    baumalter = 150;
    augenfarbe = "Blau";
    personalausweisnummer = "T4637467";     //So Initialisieren / oder direkt bei der deklarierung (int kinderzahl = 12;)
    krankgemeldet = true;
    nummernschild = "WYS IT 727";
    fuehrerscheinerlaubnis = false;

    public VariableMethods() {
        kinderzahl = 12;
        geschlecht = "Male";
        baumalter = 150;
        augenfarbe = "Blau";
        personalausweisnummer = "T4637467";     //oder so
        krankgemeldet = true;
        nummernschild = "WYS IT 727";
        fuehrerscheinerlaubnis = false;
    }
}