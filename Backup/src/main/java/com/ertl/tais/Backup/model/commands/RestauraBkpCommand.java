package com.ertl.tais.Backup.model.commands;

import java.util.UUID;

public class RestauraBkpCommand implements Command {
    UUID id;

    public RestauraBkpCommand(UUID id) {
        this.id = id;
    }

    @Override
    public void execute() {
        System.out.println("teste");
    }
}
