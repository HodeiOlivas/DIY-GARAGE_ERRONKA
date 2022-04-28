
package diy_garage_erronka;

import java.sql.SQLException;


public class TestDB {
    
  /*  public static void main(String[] args) {
        Model con = new Model();
    }*/
    
        public static void main(String[] args) throws SQLException {
        Model app = new Model();
        app.CustomerPurchases();
    }
}
