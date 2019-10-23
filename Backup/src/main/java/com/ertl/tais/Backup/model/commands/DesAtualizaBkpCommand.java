package com.ertl.tais.Backup.model.commands;

import java.util.UUID;

public class DesAtualizaBkpCommand implements Command {
    UUID id;

    public DesAtualizaBkpCommand(UUID id) {
        this.id = id;
    }

    @Override
    public void execute() {
        System.out.println("teste");
    }


}
