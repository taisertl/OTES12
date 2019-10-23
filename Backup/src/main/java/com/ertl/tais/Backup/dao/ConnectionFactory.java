package com.ertl.tais.Backup.dao;

import java.sql.Connection;
import java.sql.DriverManager;

public class ConnectionFactory implements Database {
    String url, usuario, senha;
    Connection connex;

    public ConnectionFactory(String url, String usuario, String senha) {
        this.url = url;
        this.usuario = usuario;
        this.senha = senha;
    }

    @Override
    public Connection getConnection() {
        try{
            Class.forName("org.postgresql.Driver");
            connex = DriverManager.getConnection(url, usuario, senha);

        } catch (Exception ex ){
            //do nothing
        }

        return connex;
    }


}

