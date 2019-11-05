import { ICommand } from '../command.interface'
import { BackupService } from '../backup.service';
import { Application } from 'express';

export class RestauraBkpCmd implements ICommand{
    backupService: BackupService;

    constructor() {
        this.backupService = new BackupService();
    }

    public execute(app: Application) {
        app.route('/backup/:id').get(this.backupService.getBackupById);
    }
}