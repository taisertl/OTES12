package com.ertl.tais.Backup.model.commands;

import java.util.UUID;

public class ApagaBkpCommand  implements Command {
    UUID id;

    public ApagaBkpCommand(UUID id) {
        this.id = id;
    }

    @Override
    public void execute() {
        System.out.println("teste");
    }
}
