import { ICommand } from '../command.interface'
import { BackupService } from '../backup.service';
import { Application } from 'express';

export class DesfazerCmd implements ICommand{
    backupService: BackupService;

    constructor() {
        this.backupService = new BackupService();
    }

    public execute(app: Application) {
        app.route('/backup/desfazer/put/:id').put(this.backupService.undoBackup);
        app.route('/backup/desfazer/delete/:id').post(this.backupService.undoDelBackup);
    }
}