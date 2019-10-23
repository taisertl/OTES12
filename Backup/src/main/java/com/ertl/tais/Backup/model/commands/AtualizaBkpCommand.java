package com.ertl.tais.Backup.model.commands;

import java.util.UUID;

public class AtualizaBkpCommand implements Command {
    com.ertl.tais.model.Backup backup;
    UUID id;

    public AtualizaBkpCommand(com.ertl.tais.model.Backup backup) {
        this.backup = backup;
    }

    public AtualizaBkpCommand(UUID id) {
        this.id = id;
    }

    @Override
    public void execute() {
        System.out.println("teste");
    }
}
