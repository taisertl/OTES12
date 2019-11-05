import { ICommand } from '../command.interface'
import { BackupService } from '../backup.service';
import { Application } from 'express';

export class ListaBkpsCmd implements ICommand{
    backupService: BackupService;

    constructor() {
        this.backupService = new BackupService();
    }

    public execute(app: Application) {
        app.route('/backups').get(this.backupService.getAllBackup);
    }
}