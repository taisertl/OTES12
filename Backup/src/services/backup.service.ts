//src/services/backup.service.ts

import { Request, Response } from "express";
import { WELCOME_MESSAGE } from "../constants/backup.constants";
import { SUCCESSEFUL_DELETE } from "../constants/backup.constants";
import { SUCCESSEFUL_UPDATE } from "../constants/backup.constants";
import { BACKUP_NOT_FOUND } from "../constants/backup.constants";
import { Backup } from "../models/backup.model";
import { MongooseDocument } from "mongoose"; // Necessário para converter um obj em documento Mongo
import { MementoController } from './mementos/memento.controller';

export class BackupService {
  //Teste de conexão para debug
  public welcomeMessage(req: Request, res: Response) {
    return res.status(200).send(WELCOME_MESSAGE);
  }

  public getAllBackup(req: Request, res: Response) {
    Backup.find({}, (error: Error, backups: MongooseDocument) => {
      if (error) {
        res.send(error);
      }
      res.json(backups);
    });
  }

  public getBackupById(req: Request, res: Response) {
    //Pede que seja passado um ID por parâmetro na URL
    const backupID = req.params.id;
    Backup.findById(backupID, (error: Error, backup: any) => {
      if (error) {
        res.send(error);
      }
      //Se tiver um backup retorna bkp, se não uma mensagem
      const message = backup ? backup : BACKUP_NOT_FOUND;
      res.send(message);
    });
  }

  public addNewBackup(req: Request, res: Response) {
    if (req.body['arquivo'] != undefined){
      if (req.body['data'] == undefined) {
        req.body['data'] = new Date();
      }
      if (req.body['tamanhoArquivo'] == undefined) {
        req.body['tamanhoArquivo'] = JSON.stringify(req.body['arquivo']).length;
      }
    }
    else {
      //TODO: Mover para constantes
      res.send("Arquivo nao informado");
    }

    const newBackup = new Backup(req.body);
    newBackup.save((error: Error, backup: MongooseDocument) => {
      if (error){
        res.send(error);
      }
      res.json(backup);
    });
  }

  public deleteBackup(req: Request, res: Response){
    const backupID = req.params.id;
    const mementoController = MementoController.getInstance();

    mementoController.saveMemento(backupID);

    Backup.findByIdAndDelete(backupID, (error: Error, deleted: any) => {
      if (error) {
        res.send(error);
      }
      const message = deleted ? SUCCESSEFUL_DELETE : BACKUP_NOT_FOUND;
      res.send(message);
    });
  }

  public updateBackup(req: Request, res: Response){
    const backupID = req.params.id;
    const mementoController = MementoController.getInstance();

    if (req.body['arquivo'] != undefined){
      if (req.body['data'] == undefined) {
        req.body['data'] = new Date();
      }
      if (req.body['tamanhoArquivo'] == undefined) {
        req.body['tamanhoArquivo'] = JSON.stringify(req.body['arquivo']).length;
      }
    }

    mementoController.saveMemento(backupID);

    Backup.findByIdAndUpdate(backupID, req.body, (error: Error, backup: any) => {
      if (error) {
        res.send(error);
      }
      const message = backup ? SUCCESSEFUL_UPDATE : BACKUP_NOT_FOUND;
      res.send(message);
    });
  }

  public undoBackup(req: Request, res: Response){
    const backupID = req.params.id;
    const mementoController = MementoController.getInstance();
    const mementoList = mementoController.getMementos();
    let mementoIndex: number;

    //const mementoIndex = mementoList.findIndex(mmt => mmt.status.toObject()['_id'].toString() === backupID.toString());

    mementoIndex = -1;
    for (var i = mementoList.length - 1; i >= 0; i--) {
      if(mementoList[i].status.toObject()['_id'].toString() === backupID.toString()){
        mementoIndex = i;
        break;
      }
      console.log("nao achou");
    }

    const mementoBkp = mementoList[mementoIndex];

    Backup.findByIdAndUpdate(backupID, mementoBkp.status, (error: Error, backup: any) => {
      if (error) {
        res.send(error);
      }
      mementoController.remMemento(mementoIndex);
      const message = backup ? SUCCESSEFUL_UPDATE : BACKUP_NOT_FOUND;
      res.send(message);
    });
  }

  public undoDelBackup(req: Request, res: Response){
    const backupID = req.params.id;
    const mementoController = MementoController.getInstance();
    const mementoList = mementoController.getMementos();
    let mementoIndex: number;

    //const mementoIndex = mementoList.findIndex(mmt => mmt.status.toObject()['_id'].toString() === backupID.toString());

    mementoIndex = -1;
    for (var i = mementoList.length - 1; i >= 0; i--) {
      if(mementoList[i].status.toObject()['_id'].toString() === backupID.toString()){
        mementoIndex = i;
        break;
      }
      console.log("nao achou");
    }

    const mementoBkp = mementoList[mementoIndex];

    const newBackup = new Backup(mementoBkp.status);
    newBackup.save((error: Error, backup: MongooseDocument) => {
      if (error){
        res.send(error);
      }
      res.json(backup);
    });
  }

}
