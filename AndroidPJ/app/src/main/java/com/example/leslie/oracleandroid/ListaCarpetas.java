package com.example.leslie.oracleandroid;

import android.app.ListActivity;
import android.content.Intent;
import android.graphics.Color;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;

public class ListaCarpetas extends ListActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        try {
            super.onCreate(savedInstanceState);
////////////////////
            String carpeta = getIntent().getExtras().getString("carpeta");
            String driver = "oracle.jdbc.driver.OracleDriver";
            String bd = "XE";
            String user = "fase3";
            String pass = "tael";
            String puerto = "1521";
            String ip = "10.0.2.2";
            Connection cnx;
            int idCarpeta = -1;

            //String ip = "192.168.0.21";
            String url = "jdbc:oracle:thin:@" + ip + ":" + puerto + ":" + bd;

            ArrayList<String> list = new ArrayList<String>();

            try {
                Class.forName(driver).newInstance();
                cnx = DriverManager.getConnection(url, user, pass);

                Statement st = cnx.createStatement();
                ResultSet resultado = st.executeQuery("SELECT ID_CARPETA FROM CARPETA WHERE NOMBRE = '"+carpeta+"'");
                if(resultado.next()){
                    idCarpeta = resultado.getInt(1);
                }
                resultado.close();

                resultado = st.executeQuery("SELECT * FROM CARPETA WHERE CARPETA_ID_CARPETA = "+String.valueOf(idCarpeta));
                while (resultado.next()) {
                    list.add(resultado.getString("NOMBRE"));
                }
                resultado.close();

                resultado = st.executeQuery("SELECT * FROM ARCHIVO WHERE CARPETA_ID_CARPETA = "+String.valueOf(idCarpeta));
                while (resultado.next()) {
                    list.add(resultado.getString("NOMBRE"));
                }
                resultado.close();

                st.close();
                cnx.close();


            } catch (Exception e) {
                list.add(e.toString());
            }


            ArrayAdapter<String> adapter = new ArrayAdapter<String>(
                    ListaCarpetas.this,
                    android.R.layout.simple_list_item_1, // standard row layout provided by android
                    list);
            setListAdapter(adapter);

            getListView().setBackgroundColor(Color.rgb(70, 130, 180));

        }catch (Exception e2){

        }
////////////////////

    }
}
