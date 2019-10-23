package com.ertl.tais.Backup.model.commands;

public class RealizaBkpCommand implements Command {
    com.ertl.tais.model.Backup backup;

    public RealizaBkpCommand(com.ertl.tais.model.Backup backup) {
        this.backup = backup;
    }

    @Override
    public void execute() {

    }
}
