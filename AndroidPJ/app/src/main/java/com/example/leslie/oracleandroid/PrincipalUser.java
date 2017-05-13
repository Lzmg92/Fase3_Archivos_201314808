package com.example.leslie.oracleandroid;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class PrincipalUser extends AppCompatActivity implements View.OnClickListener {

    EditText txt_carpeta;
    Button btn_search;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_principal_user);
        btn_search = (Button)findViewById(R.id.btn_search_u);
        txt_carpeta = (EditText)findViewById(R.id.txt_carpeta_search_u);
        btn_search.setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {
        switch (v.getId()){
            case R.id.btn_search_u:{
                String dato = txt_carpeta.getText().toString();
                Intent intent = new Intent(this, ListaCarpetas.class);
                intent.putExtra("carpeta", dato);
                startActivity(intent);
                break;
            }
        }
    }
}
