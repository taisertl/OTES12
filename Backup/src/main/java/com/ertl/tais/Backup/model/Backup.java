package com.ertl.tais.model;


import java.util.Date;
import java.util.UUID;

public class Backup {
    UUID id;
    Date data;
    Double tamanhoArquivo;
    //JSONObject objJson;
    String objJson;

    public Backup(String objJson) {
        this.objJson = objJson;
    }

    public UUID getId() {
        return id;
    }

    public Date getData() {
        return data;
    }

    //public JSONObject getObjJson() {return objJson;}

    public String getObjJson() {
        return objJson;
    }

    public Double getTamanhoArquivo() {
        return tamanhoArquivo;
    }

}