//src/main.controller.ts

import { IController } from './controller.interface';
import { Application } from 'express';
import { RealizaBkpCmd } from './services/commands/realizabkp.command';
import { AtualizaBkpCmd } from './services/commands/atualizabkp.command';
import { DeletaBkpCmd } from './services/commands/deletabkp.command';
import { ListaBkpsCmd } from './services/commands/listabkps.command';
import { RestauraBkpCmd } from './services/commands/restaurabkp.command';
import { DesfazerCmd } from './services/commands/desfazer.command';

export class Controller implements IController {
  realizaBkpCmd: RealizaBkpCmd;
  atualizaBkpCmd: AtualizaBkpCmd;
  deletaBkpCmd: DeletaBkpCmd;
  listaBkpsCmd: ListaBkpsCmd;
  restauraBkpCmd: RestauraBkpCmd;
  desfazerCmd: DesfazerCmd;

  constructor(private app: Application) {
    this.realizaBkpCmd = new RealizaBkpCmd();
    this.atualizaBkpCmd = new AtualizaBkpCmd();
    this.deletaBkpCmd = new DeletaBkpCmd();
    this.listaBkpsCmd = new ListaBkpsCmd();
    this.restauraBkpCmd = new RestauraBkpCmd();
    this.desfazerCmd = new DesfazerCmd();

    this.routes();
  }

  public routes() {
    // execute de cada comando define a rota
    this.listaBkpsCmd.execute(this.app);
    this.realizaBkpCmd.execute(this.app);
    this.deletaBkpCmd.execute(this.app);
    this.atualizaBkpCmd.execute(this.app);
    this.restauraBkpCmd.execute(this.app);
    this.desfazerCmd.execute(this.app);
  }
}
