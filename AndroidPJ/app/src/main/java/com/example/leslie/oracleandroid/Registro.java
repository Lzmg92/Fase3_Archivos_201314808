package com.example.leslie.oracleandroid;
import android.os.StrictMode;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class Registro extends AppCompatActivity implements View.OnClickListener {

    Button btn_registrar;
    EditText txt_user, txt_pass1, txt_pass2,txt_mail, txt_tel;
    TextView tv_result;

    String driver = "oracle.jdbc.driver.OracleDriver";
    String bd = "XE";
    String user = "fase3";
    String pass = "tael";
    String puerto = "1521";
    String ip = "10.0.2.2";
    //String ip = "192.168.0.21";
    String url = "jdbc:oracle:thin:@"+ip+":"+puerto+":"+bd;
    Connection cnx;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        setContentView(R.layout.activity_registro);
        StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitNetwork().build();
        StrictMode.setThreadPolicy(policy);

        btn_registrar = (Button)findViewById(R.id.btn_reg_reg);
        txt_user = (EditText)findViewById(R.id.txt_user_reg);
        txt_pass1 = (EditText)findViewById(R.id.txt_pass1_reg);
        txt_pass2 = (EditText)findViewById(R.id.txt_pass2_reg);
        txt_mail = (EditText)findViewById(R.id.txt_mail_reg);
        txt_tel = (EditText)findViewById(R.id.txt_tel_reg);

        tv_result = (TextView)findViewById(R.id.tv_result_reg);

        btn_registrar.setOnClickListener(this);

    }

    @Override
    public void onClick(View v) {
        switch (v.getId()){
            case R.id.btn_reg_reg:
            {
                String usern, pass1,pass2,mail,tel;
                usern = txt_user.getText().toString();
                pass1 = txt_pass1.getText().toString();
                pass2 = txt_pass2.getText().toString();
                mail = txt_mail.getText().toString();
                tel = txt_tel.getText().toString();
                int id = 0;

                if(pass1.equals(pass2))
                {
                    try{
                        Class.forName(driver).newInstance();
                        cnx = DriverManager.getConnection(url,user,pass);

                        Statement st = cnx.createStatement();
                        ResultSet resultado = st.executeQuery("SELECT Max(ID_USUARIO) FROM USUARIO");
                        if(resultado.next()){
                            id = resultado.getInt(1);
                        }
                        resultado.close();

                        st = cnx.createStatement();
                        id++;
                        String sql = "INSERT INTO USUARIO VALUES " +
                                "("+String.valueOf(id)+",'"+
                                usern+"','"+
                                pass1+"','"+
                                mail+"',"+
                                tel+", null , null , null , null , null , null , 1 , 1 )";
                        st.executeUpdate(sql);

                        txt_user.setText("");
                        txt_pass1.setText("");
                        txt_pass2.setText("");
                        txt_mail.setText("");
                        txt_tel.setText("");
                        Toast.makeText(this, "Conectoooo :'D",Toast.LENGTH_SHORT).show();
                        cnx.commit();
                        st.close();
                        cnx.close();
                    } catch(SQLException se){
                        tv_result.setText(se.getMessage().toString());
                        se.printStackTrace();
                    } catch(Exception e){
                        tv_result.setText(e.getMessage().toString());
                    }
                }
                else
                {
                    Toast.makeText(this, "pass no coinsiden :'(",Toast.LENGTH_SHORT).show();

                }


                tv_result.setText(usern+" Registrado con exito");


                break;
            }
        }
    }
}