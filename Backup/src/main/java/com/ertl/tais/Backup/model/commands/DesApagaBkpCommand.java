package com.ertl.tais.Backup.model.commands;

import java.util.UUID;

public class DesApagaBkpCommand implements Command {
    UUID id;

    public DesApagaBkpCommand(UUID id) {
        this.id = id;
    }

    @Override
    public void execute() {
        System.out.println("teste");
    }

}