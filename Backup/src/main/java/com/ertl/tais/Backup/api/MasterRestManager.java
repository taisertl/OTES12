package com.ertl.tais.api;

import com.ertl.tais.Backup.api.URLManager;
import com.ertl.tais.Backup.model.commands.Command;
import com.ertl.tais.Backup.model.commands.RealizaBkpCommand;
import com.ertl.tais.model.Backup;

public class MasterRestManager implements URLManager {
    final com.ertl.tais.service.BackupControleService backupControleService;

    public MasterRestManager(com.ertl.tais.service.BackupControleService backupControleService) {
        this.backupControleService = backupControleService;
    }

    @Override
    public void tratarURL() {
        System.out.println("teste");
    }

    public void realizaBackup(Backup backup){
        Command realiza = new RealizaBkpCommand(backup);
        backupControleService.executarComando(realiza);
    }

}
