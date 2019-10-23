package com.ertl.tais.Backup.service;

import com.ertl.tais.Backup.model.commands.Command;

public class BackupControleService {

    public BackupControleService() {

    }

    public void executarComando(Command command){
        command.execute();
    }

}
