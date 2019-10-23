package com.ertl.tais.Backup.model;

import com.ertl.tais.Backup.dao.ConnectionFactory;

import java.sql.Connection;
import java.sql.Statement;
import java.util.UUID;

public class BackupMetodos {
    final ConnectionFactory fabConnex; //estado final

    public BackupMetodos(ConnectionFactory fabConnex) {
        this.fabConnex = fabConnex;
    }

    public void getListaBkp() {
        System.out.println("getting lista backup...");
        String query = "SELECT * FROM backups;";

        executeUpdate(query);
    }

    public void addBkp(com.ertl.tais.model.Backup bkp) {
        System.out.println("adding backup...");
        String query = "INSERT INTO backups VALUES (" + bkp.getId().toString() + ","
                + bkp.getData().toString() + ","
                + bkp.getTamanhoArquivo().toString() + ","
                + bkp.getObjJson().toString() + ");";

        executeUpdate(query);
    }

    public void getBkp(UUID id) {
        System.out.println("getting backup...");
        String query = "SELECT objJson FROM backups WHERE id =" + id + ";";

        executeUpdate(query);
    }

    public void delBkp(UUID id) {
        System.out.println("deleting backup...");
        String query = "DELETE FROM backups WHERE id =" + id + ";";

        executeUpdate(query);
    }

    public void updateBkp(UUID id, String objJson) {
        System.out.println("teste");
    }

    public void desfazer(UUID id) {
        System.out.println("teste");
    }

    void executeUpdate(String query){
        Connection connex = fabConnex.getConnection();
        try {
            Statement stt = connex.createStatement();
            stt.executeUpdate(query);
            stt.close();
            connex.commit();
            connex.close();

        } catch (Exception ex){

        }
    }
}
