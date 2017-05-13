package com.example.leslie.oracleandroid;

import android.content.Intent;
import android.os.Bundle;
import android.os.StrictMode;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

public class MainActivity extends AppCompatActivity implements View.OnClickListener {

    Button boton, boton_reg;
    TextView tv;
    EditText txt_user, txt_pass;
    Connection cnx;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        // estas dos lineas las puse porque da error cuando se ejecuta la llamada
        //en el thread principal.
        // el main thread...
        StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitNetwork().build();
        StrictMode.setThreadPolicy(policy);
        setContentView(R.layout.activity_main);

        tv = (TextView)findViewById(R.id.txt);
        boton = (Button)findViewById(R.id.button);
        boton_reg= (Button)findViewById(R.id.btn_reg);
        txt_user = (EditText)findViewById(R.id.txt_usr);
        txt_pass = (EditText)findViewById(R.id.txt_pass);

        boton.setOnClickListener(this);
        boton_reg.setOnClickListener(this);

    }

    @Override
    public void onClick(View v) {
        switch (v.getId()){
            case R.id.button:{
                String driver = "oracle.jdbc.driver.OracleDriver";
                String bd = "XE";
                String user = "fase3";
                String pass = "tael";
                String puerto = "1521";
                String ip = "10.0.2.2";

                //String ip = "192.168.0.21";
                String url = "jdbc:oracle:thin:@"+ip+":"+puerto+":"+bd;

                int getRol = 0;
                String strUser,strPass,getPass;
                getPass = "";

                strPass = txt_pass.getText().toString();
                strUser = txt_user.getText().toString();

                try{
                    Class.forName(driver).newInstance();
                    cnx = DriverManager.getConnection(url,user,pass);

                    Statement st = cnx.createStatement();
                    ResultSet resultado = st.executeQuery("SELECT * FROM USUARIO WHERE  USR_NOMBRE ='"+strUser+"'");
                    if(resultado.next()){
                        getPass = resultado.getString("USR_PASS");
                        getRol = resultado.getInt("ROL_ID_ROL");
                    }
                    resultado.close();

                    st.close();
                    cnx.close();
                }catch(Exception e){
                    tv.setText(e.toString());
                }

                if(getPass.equals(strPass)){
                    if(getRol==2) {
                        Toast.makeText(this, "Correctoooo :'D", Toast.LENGTH_SHORT).show();
                        Intent intentAd = new Intent(this, PrincipalAdmin.class);
                        startActivity(intentAd);
                    }
                    else
                    {
                        Toast.makeText(this, "Correctoooo :'D", Toast.LENGTH_SHORT).show();
                        Intent intentUs = new Intent(this, PrincipalUser.class);
                        startActivity(intentUs);
                    }
                }
                else
                {
                    Toast.makeText(this, "Datos incorrectos :'(",Toast.LENGTH_SHORT).show();
                }

                break;
            }
            case R.id.btn_reg:
            {
                Intent intent = new Intent(this, Registro.class);
                startActivity(intent);
                break;
            }
        }
    }
}